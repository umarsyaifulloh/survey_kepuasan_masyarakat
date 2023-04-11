<?php

namespace App\Controllers;

use App\Models\RespondenModel;
use App\Models\SurveyModel;
use App\Models\OPDModel;
use App\Models\PertanyaanModel;
use App\Models\OpsiModel;
use App\Models\PertanyaanOpsiModel;
use App\Models\UsersModel;
use App\Models\RPOJModel;
use App\Models\RespondenSurveyModel;
use App\Models\BeritaModel;
use \Mailjet\Resources;


class Responden extends BaseController
{
    public function __construct()
    {
        $this->respondenModel = new RespondenModel();
        $this->surveyModel = new SurveyModel();
        $this->opdModel = new OPDModel();
        $this->opsiModel = new OpsiModel();
        $this->pertanyaanModel = new PertanyaanModel();
        $this->pertanyaanopsiModel = new PertanyaanOpsiModel();
        $this->usersModel = new UsersModel();
        $this->rpojModel = new RPOJModel();
        $this->respondensurveyModel = new RespondenSurveyModel();
        $this->beritaModel = new BeritaModel();
        $this->mj = new \Mailjet\Client(getenv('APIkey'), getenv('Secretkey'), true, ['version' => 'v3.1']);
    }

    /**
     * -------------------------------------------------------------------
     * listOPD()
     * -------------------------------------------------------------------
     * method untuk menampilkan seluruh list OPD dari sisi responden
     * 
     * @return string 
     */
    public function listOPD()
    {
        $data = [
            'listopd' => $this->opdModel->findAll(),
            //Pager menggunakan library CI
            // 'pager' => $this->opdModel->pager
        ];
        return view('Responden/ListOPDResponden', $data);
    }

    /**
     * -------------------------------------------------------------------
     * surveyBeritaResponden($opd_kode)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman yang berisi survey dan 3 berita yang telah dibuat oleh OPD berdasarkan kode OPD
     * 
     * @param int $opd_kode
     * @return string
     */
    public function surveyBeritaResponden($opd_kode)
    {
        $data = [
            'listSurvey' => $this->surveyModel->getSurveyByOPDID($opd_kode),
            'opd' => $this->opdModel->getOPD($opd_kode),
            'listBerita' => $this->beritaModel->get3BeritaByOPDKode($opd_kode)
        ];
        return view('Responden/ListSurveyBeritaResponden', $data);
    }

    /**
     * -------------------------------------------------------------------
     * addResponden($survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman tambah responden dengan menginputkan email dari responden
     * 
     * @param int $survey_id
     * @return string
     */
    public function addResponden($survey_id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'survey' => $this->surveyModel->getDetailSurveyOPD($survey_id),
            'survey_id' => $survey_id,
        ];
        return view('Responden/AddResponden', $data);
    }

    /**
     * -------------------------------------------------------------------
     * checkEmailResponden($survey_id)
     * -------------------------------------------------------------------
     * method ini akan mengecek apakah email yang diinputkan untuk mengisi survey sudah pernah digunakan sebelumnya atau belum
     * 
     * 1. email yang diinputkan akan dicek di database 
     * 2. email akan dicek validasi form
     * 3. email akan dicek validasi captcha
     * 
     * Apabila berhasil responden akan dipindahkan ke halaman pengisian survey
     * 
     * @param int $survey_id
     */
    public function checkEmailResponden($survey_id)
    {
        $responden_email = $this->request->getPost('responden_email');
        $responden_survey_id = $this->request->getPost('responden_survey_id');
        $data_respondensurvey = $this->respondensurveyModel->getRespondenSurvey($responden_email);

        //Pengecekan email di database, apakah sudah pernah digunakan
        if ($data_respondensurvey != false) {
            foreach ($data_respondensurvey as $respondensurvey) {
                if ($respondensurvey['respondensurvey_survey_id'] != $responden_survey_id) {
                    $ruleEmail = 'required';
                } else {
                    $ruleEmail = 'required|is_unique[ms_responden.responden_email]';
                }
            }
        } else {
            $ruleEmail = 'required';
        }
        //Validasi pengisian email
        if (!$this->validate([
            'responden_email' => [
                'rules' => $ruleEmail . '|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi.',
                    'valid_email' => 'Yang Anda Inputkan bukan Email',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ]
        ])) {
            //jika gagal
            return redirect()->to(site_url('/responden/addresponden/' . $survey_id))->withInput();
        } else {
            //Jika tervalidasi, akan lanjut ke validasi captcha google
            $recaptchaResponse = trim($this->request->getVar('g-recaptcha-response'));

            $secret = env('RECAPTCHAV2_SECRET');

            $credential = array(
                'secret' => $secret,
                'response' => $recaptchaResponse
            );

            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);

            $status = json_decode($response, true);
            //Jika sukses
            if ($status['success']) {
                session()->set('responden_email', $responden_email);
                return redirect()->to(site_url("/responden/formSurveyResponden/$survey_id"));
            } else {
                session()->setFlashdata('pesan', 'Mohon Verifikasi Captcha dengan Benar!');
                return redirect()->to(site_url("/responden/addresponden/$survey_id"))->withInput();
            }
        }
    }

    /**
     * -------------------------------------------------------------------
     * formSurveyResponden($survey_id)
     * -------------------------------------------------------------------
     * method ini menampilkan halaman pengisian survey
     * 
     * di sini responden harus mengisi seluruh survey yang ada untuk mengaktifkan button submit
     * 
     * @param intm $survey_id
     * @return string
     * 
     */
    public function formSurveyResponden($survey_id)
    {
        if (session()->get('responden_email') == "") {
            return redirect()->to(site_url("/"));
        }

        //get seluruh daftar pertanyaan berdasarkan id survey
        $listPertanyaan = $this->pertanyaanModel->getPertanyaanBySurveyID($survey_id);
        $pertanyaanOpsi = [];
        //masukkan data pertanyaan dan opsi ke  $pertanyaanOpsi berdasarkanid pertanyaan
        foreach ($listPertanyaan as $pertanyaan) {
            $pertanyaan_id = $pertanyaan['pertanyaan_id'];
            $soal = [
                'pertanyaan' => $pertanyaan,
                'opsi' => $this->opsiModel->getOpsiByPertanyaanID($pertanyaan['pertanyaan_id']),
            ];
            array_push($pertanyaanOpsi, $soal);
        }

        //menghitung jumlah opsi terakhir berdasarkan id pertanyaan
        $jumlah = $this->opsiModel->getJumlahOpsiByPertanyaanID($pertanyaan_id);

        $data = [
            'judul' => 'Daftar Pertanyaan Survey',
            'pertanyaanOpsi' => $pertanyaanOpsi,
            'jumlah' => $jumlah,
            'survey' => $this->surveyModel->getDetailSurveyOPD($survey_id),
            'validation' => \Config\Services::validation()
        ];
        return view('Responden/FormSurveyResponden', $data);
    }

    /**
     * -------------------------------------------------------------------
     * createRespondenSurvey($survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menyimpan email responden dan jawaban survey yang telah diisi oleh responden
     * 
     * pada method ini juga terdapat pengiriman notifikasi email pada responden
     * layanan yang digunakan adalah mailjet
     * 
     * pada method juga akan dilakukan pengecekan jawaban apakah sudah terjawab semua atau belum
     * 
     * @param int $survey_id 
     */
    public function createRespondenSurvey($survey_id)
    {
        //ambil session email responden
        $responden_email = session()->get('responden_email');
        //ambil data responden
        $data_responden = $this->respondenModel->where('responden_email', $responden_email)->first();
        //ambil data kode dan nama opd
        $opd = $this->surveyModel
            ->select('opd_kode, opd_nama')
            ->join('ms_users', 'ms_users.users_nip=tr_survey.created_by')
            ->join('ms_opd', 'ms_opd.opd_kode=ms_users.users_opd_kode')
            ->where('survey_id', $survey_id)
            ->get()->getResultArray()[0];
        $opd_kode = $opd['opd_kode'];
        $opd_nama = $opd['opd_nama'];

        //pengiriman pesan email
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "syaifullohumarxtkj3@gmail.com",
                        'Name' => "$opd_nama"
                    ],
                    'To' => [
                        [
                            'Email' => $responden_email,
                        ]
                    ],
                    'Subject' => "Terima kasih telah mengisi survey!",
                    'HTMLPart' => '<p>Saudara telah mengisi survey dari ' . $opd_nama . '. Kami sangat mengapresiasi ketersediaan Saudara dalam meluangkan waktu dan mengisi survey tersebut. Jawaban dari survey yang Saudara kirimkan sangat membantu kami untuk mengetahui bagaimana tingkat kepuasan masyarakat terhadap pelayanan kami dan kami akan berusaha untuk terus meningkatkan kualitas pelayanan kami.</p>

                    <p>Untuk mengisi survey dari Organisasi Perangkat Daerah lain, Saudara dapat mengunjungi link&nbsp;<a href="http://203.6.149.156:8028/">di sini</a></p>.'
                ]
            ]
        ];

        $response = $this->mj->post(Resources::$Email, ['body' => $body]);
        //jika pesan berhasil terkirim
        if ($response->success()) {
            //jika responden email belum terdaftar
            if ($data_responden == null) {
                $this->respondenModel->save([
                    'responden_email' => $responden_email
                ]);
            }

            //ambil data responden lagi
            $data_responden = $this->respondenModel->where('responden_email', $responden_email)->first();

            //masukkan data id responden dan id survey ke database
            $this->respondensurveyModel->save([
                'respondensurvey_responden_id' => $data_responden['responden_id'],
                'respondensurvey_survey_id' => $survey_id
            ]);

            //masukkan id responden ke variabel
            $responden_id = $data_responden['responden_id'];

            //ambil id responden survey masukkan ke variabel
            $respondensurvey_id = $this->respondensurveyModel->select('respondensurvey_id')->where(['respondensurvey_responden_id' => $responden_id])->where(['respondensurvey_survey_id' => $survey_id])->first();
            $respondensurvey_id = $respondensurvey_id['respondensurvey_id'];

            //ambil nilai  inputan dari jawaban yang dipilih responden dan id responden survey di atas
            $rpoj_pertanyaanopsi_id = $this->request->getVar('opsi');
            $rpoj_respondensurvey_id = $respondensurvey_id;

            //ambil pertanyaan berdasarkan id survey
            $pertanyaan = $this->pertanyaanModel->getPertanyaanSurvey($survey_id);

            //hitung total pertanyaan
            $jmlPertanyaan = count($pertanyaan);

            //Jika sesuai masukkan data secara perulangan / satu per satu bersamaan id responden survey
            for ($i = 1; $i <= $jmlPertanyaan; $i++) {
                $this->rpojModel->insert([
                    'rpoj_respondensurvey_id' => $rpoj_respondensurvey_id,
                    'rpoj_pertanyaanopsi_id' => $rpoj_pertanyaanopsi_id[$i]
                ]);
            }

            //hapus session email responden dan id responden
            session()->remove('responden_email');
            session()->remove('responden_id');

            session()->setFlashdata('pesan', 'Terima kasih telah mengisi survey dari kami');

            return redirect()->to(site_url("/responden/surveyberitaresponden/$opd_kode"));
        } else {
            //jika pesan tidak terkirim
            session()->setFlashdata('pesan', 'Email Yang Anda Masukkan Tidak Valid');

            return redirect()->to(site_url("/responden/addresponden/$survey_id"))->withInput();
        }
    }

    /**
     * -------------------------------------------------------------------
     * listBerita()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman daftar semua berita yang telah dibuat oleh OPD
     * 
     * bagian atas akan terdapat berita terakhir dari yang dibuat oleh OPD
     * dan di bagian bawah akan berisi seluruh list berita yang telah dibuat oleh OPD
     * @return	string
     */
    public function listBerita()
    {
        //ambil kode opd
        $listOpd = $this->opdModel->select('opd_kode')->get()->getResultArray();
        $beritaTerakhirOPD = [];
        //ambil berita terbaru atau terakhir dari setiap opd dan masukkan ke dalam variabel $beritaTerakhirOPD
        foreach ($listOpd as $opd) {
            $berita = [
                'berita' =>  $this->beritaModel->getBeritaTerakhirByOPDKode($opd['opd_kode'])
            ];
            array_push($beritaTerakhirOPD, $berita);
        }

        $data = [
            'listBeritaTerakhir' => $beritaTerakhirOPD,
            'listBerita' => $this->beritaModel->getListBeritaLain()
        ];

        return view('Responden/ListBeritaResponden', $data);
    }

    /**
     * -------------------------------------------------------------------
     * detailBerita($berita_id)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan detail berita berdasarkan id berita 
     * 
     * @param int $berita_id
     * @return string
     */
    public function detailBerita($berita_id)
    {
        $data = [
            'berita' => $this->beritaModel->getDetailBerita($berita_id)
        ];
        return view('Responden/DetailBeritaResponden', $data);
    }

    /**
     * -------------------------------------------------------------------
     * listBeritaOPD($opd_kode)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan daftar berita berdasarkan kode opd 
     * pada bagian atas akan terdapat 3 berita terbaru dari OPD berdasarkan kode opd
     * bagian bawah akan terdapat seluruh berita dari OPD berdasarkan kode opd
     * 
     * @param int $opd_kode
     * @return string
     */
    public function listBeritaOPD($opd_kode)
    {
        $data = [
            'listBeritaTerakhir' => $this->beritaModel->get3BeritaByOPDKode($opd_kode),
            'listBerita' => $this->beritaModel->getListBeritaLainByOPD($opd_kode)
        ];
        return view('Responden/ListBeritaOPDResponden', $data);
    }
}

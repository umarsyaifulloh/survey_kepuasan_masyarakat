<?php

namespace App\Controllers;

use App\Models\OPDModel;
use App\Models\UsersModel;
use App\Models\SurveyModel;

class Opd extends BaseController
{
    public function __construct()
    {
        $this->opdModel = new OPDModel();
        $this->usersModel = new UsersModel();
        $this->surveyModel = new SurveyModel();
    }

    /**
     * -------------------------------------------------------------------
     * profil()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman profil OPD
     * 
     * @return	string
     */
    public function profil()
    {
        $data = [
            'opd' => $this->opdModel->getOPD(session()->get('users_opd_kode')),
            'users' => $this->users
        ];
        return view('OPD/ProfilOPD', $data);
    }

    /**
     * -------------------------------------------------------------------
     * editProfil()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman ubah profil OPD
     * 
     * @return	string     
     */
    public function editProfil()
    {
        //ambil session kode opd
        $opd_kode = session()->get('users_opd_kode');
        //cari data opd berdasarkan kode OPD
        $opd = $this->opdModel->getWhere(['opd_kode' => $opd_kode])->getResultArray();
        $data = [
            'judul' => 'Ubah Data OPD',
            'opd' => $opd[0],
            'users' => $this->users,
            'validation' => \Config\Services::validation()
        ];

        return view('OPD/EditProfilOPD', $data);
    }

    /**
     * -------------------------------------------------------------------
     * updateProfil()
     * -------------------------------------------------------------------
     * method ini untuk mengubah data profil OPD
     */
    public function updateProfil()
    {
        $opd_kode = session()->get('users_opd_kode');

        //cek validasi
        if (!$this->validate([
            'opd_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama OPD Mohon diisi'
                ]
            ],
            'opd_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email OPD Mohon diisi',
                    'valid_email' => 'Yang Anda Masukkan Bukan Email'
                ]
            ],
            'opd_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat OPD Mohon diisi'
                ]
            ],
            'opd_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Telepon OPD Mohon diisi'
                ]
            ],
            'opd_logo' => [
                'rules' => 'max_size[opd_logo, 2048]|is_image[opd_logo]|mime_in[opd_logo,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran logo OPD terlalu besar',
                    'is_image' => 'Yang anda pilih bukanlah logo OPD',
                    'mime_in' => 'Format logo OPD tidak sesuai'
                ]
            ]
        ])) {
            //jika gagal
            return redirect()->to("/opd/editprofil/" . $this->request->getVar('opd_kode'))->withInput();
        }

        //ambil data gambar pada inputan
        $fileLogo = $this->request->getFile('opd_logo');

        //ambil data opd
        $opd = $this->opdModel->find($opd_kode);

        //apabila tidak ada logo baru yang diupload
        if ($fileLogo->getError() == 4) {
            //ambil data logo lama
            $namaLogo = $this->request->getVar('logoLama');
        } else {
            //generate nama logo random
            $namaLogo = $fileLogo->getRandomName();

            //pindahkan logo ke folder img/logoopd
            $fileLogo->move('img/logoopd', $namaLogo);

            //jika data gambar bukan default 
            if ($opd['opd_logo'] != 'defaultLogo.png') {
                /* Apabila file gambar yang lama ingin di hapus gunakan method di bawah ini*/
                unlink('img/logoopd/' . $this->request->getVar('logoLama'));
            }
        }

        //Apabila gambar diubah ke gambar default
        if ($namaLogo == 1) {
            $namaLogo = 'defaultLogo.png';
            //hapus gambar lama
            unlink('img/logoopd/' . $opd['opd_logo']);
        }

        $ubah = [
            'opd_kode' => $this->request->getVar('opd_kode'),
            'opd_nama' => $this->request->getVar('opd_nama'),
            'opd_logo' => $namaLogo,
            'opd_email' => $this->request->getVar('opd_email'),
            'opd_alamat' => $this->request->getVar('opd_alamat'),
            'opd_telp' => $this->request->getVar('opd_telp')
        ];

        //ubah data
        $this->opdModel->update($opd_kode, $ubah);
        session()->setFlashdata('pesan', 'diubah!');
        return redirect()->to('/opd/profil');
    }

    /* -------------------------------------------------------------SUPER ADMIN----------------------------------------------------- */

    /**
     * -------------------------------------------------------------------
     * index()
     * -------------------------------------------------------------------
     * method ini menampilkan seluruh list opd 
     * 
     * @return	string
     */
    public function index()
    {
        $data = [
            'judul' => 'DAFTAR OPD KABUPATEN WONOGIRI',
            'listOpd' => $this->opdModel->getOPD(),
            'users' => $this->users
        ];

        return view('OPD/ListOPD', $data);
    }

    /**
     * -------------------------------------------------------------------
     * detail($opd_kode)
     * -------------------------------------------------------------------
     * method ini menampilkan detail opd berdasarkan kode OPD
     * 
     * @param int $opd_kode
     * @return	string
     */
    public function detail($opd_kode)
    {
        $data = [
            'judul' => 'DETAIL OPD',
            'opd' => $this->opdModel->where(['opd_kode' => $opd_kode])->get()->getResultArray()[0],
            'useropd' => $this->usersModel->getUsersByOPDKode($opd_kode),
            'surveyopd' => $this->surveyModel->getSurveyByOPDKode($opd_kode),
            'users' => $this->users
        ];

        if (empty($data['opd'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("OPD dengan kode $opd_kode tidak ditemukan");
        }
        return view('OPD/DetailOPD', $data);
    }

    /**
     * -------------------------------------------------------------------
     * add()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman tambah data OPD
     * 
     * @return string
     */
    public function add()
    {
        $data = [
            'judul' => 'Tambah Data OPD',
            'validation' => \Config\Services::validation(),
            'users' => $this->users
        ];
        return view('OPD/AddOPD', $data);
    }

    /**
     * -------------------------------------------------------------------
     * create()
     * -------------------------------------------------------------------
     * method ini menambahkan data OPD
     */
    public function create()
    {
        //cek validasi
        if (!$this->validate([
            'opd_kode' => [
                'rules' => 'required|is_unique[ms_opd.opd_kode]',
                'errors' => [
                    'required' => 'Kode OPD Mohon diisi',
                    'is_unique' => 'kode OPD sudah terdaftar'
                ]
            ],
            'opd_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama OPD Mohon diisi'
                ]
            ],
            'opd_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email OPD Mohon diisi',
                    'valid_email' => 'Yang Anda Masukkan Bukan Email'
                ]
            ],
            'opd_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat OPD Mohon diisi'
                ]
            ],
            'opd_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Telepon OPD Mohon diisi'
                ]
            ],
            'opd_logo' => [
                'rules' => 'max_size[opd_logo, 2048]|is_image[opd_logo]|mime_in[opd_logo,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran logo OPD terlalu besar',
                    'is_image' => 'Yang anda pilih bukanlah logo OPD',
                    'mime_in' => 'Format logo OPD tidak sesuai'

                ]
            ]

        ])) {
            //jika gagal
            return redirect()->to('/OPD/add')->withInput();
        }

        //ambil data gambar 
        $fileLogo = $this->request->getFile('opd_logo');

        //jika tidak ada gambar yang diubah
        if ($fileLogo->getError() == 4) {
            //masukkan nama default
            $namaLogo = 'defaultLogo.png';
        } else {
            //acak nama gambar
            $namaLogo = $fileLogo->getRandomName();
            //pindahkan gambar ke folder tujuan
            $fileLogo->move('img/logoopd', $namaLogo);
        }

        $simpan = [
            'opd_kode' => $this->request->getVar('opd_kode'),
            'opd_nama' => $this->request->getVar('opd_nama'),
            'opd_logo' => $namaLogo,
            'opd_email' => $this->request->getVar('opd_email'),
            'opd_alamat' => $this->request->getVar('opd_alamat'),
            'opd_telp' => $this->request->getVar('opd_telp'),
        ];

        //simpan data
        $this->opdModel->insert($simpan);

        session()->setFlashdata('pesan', 'ditambahkan!');

        return redirect()->to('/OPD');
    }

    /**
     * -------------------------------------------------------------------
     * delete($opd_kode)
     * -------------------------------------------------------------------
     * method ini untuk menghapus data OPD berdasarkan kode opd
     * 
     * @param int $opd_kode
     */
    public function delete($opd_kode)
    {
        //ambil data opd
        $opd = $this->opdModel->find($opd_kode);
        //jika data gambar bukan gambar default
        if ($opd['opd_logo'] != 'defaultLogo.png') {
            //hapus gambar pada server
            unlink('img/logoopd/' . $opd['opd_logo']);
        }
        //delete data opd
        $this->opdModel->where(['opd_kode' => $opd_kode])->delete();
        session()->setFlashdata('pesan', 'dihapus!');
        return redirect()->to('/OPD');
    }

    /**
     * -------------------------------------------------------------------
     * edit($opd_kode)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman ubah data OPD berdasarkan kode OPD
     * 
     * @param int $opd_kode
     * @return string
     */
    public function edit($opd_kode)
    {
        $opd = $this->opdModel->where(['opd_kode' => $opd_kode])->get()->getResultArray();
        $data = [
            'judul' => 'Ubah Data OPD',
            'opd' => $opd[0],
            'users' => $this->users,
            'validation' => \Config\Services::validation()
        ];

        return view("OPD/EditOPD", $data);
    }

    /**
     * -------------------------------------------------------------------
     * update($opd_kode)
     * -------------------------------------------------------------------
     * method ini mengubah data opd berdasarkan kode OPD
     * 
     * pada method ini akan dilakukan pengecekan apakah kode opd sudah pernah didaftarkan atau belum
     * 
     * @param int $opd_kode
     */
    public function update($opd_kode)
    {
        //cek apakah kode opd pada database sudah digunakan
        $kodeLama = $this->opdModel->where(['opd_kode' => $opd_kode])->first();
        if ($kodeLama['opd_kode'] ==  $this->request->getVar('opd_kode')) {
            $rule_kode = 'required';
        } else {
            $rule_kode = 'required|is_unique[ms_opd.opd_kode]';
        }

        //cek validasi
        if (!$this->validate([
            'opd_kode' => [
                'rules' => $rule_kode,
                'errors' => [
                    'required' => 'Kode OPD Mohon diisi',
                    'is_unique' => 'kode OPD sudah terdaftar'
                ]
            ],
            'opd_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama OPD Mohon diisi'
                ]
            ],
            'opd_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email OPD Mohon diisi',
                    'valid_email' => 'Yang Anda Masukkan Bukan Email'
                ]
            ],
            'opd_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat OPD Mohon diisi'
                ]
            ],
            'opd_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Telepon OPD Mohon diisi'
                ]
            ],
            'opd_logo' => [
                'rules' => 'max_size[opd_logo, 2048]|is_image[opd_logo]|mime_in[opd_logo,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran logo OPD terlalu besar',
                    'is_image' => 'Yang anda pilih bukanlah logo OPD',
                    'mime_in' => 'Format logo OPD tidak sesuai'

                ]
            ]

        ])) {
            //jika gagal
            return redirect()->to('/OPD/edit/' . $this->request->getVar('opd_kode'))->withInput();
        }

        //ambil data gambar
        $fileLogo = $this->request->getFile('opd_logo');

        //ambil data opd
        $opd = $this->opdModel->find($opd_kode);

        //apabila tidak ada logo baru yang diupload
        if ($fileLogo->getError() == 4) {
            //masukkan data gambar lama
            $namaLogo = $this->request->getVar('logoLama');
        } else {
            //generate nama logo random
            $namaLogo = $fileLogo->getRandomName();

            //pindahkan logo ke folder img/logoopd
            $fileLogo->move('img/logoopd', $namaLogo);

            //jika data gambar bukan gambar defaul
            if ($opd['opd_logo'] != 'defaultLogo.png') {
                /* Apabila file gambar yang lama ingin di hapus gunakan method di bawah ini*/
                unlink('img/logoopd/' . $this->request->getVar('logoLama'));
            }
        }

        //Apabila gambar diubah ke gambar default
        if ($namaLogo == 1) {
            //masukkan nama default
            $namaLogo = 'defaultLogo.png';
            //hapus gambar lama
            unlink('img/logoopd/' . $opd['opd_logo']);
        }

        $ubah = [
            'opd_kode' => $this->request->getVar('opd_kode'),
            'opd_nama' => $this->request->getVar('opd_nama'),
            'opd_logo' => $namaLogo,
            'opd_email' => $this->request->getVar('opd_email'),
            'opd_alamat' => $this->request->getVar('opd_alamat'),
            'opd_telp' => $this->request->getVar('opd_telp')
        ];

        //ubah data
        $this->opdModel->update($opd_kode, $ubah);

        session()->setFlashdata('pesan', 'diubah!');

        return redirect()->to('/OPD');
    }
}

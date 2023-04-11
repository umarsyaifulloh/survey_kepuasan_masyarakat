<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\BeritaModel;
use App\Models\OPDModel;

class Berita extends BaseController
{
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->beritaModel = new BeritaModel();
        $this->opdModel = new OPDModel();
    }

    /**
     * -------------------------------------------------------------------
     * index($opd_kode = null)
     * -------------------------------------------------------------------
     * function ini untuk menampilkan seluruh berita yang telah dibuat oleh OPD berdasarkan kode OPD yang dikirimkan
     * 
     * @param int $opd_kode
     * @return string
     */
    public function index($opd_kode = null)
    {
        //pengecekan session role id
        if (session()->get('users_role_id') == 1) {
            $users_opd_kode = $opd_kode;
        } else {
            $users_opd_kode = session()->get('users_opd_kode');
        }

        $data = [
            'users' => $this->users,
            'title' => 'Berita',
            'listberita' => $this->beritaModel->getBeritaByUser($users_opd_kode),
            'users_opd_kode' => $users_opd_kode
        ];
        return view('Berita/ListBerita', $data);
    }

    /**
     * -------------------------------------------------------------------
     * detail($berita_id, $opd_kode = null)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan detail dari berita berdasarkan id berita dan kode opd yang dikirimkan
     * 
     * @param int $berita_id
     * @param int $opd_kode
     * @return string
     */
    public function detail($berita_id, $opd_kode = null)
    {
        if (session()->get('users_role_id') == 1) {
            $users_opd_kode = $opd_kode;
        } else {
            $users_opd_kode = session()->get('users_opd_kode');
        }
        $data = [
            'users' => $this->users,
            'title' => 'Daftar Berita',
            'berita' => $this->beritaModel->getBeritaByUser($users_opd_kode, $berita_id)
        ];
        return view('Berita/DetailBerita', $data);
    }

    /**
     * -------------------------------------------------------------------
     * add()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman tambah data berita yang akan dilakukan oleh OPD
     * 
     *@return  string
     */
    public function add()
    {
        $data = [
            'users' => $this->users,
            'title' => 'Form Tambah Data Responden',
            'validation' => \Config\Services::validation()
        ];

        return view('Berita/AddBerita', $data);
    }

    /**
     * -------------------------------------------------------------------
     * create()
     * -------------------------------------------------------------------
     * method ini untuk menambahkan data berita yang sudah diisikan pada halaman AddBerita
     * 
     */
    public function create()
    {
        //Validasi inputan 
        if (!$this->validate([
            'berita_judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul berita harus diisi.',
                ]
            ],
            'berita_isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi berita harus diisi.',
                ]
            ],
            'berita_gambar' => [
                'rules' => 'uploaded[berita_gambar]|max_size[berita_gambar, 2048]|is_image[berita_gambar]|mime_in[berita_gambar,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Gambar tumbnail harus diupload',
                    'max_size' => 'Ukuran logo OPD terlalu besar',
                    'is_image' => 'Yang anda pilih bukanlah logo OPD',
                    'mime_in' => 'Format logo OPD tidak sesuai'

                ]
            ]
        ])) {
            //jika tidak tervalidasi
            return redirect()->to('berita/add')->withInput();
        }
        // jika gambar tidak kosong
        if ($this->request->getFile('berita_gambar') != '') {
            //ambil gambar
            $fileGambar = $this->request->getFile('berita_gambar');
            //random nama gambar
            $namaGambar = $fileGambar->getRandomName();
            //pindah gambar ke folder yang dituju
            $fileGambar->move('img/beritaimage', $namaGambar);
        } else {
            //jika gambar kosong
            $namaGambar = null;
        }

        /** 
         * code di bawah ini apabila gambar tumbnail dari berita ingin kita fit secara langsung
         * */

        // $beritaGambar = \Config\Services::image();
        // $beritaGambar->withFile("./img/temp/$namaGambar");
        // $beritaGambar->fit("700", "350", "center");
        // $beritaGambar->save("./img/beritaimage/$namaGambar");
        // unlink('img/temp/' . $namaGambar);

        $data = [
            'berita_judul' => $this->request->getVar('berita_judul'),
            'berita_isi' => $this->request->getVar('berita_isi'),
            'created_by' => $this->request->getVar('created_by'),
            'berita_gambar' => $namaGambar
        ];
        //simpan data
        $this->beritaModel->insert($data);

        session()->setFlashdata('pesan', 'Ditambahkan');

        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/berita/index/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/berita");
        }
    }

    /**
     * -------------------------------------------------------------------
     * listOPD()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan daftar OPD untuk melihat berita dari masing - masing OPD
     * 
     * @return string
     */
    public function listOPD()
    {
        $data = [
            'listopd' => $this->opdModel->select('opd_nama, opd_kode')->findAll(),
            'pager' => $this->opdModel->pager,
            'users' => $this->users
        ];
        return view('Berita/ListOPD', $data);
    }

    /**
     * -------------------------------------------------------------------
     * delete($berita_id)
     * -------------------------------------------------------------------
     * method ini untuk menghapus data berita secara permanen berdasarkan id berita yang dikirimkan
     * 
     * @param int $berita_id
     */
    public function delete($berita_id)
    {
        $berita = $this->beritaModel->find($berita_id);
        //cek apakah data berita merupaka gambar default
        if ($berita['berita_gambar'] != 'defaultLogo.jpg') {
            //jika tidak maka hapus gambar di server
            unlink('img/beritaimage/' . $berita['berita_gambar']);
        }
        //kemudian hapus data berita
        $this->beritaModel->where(['berita_id' => $berita_id])->delete();
        session()->setFlashdata('pesan', 'Dihapus');

        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/berita/index/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/berita");
        }
    }

    /**
     * -------------------------------------------------------------------
     * edit($berita_id)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman untuk melakukan edit data berita berdasarkan id berita yang dikirimkan
     * 
     * @param int $berita_id
     * @return string
     */
    public function edit($berita_id)
    {
        $data = [
            'users' => $this->users,
            'title' => 'Form ubah isi',
            'validation' => \Config\Services::validation(),
            'berita' => $this->beritaModel->getBerita($berita_id)
        ];
        return view('Berita/EditBerita', $data);
    }

    /**
     * -------------------------------------------------------------------
     * update($berita_id)
     * -------------------------------------------------------------------
     * method ini untuk menambahkan data berita yang sudah diisikan pada halaman AddBerita
     * 
     * @param int $berita_id
     */
    public function update($berita_id)
    {
        //cek validasi
        if (!$this->validate([
            'berita_judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul berita harus diisi.',
                ]
            ],
            'berita_isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi berita harus diisi.',
                ]
            ],
            'berita_gambar' => [
                'rules' => 'max_size[berita_gambar,2048]|is_image[berita_gambar]|mime_in[berita_gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Ini bukan gambar',
                    'mime_in' => 'Ini bukan gambar',
                ]
            ],
        ])) {
            //jika gagal
            return redirect()->to('berita/edit/' . $this->request->getVar('berita_id'))->withInput();
        }

        $fileGambar = $this->request->getFile('berita_gambar');

        //cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            //generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            //pindahkan gambar 
            $fileGambar->move('img/beritaimage', $namaGambar);
            //hapus file lama
            unlink('img/beritaimage/' . $this->request->getVar('gambarLama'));
        }
        $ubah = [
            'berita_id' => $berita_id,
            'berita_judul' => $this->request->getVar('berita_judul'),
            'berita_isi' => $this->request->getVar('berita_isi'),
            'updated_by' => $this->request->getVar('updated_by'),
            'berita_gambar' => $namaGambar
        ];

        //ubah data
        $this->beritaModel->update($berita_id, $ubah);
        session()->setFlashdata('pesan', 'Diubah');

        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/berita/index/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/berita");
        }
    }
}

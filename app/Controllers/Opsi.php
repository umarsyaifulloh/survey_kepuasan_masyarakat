<?php

namespace App\Controllers;

use App\Models\OpsiModel;
use App\Models\UsersModel;

class Opsi extends BaseController
{

    public function __construct()
    {
        $this->OpsiModel = new OpsiModel();
        $this->usersModel = new UsersModel();
    }

    /**
     * -------------------------------------------------------------------
     * add($pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman tambah opsi apabila pada opsi pertanyaan yang dibutuhkan tidak ada pada sisi admin
     * 
     * @param int $pertanyaan_id
     * @param int $survey_id
     * @return string
     */
    public function add($pertanyaan_id, $survey_id)
    {
        $data = [
            'judul' => 'Form Tambah Data Opsi',
            'validation' => \Config\Services::validation(),
            'pertanyaan_id' => $pertanyaan_id,
            'survey_id' => $survey_id,
            'users' => $this->users
        ];
        return view('Opsi/AddOpsi', $data);
    }

    /**
     * -------------------------------------------------------------------
     * create($pertanyaan_id, $survey_id)
     * --------------------------------------------------------------------
     * method ini untuk menambahkan data opsi pada opsi pertanyaan
     * 
     * @param $pertanyaan_id
     * @param $survey_id
     */
    public function create($pertanyaan_id, $survey_id)
    {
        //Cek validasi 
        if (!$this->validate([
            'opsi_nama' => [
                'rules' => 'required|is_unique[ms_opsi.opsi_nama]',
                'errors' => [
                    'required' => ' Opsi harus diisi',
                    'is_unique' => ' Opsi sudah terdaftar'
                ]
            ]
        ])) {
            //jika gagal
            $validation = \config\Services::validation();
            return redirect()->to("/opsi/add/$pertanyaan_id/$survey_id")->withInput()->with('validation', $validation);
        }

        //simpan data
        $this->OpsiModel->save([
            'opsi_nama' => ucwords(strtolower($this->request->getVar('opsi_nama')))
        ]);
        session()->setFlashdata('pesan', 'ditambah!');
        return redirect()->to("/opsi/add/$pertanyaan_id/$survey_id");
    }

    /**
     * -------------------------------------------------------------------
     * addOpsi()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman tambah opsi pada opsi master pada super admin 
     * 
     * @return	string
     */
    public function addOpsi()
    {
        $data = [
            'judul' => 'Form Tambah Data opsi',
            'validation' => \Config\Services::validation(),
            'users' => $this->users
        ];

        return view('Opsi/AddOpsiMaster', $data);
    }

    /* -------------------------------------------------------------SUPER ADMIN----------------------------------------------------- */

    /**
     * -------------------------------------------------------------------
     * index()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan list opsi master dari sisi superadmin
     * @return	string
     */
    public function index()
    {
        $data = [
            'judul' => 'List Opsi Jawaban',
            'listOpsi' => $this->OpsiModel->getOpsi(),
            'users' => $this->users
        ];
        return view('Opsi/ListOpsi', $data);
    }

    /**
     * -------------------------------------------------------------------
     * createOpsi()
     * -------------------------------------------------------------------
     * method ini untuk menambahkan data opsi master
     * 
     * @return string
     */
    public function createOpsi()
    {
        //cek validasi input
        if (!$this->validate([
            'opsi_nama' => [
                'rules' => 'required|is_unique[ms_opsi.opsi_nama]',
                'errors' => [
                    'required' => ' opsi harus diisi.',
                    'is_unique' => 'opsi sudah terdaftar.'
                ]
            ]
        ])) {
            //jika gagal
            return redirect()->to('/opsi/addOpsi')->withInput();
        }

        //simpan data
        $this->OpsiModel->save([
            'opsi_nama' => ucwords(strtolower($this->request->getVar('opsi_nama'))),
            'opsi_id' => ''
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/opsi');
    }

    /**
     * -------------------------------------------------------------------
     * delete($opsi_id)
     * -------------------------------------------------------------------
     * method ini untuk menghapus data opsi pada opsi master pada user superadmin berdasarkan id opsi 
     * 
     * @param int $opsi_id
     */
    public function delete($opsi_id)
    {
        $this->OpsiModel->delete($opsi_id);
        session()->setFlashdata('pesan', 'dihapus!');
        return redirect()->to('/opsi');
    }

    /**
     * -------------------------------------------------------------------
     * edit($opsi_id)
     * -------------------------------------------------------------------
     * method ini untuk menghapus data opsi pada opsi master pada user superadmin berdasarkan id opsi 
     * @param int $opsi_id
     * @return string
     */
    public function edit($opsi_id)
    {
        $data = [
            'judul' => 'Form Ubah Data Opsi',
            'validation' => \Config\Services::validation(),
            'opsi' => $this->OpsiModel->getOpsi($opsi_id),
            'users' => $this->users
        ];

        return view('Opsi/EditOpsi', $data);
    }

    /**
     * -------------------------------------------------------------------
     * update()
     * -------------------------------------------------------------------
     * method ini untuk mengubah opsi pada sisi superadmin
     * 
     * @return string
     */
    public function update()
    {
        //cek data opsi apakah sudah pernah dipakai
        $opsi_id = $this->request->getVar('opsi_id');
        $opsiLama = $this->OpsiModel->where(['opsi_id' => $opsi_id])->first();
        if ($opsiLama['opsi_nama'] ==  $this->request->getVar('opsi_nama')) {
            $rule_opsi = 'required';
        } else {
            $rule_opsi = 'required|is_unique[ms_opsi.opsi_nama]';
        }

        //cek validasi 
        if (!$this->validate([
            'opsi_nama' => [
                'rules' => $rule_opsi,
                'errors' => [
                    'required' => 'Nama Opsi Mohon diisi',
                    'is_unique' => 'Nama Opsi sudah terdaftar'
                ]
            ],
        ])) {
            //jika gagal
            return redirect()->to('/opsi/edit/' . $opsi_id)->withInput();
        }

        //simpan data
        $this->OpsiModel->save([
            'opsi_id'  => $opsi_id,
            'opsi_nama' => $this->request->getVar('opsi_nama'),
        ]);

        session()->setFlashdata('pesan', 'diubah!');
        return redirect()->to('/opsi');
    }
}

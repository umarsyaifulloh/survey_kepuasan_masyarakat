<?php

namespace App\Controllers;

use App\Models\PertanyaanOpsiModel;
use App\Models\OpsiModel;
use App\Models\UsersModel;

class PertanyaanOpsi extends BaseController
{
    protected $pertanyaanOpsiModel;

    public function __construct()
    {
        $this->pertanyaanopsiModel = new PertanyaanOpsiModel();
        $this->opsiModel = new OpsiModel();
        $this->usersModel = new UsersModel();
    }

    /**
     * -------------------------------------------------------------------
     * create($pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menambahkan opsi untuk pertanyaan berdasarkan id pertanyaan dan id survey
     * 
     * pada method ini opsi yang sudah ditambahkan tidak boleh ditambahkan kembali
     * 
     * @param int $pertanyaan_id
     * @param int $survey_id
     */
    public function create($pertanyaan_id, $survey_id)
    {
        //cek apakah data opsi pada pertanyaan sudah dipakai pada database
        $pertanyaan_id = $this->request->getPost('pertanyaanopsi_pertanyaan_id');
        $opsi_id = $this->request->getPost('pertanyaanopsi_opsi_id');
        $pertanyaanopsi = $this->pertanyaanopsiModel->where(['pertanyaanopsi_pertanyaan_id' => $pertanyaan_id])->where('pertanyaanopsi_opsi_id', $opsi_id)->get()->getResultArray();
        if ($pertanyaanopsi != null) {
            foreach ($pertanyaanopsi as $po) {
                if ($po['pertanyaanopsi_pertanyaan_id'] == $pertanyaan_id || $po['pertanyaanopsi_opsi_id'] == $opsi_id) {
                    $rule_po = 'required|is_unique[tr_pertanyaanopsi.pertanyaanopsi_opsi_id]';
                } else {
                    $rule_po = 'required';
                }
            }
        } else {
            $rule_po = 'required';
        }
        //validasi input opsi pertanyaan 
        if (!$this->validate([
            'pertanyaanopsi_opsi_id' => [
                'rules' => $rule_po,
                'errors' => [
                    'required' => 'Opsi harus dipilih',
                    'is_unique' => 'Opsi sudah digunakan'
                ]
            ]
        ])) {
            //jika gagal
            if (session()->get('users_role_id') == 1) {
                return redirect()->to("/pertanyaan/detailsuper/$pertanyaan_id/$survey_id/" . $this->users['opd_kode'])->withInput();
            } else {
                return redirect()->to("/pertanyaan/detail/$pertanyaan_id/$survey_id")->withInput();
            }
        }

        $simpan = [
            'pertanyaanopsi_id' => '',
            'pertanyaanopsi_pertanyaan_id' => $this->request->getVar('pertanyaanopsi_pertanyaan_id'),
            'pertanyaanopsi_opsi_id' => $this->request->getVar('pertanyaanopsi_opsi_id')
        ];

        //simpan data
        $this->pertanyaanopsiModel->insert($simpan);

        session()->setFlashdata('pesan', 'dipilih!');

        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/pertanyaan/detailsuper/$pertanyaan_id/$survey_id/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/pertanyaan/detail/$pertanyaan_id/$survey_id");
        }
    }

    /**
     * -------------------------------------------------------------------
     * delete($pertanyaanopsi_id, $pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menghapus data opsi pertanyaan berdasarkan id pertanyaanopsi, id pertanyaan, id survey
     * 
     * @param @pertanyaanopsi_id
     * @param	$pertanyaan_id
     * @param $survey_id
     */
    public function delete($pertanyaanopsi_id, $pertanyaan_id, $survey_id)
    {
        //hapus data opsi pertanyaan
        $this->pertanyaanopsiModel->where(['pertanyaanopsi_id' => $pertanyaanopsi_id])->delete();
        session()->setFlashdata('pesan', 'dihapus!');
        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/Pertanyaan/detailsuper/$pertanyaan_id/$survey_id/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/Pertanyaan/detail/$pertanyaan_id/$survey_id");
        }
    }

    /**
     * -------------------------------------------------------------------
     * edit($pertanyaanopsi_id, $pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman ubah opsi pertanyaan berdasarkan id pertanyaanopsi, id pertanyaan, dan id survey
     * 
     * @param @pertanyaanopsi_id
     * @param	$pertanyaan_id
     * @param $survey_id
     * 
     * @return string
     */
    public function edit($pertanyaanopsi_id, $pertanyaan_id, $survey_id)
    {
        $data = [
            'judul' => 'Ubah Data Pertanyaan Opsi',
            'pertanyaanopsi' => $this->pertanyaanopsiModel->where(['pertanyaanopsi_id' => $pertanyaanopsi_id])->first(),
            'opsi' => $this->opsiModel->getOpsi(),
            'validation' => \Config\Services::validation(),
            'pertanyaan_id' => $pertanyaan_id,
            'survey_id' => $survey_id,
            'users' => $this->users
        ];

        return view('/PertanyaanOpsi/EditPertanyaanOpsi', $data);
    }

    /**
     * -------------------------------------------------------------------
     * ($pertanyaanopsi_id, $pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menghapus data opsi pertanyaan berdasarkan id pertanyaanopsi, id pertanyaan, id survey
     * 
     * @param @pertanyaanopsi_id
     * @param	$pertanyaan_id
     * @param $survey_id
     */
    public function update($pertanyaanopsi_id, $pertanyaan_id, $survey_id)
    {
        //cek apakah data opsi pada pertanyaan sudah dipakai pada database
        $pertanyaan_id = $this->request->getPost('pertanyaanopsi_pertanyaan_id');
        $opsi_id = $this->request->getPost('pertanyaanopsi_opsi_id');
        $pertanyaanopsi = $this->pertanyaanopsiModel->where(['pertanyaanopsi_pertanyaan_id' => $pertanyaan_id])->where('pertanyaanopsi_opsi_id', $opsi_id)->get()->getResultArray();
        if ($pertanyaanopsi != null) {
            foreach ($pertanyaanopsi as $po) {
                if ($po['pertanyaanopsi_pertanyaan_id'] == $pertanyaan_id || $po['pertanyaanopsi_opsi_id'] == $opsi_id) {
                    $rule_po = 'required|is_unique[tr_pertanyaanopsi.pertanyaanopsi_opsi_id]';
                } else {
                    $rule_po = 'required';
                }
            }
        } else {
            $rule_po = 'required';
        }

        //cek validasi
        if (!$this->validate([
            'pertanyaanopsi_opsi_id' => [
                'rules' => $rule_po,
                'errors' => [
                    'required' => 'Opsi harus dipilih',
                    'is_unique' => 'Opsi sudah digunakan'

                ]
            ]
        ])) {
            //jika gagal
            return redirect()->to("/PertanyaanOpsi/edit/" . $this->request->getVar('pertanyaanopsi_id') . "/$pertanyaan_id/$survey_id")->withInput();
        }

        $ubah = [
            'pertanyaanopsi_pertanyaan_id' => $this->request->getVar('pertanyaanopsi_pertanyaan_id'),
            'pertanyaanopsi_opsi_id' => $this->request->getVar('pertanyaanopsi_opsi_id')
        ];

        //ubah data
        $this->pertanyaanopsiModel->update($pertanyaanopsi_id, $ubah);

        session()->setFlashdata('pesan', 'diubah!');

        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/pertanyaan/detailsuper/$pertanyaan_id/$survey_id/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/pertanyaan/detail/$pertanyaan_id/$survey_id");
        }
    }
}

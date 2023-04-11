<?php

namespace App\Controllers;

use App\Models\PertanyaanModel;
use App\Models\PertanyaanOpsiModel;
use App\Models\OpsiModel;
use App\Models\UsersModel;
use App\Models\OPDModel;

class Pertanyaan extends BaseController
{
    protected $pertanyaanModel;

    public function __construct()
    {
        $this->pertanyaanModel = new PertanyaanModel();
        $this->pertanyaanopsiModel = new PertanyaanOpsiModel();
        $this->opsiModel = new OpsiModel();
        $this->usersModel = new UsersModel();
        $this->opdModel = new OPDModel();
    }

    /**
     * -------------------------------------------------------------------
     * detail($pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan pertanyaan survey, daftar opsi pertanyaan, dan tambah opsi pertanyaan berdasarkan id pertanyaan dan id survey untuk sisi admin
     * 
     * @param int $pertanyaan_id
     * @param int $survey_id      
     * 
     * @return string
     */
    public function detail($pertanyaan_id, $survey_id)
    {
        $users_opd_kode = session()->get('users_opd_kode');
        $data = [
            'judul' => 'DETAIL PERTANYAAN SURVEY',
            'pertanyaan' => $this->pertanyaanModel->getPertanyaanSurveyDetail($pertanyaan_id)[0],
            'listPertanyaanOpsi' => $this->pertanyaanopsiModel->getOpsiPertanyaan($pertanyaan_id),
            'opd' => $this->opdModel->where(['opd_kode' => $users_opd_kode])->get()->getResultArray()[0],
            'validation' => \Config\Services::validation(),
            'listOpsi' => $this->opsiModel->getOpsi(),
            'pertanyaan_id' => $pertanyaan_id,
            'survey_id' => $survey_id,
            'users' => $this->users
        ];
        if (empty($data['pertanyaan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Pertanyaan Survey dengan id $pertanyaan_id tidak ditemukan");
        }
        return view('Pertanyaan/DetailPertanyaan', $data);
    }

    /**
     * -------------------------------------------------------------------
     * detailsuper($pertanyaan_id, $survey_id, $opd_kode)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan pertanyaan survey, daftar opsi pertanyaan berdasarkan id pertanyaan dan id survey untuk sisi admin
     * 
     * @param int $pertanyaan_id
     * @param int $survey_id 
     * @param int $opd_kode
     * 
     * @return string
     */
    public function detailsuper($pertanyaan_id, $survey_id, $opd_kode)
    {
        $data = [
            'judul' => 'DETAIL PERTANYAAN SURVEY',
            'pertanyaan' => $this->pertanyaanModel->getPertanyaanSurveyDetail($pertanyaan_id)[0],
            'listPertanyaanOpsi' => $this->pertanyaanopsiModel->getOpsiPertanyaan($pertanyaan_id),
            'opd' => $this->opdModel->where(['opd_kode' => $opd_kode])->get()->getResultArray()[0],
            'validation' => \Config\Services::validation(),
            'listOpsi' => $this->opsiModel->getOpsi(),
            'pertanyaan_id' => $pertanyaan_id,
            'survey_id' => $survey_id,
            'users' => $this->users
        ];
        if (empty($data['pertanyaan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Pertanyaan Survey dengan id $pertanyaan_id tidak ditemukan");
        }
        return view('Pertanyaan/DetailPertanyaan', $data);
    }

    /**
     * -------------------------------------------------------------------
     * create($survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menambahkan data pertanyaan berdasarkan id survey
     * 
     * @param $survey_id
     */
    public function create($survey_id)
    {
        //cek validasi
        if (!$this->validate([
            'pertanyaan_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pertanyaan survey harus diisi'
                ]
            ]
        ])) {
            //jika gagal
            if (session()->get('users_role_id') == 1) {
                return redirect()->to("/survey/detailsuper/$survey_id/" . $this->users['opd_kode'])->withInput();
            } else {
                return redirect()->to("/survey/detail/$survey_id")->withInput();
            }
        }

        $simpan = [
            'pertanyaan_id' => '',
            'pertanyaan_nama' => $this->request->getVar('pertanyaan_nama'),
            'pertanyaan_survey_id' => $this->request->getVar('pertanyaan_survey_id'),
            'created_by' => $this->request->getVar('created_by')
        ];

        //simpan data
        $this->pertanyaanModel->insert($simpan);
        session()->setFlashdata('pesan', 'ditambah!');

        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/survey/detailsuper/$survey_id/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/survey/detail/$survey_id");
        }
    }

    /**
     * -------------------------------------------------------------------
     * function delete($pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menghapus data pertanyaan berdasarkan id pertanyaan dan id survey
     * 
     * @param int $pertanyaan_id
     * @param int $survey_id      
     */
    public function delete($pertanyaan_id, $survey_id)
    {
        //menghapus data pertanyaan
        $this->pertanyaanModel->where(['pertanyaan_id' => $pertanyaan_id])->delete();
        session()->setFlashdata('pesan', 'dihapus!');
        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/survey/detailsuper/$survey_id/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/survey/detail/$survey_id");
        }
    }

    /**
     * -------------------------------------------------------------------
     * edit($pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman ubah data pertanyaan
     * 
     * @param int $pertanyaan_id
     * @param int $survey_id  
     * 
     * @return string   
     */
    public function edit($pertanyaan_id, $survey_id)
    {
        $users_opd_kode = session()->get('users_opd_kode');
        $data = [
            'judul' => 'Ubah Data Pertanyaan Survey',
            'pertanyaan' => $this->pertanyaanModel->where(['pertanyaan_id' => $pertanyaan_id])->first(),
            'validation' => \Config\Services::validation(),
            'survey_id' => $survey_id,
            'users' => $this->users,
            $users_opd_kode
        ];

        return view('/Pertanyaan/EditPertanyaan', $data);
    }

    /**
     * -------------------------------------------------------------------
     * update($pertanyaan_id, $survey_id)
     * -------------------------------------------------------------------
     * 
     * method ini untuk mengubah data pertanyaan berdasarkan id pertanyaan dan id survey
     * 
     * @param int $pertanyaan_id
     * @param int $survey_id
     */
    public function update($pertanyaan_id, $survey_id)
    {
        $this->pertanyaanModel->where(['pertanyaan_id' => $pertanyaan_id])->first();

        //cek validasi
        if (!$this->validate([
            'pertanyaan_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pertanyaan survey harus diisi'
                ]
            ]
        ])) {
            //jika gagal
            return redirect()->to("/Pertanyaan/edit/"  . $this->request->getVar('pertanyaan_id') . "/$survey_id")->withInput();
        }

        $ubah = [
            'pertanyaan_nama' => $this->request->getVar('pertanyaan_nama'),
            'pertanyaan_survey_id' => $this->request->getVar('pertanyaan_survey_id'),
            'updated_by' => $this->request->getVar('updated_by')
        ];

        //ubah data
        $this->pertanyaanModel->update($pertanyaan_id, $ubah);
        session()->setFlashdata('pesan', 'diubah!');

        if (session()->get('users_role_id') == 1) {
            return redirect()->to("/survey/detailsuper/$survey_id/" . $this->users['opd_kode']);
        } else {
            return redirect()->to("/survey/detail/$survey_id");
        }
    }
}

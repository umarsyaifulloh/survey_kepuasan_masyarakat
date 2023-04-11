<?php

namespace App\Controllers;

use App\Models\SurveyModel;
use App\Models\PertanyaanModel;
use App\Models\OpsiModel;
use App\Models\PertanyaanOpsiModel;
use App\Models\RespondenModel;
use App\Models\RPOJModel;
use App\Models\UsersModel;
use App\Models\OPDModel;


class Laporan extends BaseController
{
    public function __construct()
    {
        $this->surveyModel = new SurveyModel();
        $this->opsiModel = new OpsiModel();
        $this->pertanyaanModel = new PertanyaanModel();
        $this->pertanyaanopsiModel = new PertanyaanOpsiModel();
        $this->respondenModel = new RespondenModel();
        $this->rpojModel = new RPOJModel();
        $this->usersModel = new UsersModel();
        $this->opdModel = new OPDModel();
    }

    /**
     * -------------------------------------------------------------------
     * listTahun($opd_kode = null)
     * -------------------------------------------------------------------
     * method ini untuk menampikan list tahun berdasarkan kode opd yang dikirimkansebelum membukan halaman list survey pada laporan
     * @param int $opd
     * @return string
     */
    public function listTahun($opd_kode = null)
    {
        //cek role user admin
        if (session()->get('users_role_id') == 1) {
            $users_opd_kode = $opd_kode;
        } else {
            $users_opd_kode = session()->get('users_opd_kode');
        }

        $data = [
            'judul' => 'Formulir Survey',
            'listTahun' => $this->surveyModel->getSurveyTahunByUsers($users_opd_kode),
            'users' => $this->users,
            'opd_kode' => $users_opd_kode
        ];
        return view('Laporan/ListTahun', $data);
    }

    /**
     * -------------------------------------------------------------------
     * listSurvey($opd_kode = null, $survey_tahun = null)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan list survey berdasarkan kode OPD dan tahun survey
     * 
     * @param int $opd_kode
     * @param int $survey_tahun
     * @return string 
     */
    public function listSurvey($opd_kode = null, $survey_tahun = null)
    {
        if (session()->get('users_role_id') == 1) {
            $users_opd_kode = $opd_kode;
        } else {
            $users_opd_kode = session()->get('users_opd_kode');
        }

        $data = [
            'tahun' => $survey_tahun,
            'listSurvey' => $this->surveyModel->getListSurveyByTahun($users_opd_kode, $survey_tahun),
            'users' => $this->users,
            'opd_kode' => $users_opd_kode
        ];
        return view('Laporan/ListSurvey', $data);
    }

    /**
     * -------------------------------------------------------------------
     * listSurvey($opd_kode = null, $survey_tahun = null)
     * -------------------------------------------------------------------
     * method ini untuk menampilan halaman laporan
     * 
     * @param int $survey_id
     * @param int $opd_kode
     * @return string
     */
    public function laporan($survey_id, $opd_kode = null)
    {
        //ambil daftar pertanyaan berdasarkan id survey
        $listPertanyaan = $this->pertanyaanModel->getPertanyaanBySurveyID($survey_id);

        $listRespon = [];
        /**
         * mencari dan memasukkan data pertanyaan, opsi, dan total berdasarkan id pertanyaan ke variabel $listRespon
         * 
         * memisahkan data pertama dengan data kedua sampe terakhir
         */
        foreach ($listPertanyaan as $pertanyaan) {
            $listOpsiTotal = $this->opsiModel->getOpsidanTotal($pertanyaan['pertanyaan_id']);
            $opsiTotalAwal = array_shift($listOpsiTotal);
            $data = [
                'pertanyaan' => $pertanyaan,
                'opsiTotalAwal' => $opsiTotalAwal,
                'opsiTotalAkhir' => $listOpsiTotal
            ];
            array_push($listRespon, $data);
        }

        $data = [
            'judul' => 'Laporan Survey',
            'survey' => $this->surveyModel->getSurveyDetail($survey_id),
            'listRespon' => $listRespon,
            'users' => $this->users,
            'opd_kode' => $opd_kode
        ];
        return view('Laporan/Laporan', $data);
    }

    /**
     * -------------------------------------------------------------------
     * listOPD()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan daftar OPD untuk menentukan laporan mana yang akan dilihat oleh superadmin
     * 
     * @return string
     */
    public function listOPD()
    {
        $data = [
            'users' => $this->users,
            'listopd' => $this->opdModel->select('opd_nama, opd_kode')->findAll(),
        ];
        return view('Laporan/ListOPD', $data);
    }
}

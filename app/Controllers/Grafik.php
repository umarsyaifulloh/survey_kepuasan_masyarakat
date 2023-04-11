<?php

namespace App\Controllers;

use App\Models\OPDModel;
use App\Models\OpsiModel;
use App\Models\RPOJModel;
use App\Models\UsersModel;
use App\Models\SurveyModel;
use App\Models\RespondenModel;
use App\Models\PertanyaanModel;
use App\Models\PertanyaanOpsiModel;

class Grafik extends BaseController
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
     * grafik($survey_id)
     * ------------------------------------------------------------------- 
     * method ini untuk menampilkan bentuk grafik dari survey yang telah dilakukan berdasarkan id survey yang dikirimkan
     * 
     * @param int $survey_id
     * @return string
     */
    public function grafik($survey_id)
    {
        //ambil daftar  pertanyaan berdasarkan id survey
        $pertanyaan = $this->pertanyaanModel->getPertanyaanBySurveyID($survey_id);

        //hitung total pertanyaan
        $total_pertanyaan = count($pertanyaan);

        //ambil daftar responden berdasarkan id survey
        $responden = $this->respondenModel->getTotalRespondenBySurveyId($survey_id);

        //hitung total responden
        $total_responden = count($responden);

        $dataGrafiks = [];
        //mengambil data pertanyaan, opsi, dan total berdasarkan id pertanyaan masukkan ke variabel $dataGrafiks
        foreach ($pertanyaan as $q) {
            $data = [
                'pertanyaan' => $q,
                'total' => $this->opsiModel->getOpsidanTotal($q['pertanyaan_id'])
            ];
            array_push($dataGrafiks, $data);
        }

        //ambil data detail servey berdasarkan id survey
        $survey = $this->surveyModel->getDetailSurveyOPD($survey_id);

        $data = [
            'judul' => 'Grafik Survey',
            'users' => $this->users,
            'totalpertanyaan' => $total_pertanyaan,
            'totalresponden' => $total_responden,
            'dataGrafiks' => $dataGrafiks,
            'survey' => $survey
        ];

        return view('Grafik/Grafik', $data);
    }
}

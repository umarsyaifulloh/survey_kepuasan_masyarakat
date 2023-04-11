<?php

namespace App\Controllers;

use App\Models\RespondenModel;
use App\Models\SurveyModel;
use App\Models\BeritaModel;
use App\Models\OPDModel;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->respondenModel = new RespondenModel();
        $this->surveyModel = new surveyModel();
        $this->beritaModel = new BeritaModel();
        $this->usersModel = new UsersModel();
        $this->opdModel = new OPDModel();
    }

    /**
     * -------------------------------------------------------------------
     * index()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman dashboard admin atau super admin OPD masing berdasarkan session login yang masuk
     * 
     * @return string
     */
    public function index()
    {
        $users_opd_kode = session()->get('users_opd_kode');
        $data = [
            'users' => $this->users,
            'totalResponden' => $this->respondenModel->getTotalResponden($users_opd_kode)->getResultArray(),
            'totalSurvey' => $this->surveyModel->getTotalSurvey($users_opd_kode)->getResultArray(),
            'totalBerita' => $this->beritaModel->getTotalBerita($users_opd_kode)->getResultArray(),
            'totalOPD' => $this->opdModel->getTotalOPD(),
            'grafikRespon' => $this->respondenModel->getTotalRespondenPerTahun($users_opd_kode)
        ];
        return view('Dashboard/Dashboard', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\OPDModel;
use App\Models\UsersModel;
use App\Models\BeritaModel;

class LandingPage extends BaseController
{
    /**
     * memanggil function helper yang telah dibuat
     */
    protected $helpers = ['custom'];

    public function __construct()
    {
        $this->opdModel = new OPDModel();
        $this->usersModel = new UsersModel();
        $this->beritaModel = new BeritaModel();
    }

    /**
     * -------------------------------------------------------------------
     * index()
     * -------------------------------------------------------------------
     * method untuk menampilkan halaman landing page bagi user responden
     * 
     * @return	string
     */
    public function index()
    {
        $data = [
            'daftarOPD' => $this->opdModel->getOPD(),
            'daftarBerita' => $this->beritaModel->getBerita()
        ];

        return view('LandingPage/LandingPage', $data);
    }
}

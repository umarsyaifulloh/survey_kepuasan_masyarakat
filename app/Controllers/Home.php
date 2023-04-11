<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    /**
     * -------------------------------------------------------------------
     * index()
     * -------------------------------------------------------------------
     * 
     * method ini menampilkan halaman landing page 
     * 
     * tetapi method ini tidak kami pakai, karena kami membuat controller landing page sendiri
     * 
     * @return	string
     */
    public function index()
    {
        return view('LandingPage');
    }

    /**
     * -------------------------------------------------------------------
     * generate()
     * -------------------------------------------------------------------
     * 
     * method ini untuk melakukan generate password untuk akun super admin dan admin
     * 
     * @return	string
     */
    public function generate()
    {
        echo password_hash('admin', PASSWORD_BCRYPT);
    }
}

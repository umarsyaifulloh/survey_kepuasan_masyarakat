<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        //cek apakah terdapat session role id baik 1 atau 2
        if (session()->get('users_role_id') == "") {
            //jika tidak ada session
            session()->setFlashdata('pesan', 'Anda belum login, silahkan login dahulu');
            return redirect()->to(site_url('Auth/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}

<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\OPDModel;

class Users extends BaseController
{
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->opdModel = new OPDModel();
    }

    /**
     * -------------------------------------------------------------------
     * profil()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman profil users (admin)
     * 
     * @return	string
     */
    public function profil()
    {
        $users_nip = session()->get('users_nip');
        $data = [
            'users' => $this->usersModel->getUsers($users_nip)
        ];
        return view('Users/ProfilUsers', $data);
    }

    /**
     * -------------------------------------------------------------------
     * editProfil()
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman ubah profil users (admin)
     * 
     * @return	string     
     */
    public function editprofil()
    {
        $users_nip = session()->get('users_nip');
        $data = [
            'judul' => 'Ubah Data Admin OPD',
            'users' => $this->usersModel->getUsers($users_nip),
            'opd' => $this->opdModel->getOPD(),
            'validation' => \Config\Services::validation()
        ];

        return view('/Users/EditProfilUsers', $data);
    }

    /**
     * -------------------------------------------------------------------
     * updateProfil()
     * -------------------------------------------------------------------
     * method ini untuk mengubah data profil users (admin)
     */
    public function updateprofil()
    {
        $users_nip = session()->get('users_nip');
        $users = $this->usersModel->where(['users_nip' => $users_nip])->first();

        //Cek validasi inputan
        if (!$this->validate([
            'users_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Admin Mohon diisi'
                ]
            ],
            'users_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Admin harus di isi',
                    'valid_email' => 'Yang Anda Inputkan bukan Email'
                ]
            ],
            'users_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Admin Mohon diisi'
                ]
            ],
            'users_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Telepon Mohon diisi'
                ]
            ],
            'users_image' => [
                'rules' => 'max_size[users_image, 2048]|is_image[users_image]|mime_in[users_image,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran foto Admin terlalu besar',
                    'is_image' => 'Yang anda pilih bukanlah foto Admin',
                    'mime_in' => 'Format foto Admin tidak sesuai'

                ]
            ]
        ])) {
            //jika gagal
            return redirect()->to("/users/editprofil")->withInput();
        }

        //gambil data gambar
        $fileFoto = $this->request->getFile('users_image');

        //ambil data user admin berdasarkan nip user admin
        $users = $this->usersModel->find($users_nip);

        //apabila tidak ada foto yang diupload
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            //generate nama foto
            $namaFoto = $fileFoto->getRandomName();

            //pindahkan foto ke folder img/fotousers
            $fileFoto->move('img/fotousers/', $namaFoto);

            if ($users['users_image'] != 'defaultFoto.png') {
                /* Apabila file gambar yang lama ingin di hapus gunakan method di bawah ini*/
                unlink('img/fotousers/' . $this->request->getVar('fotoLama'));
            }
        }

        //Apabila gambar diubah ke gambar default
        if ($namaFoto == 1) {
            //masukkan nama default
            $namaFoto = 'defaultFoto.png';
            //hapus gambar lama
            unlink('img/fotousers/' . $users['users_image']);
        }

        $ubah = [
            'users_nip' => $this->request->getVar('users_nip'),
            'users_nama' => $this->request->getVar('users_nama'),
            'users_email' => $this->request->getVar('users_email'),
            'users_password' => $this->request->getVar('users_password'),
            'users_alamat' => $this->request->getVar('users_alamat'),
            'users_image' => $namaFoto,
            'users_telp' => $this->request->getVar('users_telp'),
            'users_opd_kode' => $this->request->getVar('users_opd_kode'),
            'users_role_id' => $this->request->getVar('users_role_id')
        ];

        //Ubah data
        $this->usersModel->update($users_nip, $ubah);

        session()->setFlashdata('pesan', 'diubah!');

        return redirect()->to("/users/profil");
    }

    /* -------------------------------------------------------------SUPER ADMIN----------------------------------------------------- */

    /**
     * -------------------------------------------------------------------
     * detail($users_nip)
     * -------------------------------------------------------------------
     * method ini menampilkan detail opd berdasarkan nip admin
     * 
     * @param int $users_nip
     * @return	string
     */
    public function detail($users_nip)
    {
        $data = [
            'judul' => 'Detail Profil Admin',
            'usersdetail' => $this->usersModel->getUsersDetail($users_nip)[0],
            'users' => $this->users
        ];

        if (empty($data['users'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Admin dengan nip $users_nip tidak ditemukan");
        }
        return view('Users/DetailUsers', $data);
    }

    /**
     * -------------------------------------------------------------------
     * add($opd_kode)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman tambah data user admin berdasarkan kode opd
     * 
     * @param int $opd_kode
     * @return string
     */
    public function add($opd_kode)
    {
        $data = [
            'judul' => 'Tambah Data Admin',
            'validation' => \Config\Services::validation(),
            'opd' => $this->opdModel->getOPD($opd_kode),
            'users' => $this->users
        ];
        return view('Users/AddUsers', $data);
    }

    /**
     * -------------------------------------------------------------------
     * create($opd_kode)
     * -------------------------------------------------------------------
     * method ini menambahkan data user admin
     */
    public function create($opd_kode)
    {
        //Cek validasi inputan
        if (!$this->validate([
            'users_nip' => [
                'rules' => 'required|is_unique[ms_users.users_nip]',
                'errors' => [
                    'required' => 'NIP Admin Mohon diisi',
                    'is_unique' => 'NIP Admin sudah terdaftar'
                ]
            ],
            'users_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Admin Mohon diisi'
                ]
            ],
            'users_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Admin Mohon diisi',
                    'valid_email' => 'Yang Anda Inputkan bukan Email'
                ]
            ],
            'users_password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password Mohon diisi',
                    'min_length' => 'Minimal Password 8 Karakter'
                ]
            ],
            'users_passconf' => [
                'rules' => 'required|matches[users_password]',
                'errors' => [
                    'required' => 'Konfirmasi Password Mohon diisi',
                    'matches' => 'Password tidak sama'
                ]
            ],
            'users_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Admin Mohon diisi'
                ]
            ],
            'users_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Telepon Mohon diisi'
                ]
            ],
            'users_image' => [
                'rules' => 'max_size[users_image, 2048]|is_image[users_image]|mime_in[users_image,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran foto terlalu besar',
                    'is_image' => 'Yang anda pilih bukanlah foto Admin',
                    'mime_in' => 'Format foto Admin tidak sesuai'

                ]
            ]
        ])) {
            //jika gagal
            return redirect()->to("/users/add/$opd_kode")->withInput();
        }

        //ambil data gambar
        $fileFoto = $this->request->getFile('users_image');

        //jika tidak gambar yang diinput
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'defaultFoto.png';
        } else {
            //random nama gambar
            $namaFoto = $fileFoto->getRandomName();
            //pindahkan ke lokasi yang dituju
            $fileFoto->move('img/fotousers', $namaFoto);
        }

        $simpan = [
            'users_nip' => $this->request->getVar('users_nip'),
            'users_nama' => $this->request->getVar('users_nama'),
            'users_email' => $this->request->getVar('users_email'),
            'users_image' => $namaFoto,
            'users_password' => password_hash($this->request->getVar('users_password'), PASSWORD_BCRYPT),
            'users_alamat' => $this->request->getVar('users_alamat'),
            'users_telp' => $this->request->getVar('users_telp'),
            'users_opd_kode' => $this->request->getVar('users_opd_kode'),
            'users_role_id' => $this->request->getVar('users_role_id'),
        ];

        $this->usersModel->insert($simpan);

        session()->setFlashdata('pesan', 'ditambah!');

        return redirect()->to("/opd/detail/$opd_kode");
    }

    /**
     * -------------------------------------------------------------------
     * delete($users_nip, $opd_kode)
     * -------------------------------------------------------------------
     * method ini untuk menghapus data admin berdasarkan nip admin dan kode opd
     * 
     * @param int $users_nip
     * @param int $opd_kode
     */
    public function delete($users_nip, $opd_kode)
    {
        $users = $this->usersModel->find($users_nip);
        if ($users['users_image'] != 'defaultFoto.png') {
            //hapus data gambar pada server
            unlink('img/fotousers/' . $users['users_image']);
        }
        //hapus data pada database
        $this->usersModel->where(['users_nip' => $users_nip])->delete();
        session()->setFlashdata('pesan', 'dihapus!');
        return redirect()->to("/opd/detail/$opd_kode");
    }

    /**
     * -------------------------------------------------------------------
     * edit($users_nip)
     * -------------------------------------------------------------------
     * method ini untuk menampilkan halaman ubah data user admin berdasarkan nip user admin
     * 
     * @param int $users_nip
     * @return string
     */
    public function edit($users_nip)
    {
        $data = [
            'judul' => 'Ubah Data Admin OPD',
            'usersedit' => $this->usersModel->getUsers($users_nip),
            'users' => $this->users,
            'validation' => \Config\Services::validation()
        ];

        return view('/Users/EditUsers', $data);
    }

    /**
     * -------------------------------------------------------------------
     * update($users_nip, $opd_kode)
     * -------------------------------------------------------------------
     * method ini mengubah data user admin berdasarkan nip user admin dan kode OPD
     * 
     * pada method ini akan dilakukan pengecekan apakah nip user admin sudah pernah didaftarkan atau belum
     * 
     * @param int $users_nip
     * @param int $opd_kode
     */
    public function update($users_nip, $opd_kode)
    {
        //cek data nip user admin apakah sudah ada atau belum
        $nipLama = $this->usersModel->where(['users_nip' => $users_nip])->first();
        if ($nipLama['users_nip'] ==  $this->request->getVar('users_nip')) {
            $rule_nip = 'required';
        } else {
            $rule_nip = 'required|is_unique[ms_users.users_nip]';
        }

        //cek validasi
        if (!$this->validate([
            'users_nip' => [
                'rules' => $rule_nip,
                'errors' => [
                    'required' => 'NIP Admin Mohon diisi',
                    'is_unique' => 'NIP Admin sudah terdaftar'
                ]
            ],
            'users_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Admin Mohon diisi'
                ]
            ],
            'users_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Admin harus di isi',
                    'valid_email' => 'Yang Anda Inputkan bukan Email'
                ]
            ],
            'users_password' => [
                'rules' => 'required|min_length[10]',
                'errors' => [
                    'required' => 'Password harus di isi',
                    'min_length' => 'Minimal Password 8 Karakter'
                ]
            ],
            'users_passconf' => [
                'rules' => 'required|matches[users_password]',
                'errors' => [
                    'required' => 'Password harus di isi',
                    'matches' => 'Password tidak sama'
                ]
            ],
            'users_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Admin Mohon diisi'
                ]
            ],
            'users_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Telepon Mohon diisi'
                ]
            ],
            'users_image' => [
                'rules' => 'max_size[users_image, 2048]|is_image[users_image]|mime_in[users_image,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran foto Admin terlalu besar',
                    'is_image' => 'Yang anda pilih bukanlah foto Admin',
                    'mime_in' => 'Format foto Admin tidak sesuai'

                ]
            ]
        ])) {
            //jika gagal
            return redirect()->to('/users/edit/' . $this->request->getVar('users_nip'))->withInput();
        }
        //ambil data gambar
        $fileFoto = $this->request->getFile('users_image');

        //ambil data user admin pada database
        $users = $this->usersModel->find($users_nip);

        /* Apabila tidak ada foto yang diupload */
        if ($fileFoto->getError() == 4) {
            //ambil data foto lama
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            /* Generate nama foto */
            $namaFoto = $fileFoto->getRandomName();

            /* Pindahkan foto ke fotousers */
            $fileFoto->move('img/fotousers/', $namaFoto);

            if ($users['users_image'] != 'defaultFoto.png') {
                /* Apabila file gambar yang lama ingin di hapus gunakan method di bawah ini*/
                unlink('img/fotousers/' . $this->request->getVar('fotoLama'));
            }
        }

        //Apabila gambar diubah ke gambar default
        if ($namaFoto == 1) {
            $namaFoto = 'defaultFoto.png';
            //hapus gambar lama
            unlink('img/fotousers/' . $users['users_image']);
        }

        //Pengkodisian Password
        $passwordLama = $this->request->getVar('password_lama');
        $passwordBaru = $this->request->getVar('users_password');
        if ($passwordLama != $passwordBaru) {
            //Apabila password diganti
            $passwordHash = password_hash($passwordBaru, PASSWORD_BCRYPT);
        } else {
            //Apabila password tidak diganti
            $passwordHash = $passwordLama;
        }

        $ubah = [
            'users_nip' => $this->request->getVar('users_nip'),
            'users_nama' => $this->request->getVar('users_nama'),
            'users_email' => $this->request->getVar('users_email'),
            'users_password' => $passwordHash,
            'users_alamat' => $this->request->getVar('users_alamat'),
            'users_image' => $namaFoto,
            'users_telp' => $this->request->getVar('users_telp'),
            'users_opd_kode' => $this->request->getVar('users_opd_kode'),
            'users_role_id' => $this->request->getVar('users_role_id'),
        ];

        //mengubah data di database
        $this->usersModel->update($users_nip, $ubah);
        session()->setFlashdata('pesan', 'diubah!');
        return redirect()->to("/opd/detail/$opd_kode");
    }
}

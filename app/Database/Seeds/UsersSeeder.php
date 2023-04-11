<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'users_nip' => '123456700',
                'users_nama' => 'Admin Super',
                'users_email' => 'adminsuper@gmail.com',
                'users_password' => '$2y$10$2T.0.q47lsX7KYFOLyq.gOo1dIAfpCP6NXetUl82qIJxwRJOvxHoK',
                'users_alamat' => 'Jln. Kabupaten No. 5, Wonogiri',
                'users_image' => 'users1.png',
                'users_telp' => '1234567889',
                'users_opd_kode' => '001',
                'users_role_id' =>  1,
            ],
            [
                'users_nip' => '123456789',
                'users_nama' => 'Admin Biasa',
                'users_email' => 'adminbiasa@gmail.com',
                'users_password' => '$2y$10$R4HvFaH1T86TXKeJUtKIdul8GIxicQnX8EMwb1LEuCRQe7qrc9Pa.',
                'users_alamat' => 'Jln. Kabupaten No. 5, Wonogiri',
                'users_image' => 'users1.png',
                'users_telp' => '1234567889',
                'users_opd_kode' => '001',
                'users_role_id' =>  2,
            ],
            [
                'users_nip' => '123456798',
                'users_nama' => 'Dhimas Risang Maulana',
                'users_email' => 'dhimas@gmail.com',
                'users_password' => '$2y$10$Wpcz5oqYHBiRIMzXAKAy8edXSbeacfKSUSRCzNv0dAMM12X/34BtG',
                'users_alamat' => 'Langenharjo, Grogol, Sukoharjo',
                'users_image' => 'users2.png',
                'users_telp' => '1234567889',
                'users_opd_kode' => '002',
                'users_role_id' => 2,
            ],
            [
                'users_nip' => '123456799',
                'users_nama' => 'MasBag Herlambang',
                'users_email' => 'masbag@gmail.com',
                'users_password' => '$2y$10$.StSPIeeN3aUil.l.3p6ju2s.uamCtJadHRadnYP1GF.bFWXiDO6u',
                'users_alamat' => 'Langenharjo, Grogol, Sukoharjo',
                'users_image' => 'users3.png',
                'users_telp' => '1234567889',
                'users_opd_kode' => '003',
                'users_role_id' => 2,
            ]
        ];
        $this->db->table('ms_users')->insertBatch($data);
    }
}

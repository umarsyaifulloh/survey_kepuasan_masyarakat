<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'role_nama' => 'SuperAdmin',
            ],
            [
                'role_nama' => 'Admin',
            ],
        ];
        $this->db->table('ms_role')->insertBatch($data);
    }
}

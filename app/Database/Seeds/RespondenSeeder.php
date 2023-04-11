<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class RespondenSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'responden_email' => 'alexander@gmail.com'
            ],
            [
                'responden_email' => 'jonathan@gmail.com'
            ],
            [
                'responden_email' => 'kirigaya@gmail.com'
            ]
        ];
        $this->db->table('ms_responden')->insertBatch($data);
    }
}

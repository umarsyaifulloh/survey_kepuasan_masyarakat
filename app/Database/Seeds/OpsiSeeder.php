<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class OpsiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'opsi_nama' => 'Tidak Puas',
            ],
            [
                'opsi_nama' => 'Kurang Puas',
            ],
            [
                'opsi_nama' => 'Puas',
            ],
            [
                'opsi_nama' => 'Sangat Puas',
            ],
            [
                'opsi_nama' => 'Tidak Menarik',
            ],
            [
                'opsi_nama' => 'Menarik',
            ],
            [
                'opsi_nama' => 'Sangat Menarik',
            ],
            [
                'opsi_nama' => 'Tidak Setuju',
            ],
            [
                'opsi_nama' => 'Setuju',
            ],
            [
                'opsi_nama' => 'Sangat Setuju',
            ]
        ];
        $this->db->table('ms_opsi')->insertBatch($data);
    }
}

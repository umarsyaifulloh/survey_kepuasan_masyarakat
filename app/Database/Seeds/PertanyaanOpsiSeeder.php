<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class PertanyaanOpsiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pertanyaanopsi_pertanyaan_id' => 1,
                'pertanyaanopsi_opsi_id'    => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 1,
                'pertanyaanopsi_opsi_id'    => 2,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 1,
                'pertanyaanopsi_opsi_id'    => 3,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 1,
                'pertanyaanopsi_opsi_id'    => 4,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 2,
                'pertanyaanopsi_opsi_id'    => 5,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 2,
                'pertanyaanopsi_opsi_id'    => 6,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 2,
                'pertanyaanopsi_opsi_id'    => 7,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 3,
                'pertanyaanopsi_opsi_id'    => 8,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 3,
                'pertanyaanopsi_opsi_id'    => 9,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 3,
                'pertanyaanopsi_opsi_id'    => 10,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 4,
                'pertanyaanopsi_opsi_id'    => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 4,
                'pertanyaanopsi_opsi_id'    => 2,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 4,
                'pertanyaanopsi_opsi_id'    => 3,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 4,
                'pertanyaanopsi_opsi_id'    => 4,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 5,
                'pertanyaanopsi_opsi_id'    => 5,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 5,
                'pertanyaanopsi_opsi_id'    => 6,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 5,
                'pertanyaanopsi_opsi_id'    => 7,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 6,
                'pertanyaanopsi_opsi_id'    => 8,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 6,
                'pertanyaanopsi_opsi_id'    => 9,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'pertanyaanopsi_pertanyaan_id' => 6,
                'pertanyaanopsi_opsi_id'    => 10,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        // $this->db->table('users')->insert($data);
        $this->db->table('tr_pertanyaanopsi')->insertBatch($data);
    }
}

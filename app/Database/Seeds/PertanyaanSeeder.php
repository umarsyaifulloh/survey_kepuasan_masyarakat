<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class PertanyaanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'pertanyaan_nama' => 'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan di Dinas Kominfo Kabupaten Wonogiri?',
                'pertanyaan_survey_id' => 1,
                'created_at' => Time::now(),
                'created_by' => '123456789',
                'updated_at' => Time::now(),
                'updated_by' => '123456789'
            ],
            [
                'pertanyaan_nama' => 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di Dinas Kominfo Kabupaten Wonogiri?',
                'pertanyaan_survey_id' => 1,
                'created_at' => Time::now(),
                'created_by' => '123456789',
                'updated_at' => Time::now(),
                'updated_by' => '123456789'
            ],
            [
                'pertanyaan_nama' => 'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?',
                'pertanyaan_survey_id' => 1,
                'created_at' => Time::now(),
                'created_by' => '123456789',
                'updated_at' => Time::now(),
                'updated_by' => '123456789'
            ],
            [
                'pertanyaan_nama' => 'Bagaimana pendapat Saudara tentang kedisiplinan petugas dalam memberikan pelayanan?',
                'pertanyaan_survey_id' => 2,
                'created_at' => Time::now(),
                'created_by' => '123456798',
                'updated_at' => Time::now(),
                'updated_by' => '123456798'

            ],
            [
                'pertanyaan_nama' => 'Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan dengan hasil pelayanan yang diberikan?',
                'pertanyaan_survey_id' => 2,
                'created_at' => Time::now(),
                'created_by' => '123456798',
                'updated_at' => Time::now(),
                'updated_by' => '123456798'

            ],
            [
                'pertanyaan_nama' => 'Bagaimana pendapat Saudara tentang kompetensi/ kemampuan petugas dalam memberikan pelayanan?',
                'pertanyaan_survey_id' => 2,
                'created_at' => Time::now(),
                'created_by' => '123456798',
                'updated_at' => Time::now(),
                'updated_by' => '123456798'

            ]
        ];
        $this->db->table('tr_pertanyaan')->insertBatch($data);
    }
}
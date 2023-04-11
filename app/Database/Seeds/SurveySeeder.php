<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SurveySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'survey_judul'    => 'SURVEI SKM DISKOMINFO 1',
                'survey_tahun' => '2021',
                'survey_deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati natus facilis molestiae maxime perspiciatis amet saepe fuga excepturi sequi necessitatibus.',
                'survey_status' => 'nonaktif',
                'created_at' => Time::now(),
                'created_by' => '123456789',
                'updated_at' => Time::now(),
                'updated_by' => '123456789'
            ],
            [
                'survey_judul'    => 'SURVEI SKM BKD 1  ',
                'survey_tahun' => '2022',
                'survey_deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quo suscipit obcaecati dignissimos aspernatur ad?',
                'survey_status' => 'Aktif',
                'created_at' => Time::now(),
                'created_by' => '123456798',
                'updated_at' => Time::now(),
                'updated_by' => '123456798'
            ],
            [
                'survey_judul'    => 'SURVEI SKM BPKD 1  ',
                'survey_tahun' => '2022',
                'survey_deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quo suscipit obcaecati dignissimos aspernatur ad?',
                'survey_status' => 'Aktif',
                'created_at' => Time::now(),
                'created_by' => '123456799',
                'updated_at' => Time::now(),
                'updated_by' => '123456799'
            ]
        ];
        $this->db->table('tr_survey')->insertBatch($data);
    }
}

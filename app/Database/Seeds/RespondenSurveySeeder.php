<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class RespondenSurveySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'respondensurvey_responden_id'    => 1,
                'respondensurvey_survey_id' => 1
            ],
            [
                'respondensurvey_responden_id'    => 2,
                'respondensurvey_survey_id' => 1
            ],
            [
                'respondensurvey_responden_id'    => 3,
                'respondensurvey_survey_id' => 1
            ],
            [
                'respondensurvey_responden_id'    => 1,
                'respondensurvey_survey_id' => 2
            ],
            [
                'respondensurvey_responden_id'    => 2,
                'respondensurvey_survey_id' => 2
            ],
            [
                'respondensurvey_responden_id'    => 3,
                'respondensurvey_survey_id' => 2
            ]
        ];

        $this->db->table('tr_respondensurvey')->insertBatch($data);
    }
}

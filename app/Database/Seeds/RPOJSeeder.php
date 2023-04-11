<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class RPOJSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'rpoj_respondensurvey_id' => 1,
                'rpoj_pertanyaanopsi_id' => 4,
            ],
            [
                'rpoj_respondensurvey_id' => 1,
                'rpoj_pertanyaanopsi_id' => 7,
            ],
            [
                'rpoj_respondensurvey_id' => 1,
                'rpoj_pertanyaanopsi_id' => 10,
            ],
            [
                'rpoj_respondensurvey_id' => 2,
                'rpoj_pertanyaanopsi_id' => 4,
            ],
            [
                'rpoj_respondensurvey_id' => 2,
                'rpoj_pertanyaanopsi_id' => 7,
            ],
            [
                'rpoj_respondensurvey_id' => 2,
                'rpoj_pertanyaanopsi_id' => 10,
            ],
            [
                'rpoj_respondensurvey_id' => 3,
                'rpoj_pertanyaanopsi_id' => 4,
            ],
            [
                'rpoj_respondensurvey_id' => 3,
                'rpoj_pertanyaanopsi_id' => 7,
            ],
            [
                'rpoj_respondensurvey_id' => 3,
                'rpoj_pertanyaanopsi_id' => 10,
            ],
            [
                'rpoj_respondensurvey_id' => 4,
                'rpoj_pertanyaanopsi_id' => 11,
            ],
            [
                'rpoj_respondensurvey_id' => 4,
                'rpoj_pertanyaanopsi_id' => 15,
            ],
            [
                'rpoj_respondensurvey_id' => 4,
                'rpoj_pertanyaanopsi_id' => 18,
            ],
            [
                'rpoj_respondensurvey_id' => 5,
                'rpoj_pertanyaanopsi_id' => 11,
            ],
            [
                'rpoj_respondensurvey_id' => 5,
                'rpoj_pertanyaanopsi_id' => 15,
            ],
            [
                'rpoj_respondensurvey_id' => 5,
                'rpoj_pertanyaanopsi_id' => 18,
            ],
            [
                'rpoj_respondensurvey_id' => 6,
                'rpoj_pertanyaanopsi_id' => 11,
            ],
            [
                'rpoj_respondensurvey_id' => 6,
                'rpoj_pertanyaanopsi_id' => 15,

            ],
            [
                'rpoj_respondensurvey_id' => 6,
                'rpoj_pertanyaanopsi_id' => 18,
            ],
        ];
        $this->db->table('tr_rpoj')->insertBatch($data);
    }
}

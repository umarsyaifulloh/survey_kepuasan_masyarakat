<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanyaanModel extends Model
{
    protected $table = 'tr_pertanyaan';
    protected $primaryKey = 'pertanyaan_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['pertanyaan_nama', 'pertanyaan_survey_id', 'created_at', 'created_by', 'updated_at', 'updated_by'];

    /**
     * -------------------------------------------------------------------
     * getPertanyaanSurvey($survey_id)
     * -------------------------------------------------------------------
     * 
     * Menampilkan list data pertanyaan dari tiap survey
     * 
     * @param int $survey_id
     * 
     * @return array
     */
    public function getPertanyaanSurvey($survey_id)
    {
        return
            $this->db->table('tr_pertanyaan')
            ->join('tr_survey', 'tr_pertanyaan.pertanyaan_survey_id=tr_survey.survey_id')
            ->where(['pertanyaan_survey_id' => $survey_id])
            ->orderBy('tr_pertanyaan.created_at', 'ASC')
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getPertanyaanSurveyDetail($pertanyaan_id)
     * -------------------------------------------------------------------
     * 
     * Menampilkan detail data pertanyaan dan survey dari tiap pertanyaan
     * 
     * @param int $pertanyaan_id
     * 
     * @return array
     */
    public function getPertanyaanSurveyDetail($pertanyaan_id)
    {
        return
            $this->db->table('tr_pertanyaan')
            ->join('tr_survey', 'tr_pertanyaan.pertanyaan_survey_id=tr_survey.survey_id')
            ->where(['pertanyaan_id' => $pertanyaan_id])
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getPertanyaanBySurveyID($survey_id)
     * -------------------------------------------------------------------
     * 
     * Digunakan untuk mendapatkan data pertanyaan berdasarkan survey_id
     * 
     * Method ini berguna untuk menampilkan pertanyaan pada form survey di sisi responden
     * 
     * @param int $survey_id
     * 
     * @return array
     */
    public function getPertanyaanBySurveyID($survey_id)
    {
        $pertanyaan = $this
            ->select('pertanyaan_id, pertanyaan_nama, pertanyaan_survey_id')
            ->where(['pertanyaan_survey_id' => $survey_id])
            ->get()->getResultArray();
        return $pertanyaan;
    }
}

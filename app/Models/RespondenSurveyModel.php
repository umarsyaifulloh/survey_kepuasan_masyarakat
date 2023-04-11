<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class RespondenSurveyModel extends Model
{
    protected $table = 'tr_respondensurvey';
    protected $primaryKey = 'respondensurvey_id';
    protected $allowedFields = ['respondensurvey_id', 'respondensurvey_responden_id', 'respondensurvey_survey_id'];

    /**
     * -------------------------------------------------------------------
     * getRespondenSurvey($responden_email = false)
     * -------------------------------------------------------------------
     * 
     * Method untuk mengambil data respondensurvey berdasarkan email responden
     * 
     * Digunakan pada controller Responden untuk pengecekan email responden
     * 
     * @param string $responden_email
     * 
     * @return array
     */
    public function getRespondenSurvey($responden_email = false)
    {
        return
            $this
            ->join('ms_responden', 'ms_responden.responden_id=tr_respondensurvey.respondensurvey_responden_id')
            ->where('responden_email', $responden_email)
            ->get()->getResultArray();
    }
}

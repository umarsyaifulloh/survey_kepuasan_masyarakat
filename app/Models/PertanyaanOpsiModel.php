<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanyaanOpsiModel extends Model
{
    protected $table = 'tr_pertanyaanopsi';
    protected $primaryKey = 'pertanyaanopsi_id';
    protected $allowedFields = ['pertanyaanopsi_pertanyaan_id', 'pertanyaanopsi_opsi_id'];
    protected $useTimestamps = true;

    /**
     * -------------------------------------------------------------------
     * getOpsiPertanyaan($pertanyaan_id)
     * -------------------------------------------------------------------
     * 
     * Menampilkan semua opsi yang terdapat pada tiap pertanyaan
     * 
     * Digunakan pada controller Pertanyaan
     * 
     * @param int $pertanyaan_id
     * 
     * @return array
     */
    public function getOpsiPertanyaan($pertanyaan_id)
    {
        return
            $this->db->table('tr_pertanyaanopsi')
            ->join('tr_pertanyaan', 'tr_pertanyaanopsi.pertanyaanopsi_pertanyaan_id=tr_pertanyaan.pertanyaan_id')
            ->join('ms_opsi', 'tr_pertanyaanopsi.pertanyaanopsi_opsi_id=ms_opsi.opsi_id')
            ->join('tr_survey', 'tr_pertanyaan.pertanyaan_survey_id=tr_survey.survey_id')
            ->select('*')->where(['pertanyaanopsi_pertanyaan_id' => $pertanyaan_id])
            ->get()->getResultArray();
    }
}

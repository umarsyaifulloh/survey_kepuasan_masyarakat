<?php

namespace App\Models;

use CodeIgniter\Model;

class SurveyModel extends Model
{
    protected $table      = 'tr_survey';
    protected $primaryKey = 'survey_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['survey_judul', 'survey_deskripsi', 'survey_tahun', 'survey_status', 'created_by', 'updated_by'];

    /**
     * -------------------------------------------------------------------
     * getDetailSurveyOPD($survey_id = null)
     * -------------------------------------------------------------------
     * 
     * Method untuk mengambil data survey berdasarkan survey_id
     * 
     * Digunakan pada controller Responden, Grafik, dan Export untuk menampilkan detail dari suatu Survey
     * 
     * @param int $survey_id
     * 
     * @return array
     */
    public function getDetailSurveyOPD($survey_id = null)
    {
        return
            $this
            ->select('survey_judul, survey_deskripsi, survey_tahun, survey_status, survey_id, opd_logo, opd_kode')
            ->join('ms_users', 'ms_users.users_nip=tr_survey.created_by')
            ->join('ms_opd', 'ms_opd.opd_kode=ms_users.users_opd_kode')
            ->where(['survey_id' => $survey_id])
            ->first();
    }

    /**
     * -------------------------------------------------------------------
     * getSurveyByUsers($users_opd_kode = null)
     * -------------------------------------------------------------------
     * 
     * Menampilkan seluruh data survey berdasarkan OPD Kode user yang login saat itu
     * 
     * Digunakan pada controller Survey dan Export
     * 
     * @param int $users_opd_kode
     * 
     * @return array
     */
    public function getSurveyByUsers($users_opd_kode = null)
    {
        if (session()->get('users_role_id') == 1) {
            return
                $this->orderBy('created_at')->get()->getResultArray();
        } else {
            return
                $this
                ->join('ms_users', 'tr_survey.created_by=ms_users.users_nip')
                ->where(['users_opd_kode' => $users_opd_kode])
                ->orderBy('created_at')
                ->get()->getResultArray();
        }
    }

    /**
     * -------------------------------------------------------------------
     * getSurveyByOPDKode($opd_kode)
     * -------------------------------------------------------------------
     * 
     * Menampilkan seluruh data atau list survey dari suatu OPD
     * 
     * Digunakan pada controller OPD::detail
     * 
     * @param int $opd_kode
     * 
     * @return array
     */
    public function getSurveyByOPDKode($opd_kode)
    {
        return
            $this
            ->join('ms_users', 'tr_survey.created_by=ms_users.users_nip')
            ->join('ms_opd', 'ms_users.users_opd_kode=ms_opd.opd_kode')
            ->where(['opd_kode' => $opd_kode])
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getSurveyDetail($survey_id)
     * -------------------------------------------------------------------
     * 
     * Menampilkan detail data survey tertentu berdasarkan ID Survey
     * 
     * Digunakan pada controller Survey, Laporan, dan Export
     * 
     * @param int $survey_id
     * 
     * @return array
     */
    public function getSurveyDetail($survey_id)
    {
        return
            $this->where(['survey_id' => $survey_id])->first();
    }

    /**
     * -------------------------------------------------------------------
     * getTotalSurvey($users_opd_kode)
     * -------------------------------------------------------------------
     * 
     * Menghitung total survey dari tiap OPD suatu users(admin)
     * 
     * Digunakan pada controller Dashboard::index
     * 
     * @param int $users_opd_kode
     * 
     * @return array
     */
    public function getTotalSurvey($users_opd_kode)
    {
        return
            $this->join('ms_users', 'tr_survey.created_by=ms_users.users_nip')
            ->where(['users_opd_kode' => $users_opd_kode])
            ->selectCount('survey_id')->get();
    }

    /**
     * -------------------------------------------------------------------
     * getSurveyByOPDID($opd_kode = null)
     * -------------------------------------------------------------------
     * 
     * Menampilkan list data survey yang berstatus aktif dari suatu OPD pada sisi Responden
     * 
     * @param int $opd_kode
     * 
     * @return array
     */
    public function getSurveyByOPDID($opd_kode = null)
    {
        return
            $this
            ->select('survey_judul, survey_id')
            ->join('ms_users', 'ms_users.users_nip=tr_survey.created_by')
            ->join('ms_opd', 'ms_opd.opd_kode=ms_users.users_opd_kode')
            ->where(['opd_kode' => $opd_kode])
            ->where(['survey_status' => 'Aktif'])
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getSurveyTahunByUsers($users_opd_kode)
     * -------------------------------------------------------------------
     * 
     * Menampilkan list tahun suatu survey dari OPD users yang login
     * 
     * Digunakan pada controller Laporan::listTahun
     * 
     * @param int $users_opd_kode
     * 
     * @return array
     */
    public function getSurveyTahunByUsers($users_opd_kode)
    {
        return
            $this
            ->select('survey_tahun')
            ->join('ms_users', 'tr_survey.created_by=ms_users.users_nip')
            ->groupBy('survey_tahun')
            ->where(['users_opd_kode' => $users_opd_kode])
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getListSurveyByTahun($users_opd_kode = null, $survey_tahun = null)
     * -------------------------------------------------------------------
     * 
     * Menampilkan list survey dari tahun tertentu 
     * 
     * Digunakan untuk menampilkan list survey pada laporan
     * 
     * @param int $users_opd_kode
     * 
     * @param int $survey_tahun
     * 
     * @return array
     */
    public function getListSurveyByTahun($users_opd_kode = null, $survey_tahun = null)
    {
        return
            $this
            ->join('ms_users', 'tr_survey.created_by=ms_users.users_nip')
            ->where(['users_opd_kode' => $users_opd_kode])
            ->where(['survey_tahun' => $survey_tahun])
            ->get()->getResultArray();
    }
}

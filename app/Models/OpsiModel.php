<?php

namespace App\Models;

use CodeIgniter\Model;

class OpsiModel extends Model
{
    protected $table      = 'ms_opsi';
    protected $primaryKey = 'opsi_id';
    protected $allowedFields = ['opsi_nama'];

    /**
     * -------------------------------------------------------------------
     * getOpsi($opsi_id = false)
     * -------------------------------------------------------------------
     * 
     * Menampilkan seluruh data opsi apabila ID opsi tidak ada
     * 
     * Menampilkan detail opsi tertentu apabila ID opsi ada
     * 
     * @param int $opsi_id
     * 
     * @return array
     */
    public function getOpsi($opsi_id = false)
    {
        if ($opsi_id == false) {
            return $this->findAll();
        }

        return $this->where(['opsi_id' => $opsi_id])->first();
    }

    /**
     * -------------------------------------------------------------------
     * getOpsiByPertanyaanID($pertanyaan_id = null)
     * -------------------------------------------------------------------
     * 
     * Menampilkan data opsi berdasarkan pertanyaan_id
     * 
     * @param int $pertanyaan_id
     * 
     * @return array
     */
    public function getOpsiByPertanyaanID($pertanyaan_id = null)
    {
        return
            $this->select('opsi_nama, opsi_id, pertanyaan_nama, pertanyaan_id, pertanyaanopsi_id')
            ->join('tr_pertanyaanopsi', 'tr_pertanyaanopsi.pertanyaanopsi_opsi_id=ms_opsi.opsi_id')
            ->join('tr_pertanyaan', 'tr_pertanyaan.pertanyaan_id=tr_pertanyaanopsi.pertanyaanopsi_pertanyaan_id')
            ->where(['pertanyaan_id' => $pertanyaan_id])
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getJumlahOpsiByPertanyaanID($pertanyaan_id = null)
     * -------------------------------------------------------------------
     * 
     * Menampilkan data opsi berdasarkan pertanyaan terakhir
     * 
     * @param int $pertanyaan_id
     * 
     * @return array
     */
    public function getJumlahOpsiByPertanyaanID($pertanyaan_id = null)
    {
        return
            $this->select('pertanyaan_nama, COUNT(opsi_id) as jumlah_opsi')
            ->join('tr_pertanyaanopsi', 'tr_pertanyaanopsi.pertanyaanopsi_opsi_id=ms_opsi.opsi_id')
            ->join('tr_pertanyaan', 'tr_pertanyaan.pertanyaan_id=tr_pertanyaanopsi.pertanyaanopsi_pertanyaan_id')
            ->where(['pertanyaan_id' => $pertanyaan_id])
            ->groupBy('pertanyaan_id')
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getOpsidanTotal($pertanyaan_id = null)
     * -------------------------------------------------------------------
     * 
     * Menampilkan data opsi beserta total respon per opsi dari setiap pertanyaan
     * 
     * Digunakan pada controller Laporan dan Grafik
     * 
     * @param int $pertanyaan_id
     * 
     * @return array
     */
    public function getOpsidanTotal($pertanyaan_id = null)
    {
        $respon = $this->select('opsi_nama, COUNT(pertanyaanopsi_id) as total_respon')
            ->join('tr_pertanyaanopsi', 'tr_pertanyaanopsi.pertanyaanopsi_opsi_id=ms_opsi.opsi_id')
            ->join('tr_rpoj', 'tr_rpoj.rpoj_pertanyaanopsi_id=tr_pertanyaanopsi.pertanyaanopsi_id')
            ->where(['pertanyaanopsi_pertanyaan_id' => $pertanyaan_id])
            ->groupBy('pertanyaanopsi_pertanyaan_id')
            ->groupBy('pertanyaanopsi_opsi_id')
            ->getCompiledSelect();

        return
            $this->select('ms_opsi.opsi_nama, ifnull(total_respon, 0) as total_respon')
            ->join('tr_pertanyaanopsi', 'tr_pertanyaanopsi.pertanyaanopsi_opsi_id=ms_opsi.opsi_id')
            ->join('tr_pertanyaan', 'tr_pertanyaan.pertanyaan_id=tr_pertanyaanopsi.pertanyaanopsi_pertanyaan_id')
            ->join('(' . $respon . ') respon', 'respon.opsi_nama=ms_opsi.opsi_nama', 'left')
            ->where(['pertanyaanopsi_pertanyaan_id' => $pertanyaan_id])
            ->get()->getResultArray();
    }
}

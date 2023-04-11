<?php

namespace App\Models;

use CodeIgniter\Model;

class OPDModel extends Model
{
    protected $table      = 'ms_opd';
    protected $primaryKey = 'opd_kode';
    protected $allowedFields = ['opd_kode', 'opd_nama', 'opd_logo', 'opd_email', 'opd_alamat', 'opd_telp'];

    /**
     * -------------------------------------------------------------------
     * getOPD($opd_kode = false)
     * -------------------------------------------------------------------
     * 
     * Menampilkan seluruh data list OPD apabila kode OPD tidak ada
     * 
     * Menampilkan detail data OPD tertentu apabila kode OPD ada
     * 
     * @param int $opd_kode
     * @return array
     */
    public function getOPD($opd_kode = false)
    {
        if ($opd_kode == false) {
            return $this->orderBy('opd_kode')->findAll();
        }

        return $this->where(['opd_kode' => $opd_kode])->first();
    }

    //MENAMPILKAN TOTAL OPD KAB. WONOGIRI
    /**
     * -------------------------------------------------------------------
     * getTotalOPD()
     * -------------------------------------------------------------------
     * 
     * Menghitung total OPD
     * 
     * Digunakan pada controller Dashboard::index
     * 
     * @return array
     */
    public function getTotalOPD()
    {
        return
            $this
            ->selectCount('opd_kode')
            ->get()->getResultArray();
    }
}

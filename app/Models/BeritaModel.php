<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'tr_berita';
    protected $primaryKey = 'berita_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['berita_judul', 'berita_isi', 'berita_gambar', 'created_by', 'updated_by'];

    /**
     * -------------------------------------------------------------------
     * getBerita($berita_id = false)
     * -------------------------------------------------------------------
     * 
     * Menampilkan list 3 berita terakhir apabila ID berita tidak ada

     * Menampilkan detail data berita tertentu apabila ID berita ada
     * 
     * @param int $berita_id
     * @return array
     */
    public function getBerita($berita_id = false)
    {
        if ($berita_id == false) {
            return $this
                // ->select("*, DATE_FORMAT(created_at, '%d %M %Y') AS tanggal")
                ->select("*, DATE(created_at) AS tanggal")
                ->join('ms_users', 'ms_users.users_nip=tr_berita.created_by')
                ->orderBy('created_at', 'DESC')
                ->limit(3)
                ->get()->getResultArray();
        }

        return $this->where(['berita_id' => $berita_id])->first();
    }

    /**
     * -------------------------------------------------------------------
     * getListBeritaLain()
     * -------------------------------------------------------------------
     * 
     * Menampilkan seluruh data berita mulai dari yang terbaru
     * 
     * @return array
     */
    public function getListBeritaLain()
    {
        return $this
            ->select("*, DATE(created_at) AS tanggal")
            ->join('ms_users', 'ms_users.users_nip=tr_berita.created_by')
            ->orderBy('created_at', 'DESC')
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getDetailBerita($berita)
     * -------------------------------------------------------------------
     * 
     * Digunakan untuk menampilkan detail dari setiap berita dari sisi responden
     * 
     * @param int $berita_id
     * 
     * @return array
     */
    public function getDetailBerita($berita_id)
    {
        return
            $this->select("*, DATE(created_at) AS tanggal")
                ->join('ms_users', 'ms_users.users_nip=tr_berita.created_by')
                ->where('berita_id', $berita_id)
                ->get()->getResultArray()[0];
    }

    /**
     * -------------------------------------------------------------------
     * getTotalBerita($users_opd_kode)
     * -------------------------------------------------------------------
     * 
     * Menghitung total berita dari setiap OPD Kode
     * 
     * Digunakan pada controller Dashboard::index
     * 
     * @param int $users_opd_kode
     * 
     * @return array
     */
    public function getTotalBerita($users_opd_kode)
    {
        return
            $this->join('ms_users', 'tr_berita.created_by=ms_users.users_nip')
            ->where(['users_opd_kode' => $users_opd_kode])
            ->selectCount('berita_id')->get();
    }

    /**
     * -------------------------------------------------------------------
     * getBeritaTerakhirByOPDKode($kode)
     * -------------------------------------------------------------------
     * 
     * Menampilkan data berita terbaru dari OPD kode
     * 
     * @param int $kode
     * 
     * @return array
     */
    public function getBeritaTerakhirByOPDKode($kode)
    {
        return
            $this
            ->select("*, DATE(created_at) AS tanggal")
            ->join('ms_users', 'ms_users.users_nip=tr_berita.created_by')
            ->where(['users_opd_kode' => $kode])
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getBeritaTerakhirByOPDKode($kode)
     * -------------------------------------------------------------------
     * 
     * Menampilkan 3 data berita terakhir dari tiap OPD Kode
     * 
     * @param int $kode
     * 
     * @return array
     */
    public function get3BeritaByOPDKode($kode)
    {
        return
            $this
            ->select("berita_id,berita_judul, berita_isi, berita_gambar, users_nama, DATE(created_at) AS tanggal")
            ->join('ms_users', 'ms_users.users_nip=tr_berita.created_by')
            ->where(['users_opd_kode' => $kode])
            ->orderBy('created_at', 'DESC')
            ->limit(3)
            ->get()->getResultArray();
    }
 
    /**
     * -------------------------------------------------------------------
     * getListBeritaLainByOPD($opd_kode)
     * -------------------------------------------------------------------
     * 
     * Method untuk menampilkan seluruh data berita dari setiap OPD pada sisi responden
     * 
     * @param int $opd_kode
     * 
     * @return array
     */
    public function getListBeritaLainByOPD($opd_kode)
    {
        return $this
            ->select("berita_id, berita_judul, berita_isi, berita_gambar, users_nama, DATE(created_at) AS tanggal")
            ->join('ms_users', 'ms_users.users_nip=tr_berita.created_by')
            ->where('users_opd_kode', $opd_kode)
            ->orderBy('created_at', 'DESC')
            ->get()->getResultArray();
    }

    /**
     * -------------------------------------------------------------------
     * getBeritaByUser($users_opd_kode, $berita_id = null)
     * -------------------------------------------------------------------
     * 
     * Menampilkan list berita pada sisi Admin jika ID berita tidak ada
     * 
     * Apabila terdapat ID Berita maka akan menampilkan detail dari setiap berita
     * 
     * @param int $users_opd_kode
     * 
     * @param int $berita_id
     * 
     * @return array
     */
    public function getBeritaByUser($users_opd_kode, $berita_id = null)
    {
        if ($berita_id == null) {
            return $this
                // ->select("*, DATE_FORMAT(created_at, '%d %M %Y') AS tanggal")
                ->select("*, DATE(created_at) AS tanggal")
                ->join('ms_users', 'ms_users.users_nip=tr_berita.created_by')
                ->where('users_opd_kode', $users_opd_kode)
                ->orderBy('created_at', 'ASC')
                ->get()
                ->getResultArray();
        } else {
            return $this
                ->select("*, DATE(created_at) AS tanggal")
                ->join('ms_users', 'ms_users.users_nip=tr_berita.created_by')
                ->where('users_opd_kode', $users_opd_kode)
                ->where('berita_id', $berita_id)
                ->first();
        }
    }
}

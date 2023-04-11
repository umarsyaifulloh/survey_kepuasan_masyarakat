<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class OPDSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'opd_kode' => '001',
                'opd_nama' => 'DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN WONOGIRI (DISKOMINFO)',
                'opd_logo' => 'logo1.png',
                'opd_email'    => 'diskominfo@wonogirikab.go.id',
                'opd_alamat' => 'Jln. Kabupaten No. 5, Wonogiri',
                'opd_telp' =>  '(0273)321002',
            ],
            [
                'opd_kode' => '002',
                'opd_nama' => 'BADAN KEPEGAWAIAN DAERAH KABUPATEN WONOGIRI (BKD)',
                'opd_logo' => 'logo2.png',
                'opd_email'    => 'bkd@wonogirikab.go.id',
                'opd_alamat' => 'Jl. Kabupaten Nomor 5 Wonogiri',
                'opd_telp' => '(0273)321002',
            ],
            [
                'opd_kode' => '003',
                'opd_nama' => 'BADAN PENGELOLAAN KEUANGAN DAERAH KABUPATEN WONOGIRI (BPKD)',
                'opd_logo' => 'logo3.png',
                'opd_email'    => 'bkd@wonogirikab.go.id',
                'opd_alamat' => 'Jl. Raden Mas Said, Wonogiri',
                'opd_telp' => '(0273)322804',
            ],
            [
                'opd_kode' => '004',
                'opd_nama' => 'INSPEKTORAT WONOGIRI',
                'opd_logo' => 'logo3.png',
                'opd_email'    => ' inspektorat@wonogirikab.go.id',
                'opd_alamat' => 'Jl Pemuda I / 55 Wonogiri',
                'opd_telp' => '(0273)321138',
            ],
            [
                'opd_kode' => '005',
                'opd_nama' => 'DINAS SOSIAL KABUPATEN WONOGIRI (DINSOS)',
                'opd_logo' => 'logo3.png',
                'opd_email'    => 'dinsos@wonogirikab.go.id',
                'opd_alamat' => 'Jln. dr. Cipto II No.10, Wonogiri',
                'opd_telp' => '(0273)321018',
            ]
        ];
        $this->db->table('ms_opd')->insertBatch($data);
    }
}
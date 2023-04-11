<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class BeritaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'berita_judul' => 'Berita 1 DISKOMINFO',
                'berita_isi'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et iusto labore sed quas quisquam, laudantium ab est asperiores reprehenderit esse facere cumque voluptatem ipsam quod illum veniam quaerat tenetur eius excepturi omnis sapiente temporibus voluptate? Accusantium excepturi cum molestias? Fugit eveniet earum quod nemo non rem optio amet rerum at!',
                'berita_gambar' => 'gambar1.jpg',
                'created_at' => Time::now(),
                'created_by' => '123456789',
                'updated_at' => Time::now(),
                'updated_by' => '123456789'
            ],
            [
                'berita_judul' => 'Berita 1 BKD',
                'berita_isi'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias soluta explicabo consectetur natus corporis quibusdam modi adipisci nostrum ipsa! Ipsum repellendus voluptatem similique voluptate fugit et, eum voluptatum sunt quod. Dignissimos repudiandae vero aliquid libero eius eaque omnis commodi aspernatur, dolorem, blanditiis dolores quae, quos exercitationem saepe id. Quo, quia cum illum quod quos ex adipisci accusantium voluptatum nemo!',
                'berita_gambar' => 'gambar2.jpg',
                'created_at' => Time::now(),
                'created_by' => '123456798',
                'updated_at' => Time::now(),
                'updated_by' => '123456798'
            ],
            [
                'berita_judul' => 'Berita 1 BPKD',
                'berita_isi'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias soluta explicabo consectetur natus corporis quibusdam modi adipisci nostrum ipsa! Ipsum repellendus voluptatem similique voluptate fugit et, eum voluptatum sunt quod. Dignissimos repudiandae vero aliquid libero eius eaque omnis commodi aspernatur, dolorem, blanditiis dolores quae, quos exercitationem saepe id. Quo, quia cum illum quod quos ex adipisci accusantium voluptatum nemo!',
                'berita_gambar' => 'gambar3.jpg',
                'created_at' => Time::now(),
                'created_by' => '123456799',
                'updated_at' => Time::now(),
                'updated_by' => '123456799'
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('tr_berita')->insertBatch($data);
    }
}

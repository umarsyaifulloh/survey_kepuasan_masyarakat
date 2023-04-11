<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'berita_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'berita_judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'berita_isi' => [
                'type' => 'TEXT'
            ],
            'berita_gambar' => [
                'type' => 'TEXT'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'created_by' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_by' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('berita_id', true);
        $this->forge->addForeignKey('created_by', 'ms_users', 'users_nip', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('updated_by', 'ms_users', 'users_nip', 'CASCADE', 'SET NULL');
        $this->forge->createTable('tr_berita');
    }

    public function down()
    {
        $this->forge->dropForeignKey('tr_berita', 'tr_berita_created_by_foreign');
        $this->forge->dropForeignKey('tr_berita', 'tr_berita_updated_by_foreign');
        $this->forge->dropTable('tr_berita');
    }
}

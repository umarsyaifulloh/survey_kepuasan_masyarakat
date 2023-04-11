<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PertanyaanOpsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pertanyaanopsi_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pertanyaanopsi_pertanyaan_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
                'null' => TRUE
            ],
            'pertanyaanopsi_opsi_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
                'null' => TRUE
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('pertanyaanopsi_id', true);
        $this->forge->addForeignKey('pertanyaanopsi_pertanyaan_id', 'tr_pertanyaan', 'pertanyaan_id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('pertanyaanopsi_opsi_id', 'ms_opsi', 'opsi_id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('tr_pertanyaanopsi');
    }

    public function down()
    {
        $this->forge->dropForeignKey('tr_pertanyaanopsi', 'tr_pertanyaanopsi_pertanyaanopsi_opsi_id_foreign');
        $this->forge->dropForeignKey('tr_pertanyaanopsi', 'tr_pertanyaanopsi_pertanyaanopsi_pertanyaan_id_foreign');
        $this->forge->dropTable('tr_pertanyaanopsi');
    }
}

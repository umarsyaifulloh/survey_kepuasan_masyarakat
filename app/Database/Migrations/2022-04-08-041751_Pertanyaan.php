<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pertanyaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pertanyaan_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pertanyaan_nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pertanyaan_survey_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null' => TRUE
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
            ],
        ]);
        $this->forge->addKey('pertanyaan_id', true);
        $this->forge->addForeignKey('created_by', 'ms_users', 'users_nip', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('updated_by', 'ms_users', 'users_nip', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('pertanyaan_survey_id', 'tr_survey', 'survey_id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('tr_pertanyaan');
    }

    public function down()
    {
        $this->forge->dropForeignKey('tr_pertanyaan', 'tr_pertanyaan_created_by_foreign');
        $this->forge->dropForeignKey('tr_pertanyaan', 'tr_pertanyaan_pertanyaan_survey_id_foreign');
        $this->forge->dropForeignKey('tr_pertanyaan', 'tr_pertanyaan_updated_by_foreign');
        $this->forge->dropTable('tr_pertanyaan');
    }
}

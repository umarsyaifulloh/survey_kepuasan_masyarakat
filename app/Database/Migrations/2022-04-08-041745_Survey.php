<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Survey extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'survey_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'survey_judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'survey_deskripsi' => [
                'type' => 'TEXT'
            ],
            'survey_tahun' => [
                'type' => 'YEAR'
            ],
            'survey_status' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
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
        $this->forge->addKey('survey_id', true);
        $this->forge->addForeignKey('created_by', 'ms_users', 'users_nip', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('updated_by', 'ms_users', 'users_nip', 'CASCADE', 'SET NULL');
        $this->forge->createTable('tr_survey');
    }

    public function down()
    {
        $this->forge->dropForeignKey('tr_survey', 'tr_survey_created_by_foreign');
        $this->forge->dropForeignKey('tr_survey', 'tr_survey_updated_by_foreign');
        $this->forge->dropTable('tr_survey');
    }
}

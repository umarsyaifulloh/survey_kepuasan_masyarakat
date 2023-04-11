<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RespondenPertanyaanOpsiJawaban extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'rpoj_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'rpoj_respondensurvey_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
                'null' => TRUE
            ],
            'rpoj_pertanyaanopsi_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'       => true,
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('rpoj_id', true);
        $this->forge->addForeignKey('rpoj_respondensurvey_id', 'tr_respondensurvey', 'respondensurvey_id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('rpoj_pertanyaanopsi_id', 'tr_pertanyaanopsi', 'pertanyaanopsi_id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('tr_rpoj');
    }

    public function down()
    {
        $this->forge->dropForeignKey('tr_rpoj', 'tr_rpoj_rpoj_pertanyaanopsi_id_foreign');
        $this->forge->dropForeignKey('tr_rpoj', 'tr_rpoj_rpoj_respondensurvey_id_foreign');
        $this->forge->dropTable('tr_rpoj');
    }
}

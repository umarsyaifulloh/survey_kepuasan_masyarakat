<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RespondenSurvey extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'respondensurvey_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'respondensurvey_responden_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => TRUE
            ],
            'respondensurvey_survey_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('respondensurvey_id', true);
        $this->forge->addForeignKey('respondensurvey_responden_id', 'ms_responden', 'responden_id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('respondensurvey_survey_id', 'tr_survey', 'survey_id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('tr_respondensurvey');
    }

    public function down()
    {
        $this->forge->dropTable('tr_respondensurvey');
    }
}

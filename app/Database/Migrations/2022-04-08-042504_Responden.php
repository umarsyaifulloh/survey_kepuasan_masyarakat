<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Responden extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'responden_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'responden_email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ]
        ]);
        $this->forge->addKey('responden_id', true);
        $this->forge->createTable('ms_responden');
    }

    public function down()
    {
        $this->forge->dropTable('ms_responden');
    }
}

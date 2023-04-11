<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Opsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'opsi_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'opsi_nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ]
        ]);
        $this->forge->addKey('opsi_id', true);
        $this->forge->createTable('ms_opsi');
    }

    public function down()
    {
        $this->forge->dropTable('ms_opsi');
    }
}

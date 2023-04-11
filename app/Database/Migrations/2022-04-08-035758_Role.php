<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Role extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'role_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'role_nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ]
        ]);
        $this->forge->addKey('role_id', true);
        $this->forge->createTable('ms_role');
    }

    public function down()
    {
        $this->forge->dropTable('ms_role');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OPD extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'opd_kode'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'opd_nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'opd_logo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'opd_email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'opd_alamat'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE
            ],
            'opd_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('opd_kode', true);
        $this->forge->createTable('ms_opd');
    }

    public function down()
    {
        $this->forge->dropTable('ms_opd');
    }
}

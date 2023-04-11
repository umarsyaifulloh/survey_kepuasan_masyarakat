<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    //pengganti tabel ms_users
    public function up()
    {
        $this->forge->addField([
            'users_nip'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'users_nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'users_email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'users_password'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'users_alamat'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'users_image'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'users_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'users_opd_kode'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'null' => TRUE
            ],
            'users_role_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('users_nip', true);
        $this->forge->addForeignKey('users_opd_kode', 'ms_opd', 'opd_kode', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('users_role_id', 'ms_role', 'role_id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('ms_users');
    }

    public function down()
    {
        $this->forge->dropForeignKey('ms_users', 'ms_users_users_opd_kode_foreign');
        $this->forge->dropForeignKey('ms_users', 'ms_users_users_role_id_foreign');
        $this->forge->dropTable('ms_users');
    }
}

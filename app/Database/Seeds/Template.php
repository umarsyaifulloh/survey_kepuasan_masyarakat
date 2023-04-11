<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class SimpleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'darth',
            'email'    => 'darth@theempire.com',
            'created_at' => Time::now(),
            'created_by' => '123456789',
            'updated_at' => Time::now(),
            'updated_by' => '123456789'
        ];

        // Simple Queries
        $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        // $this->db->table('users')->insert($data);
        $this->db->table('users')->insertBatch($data);
    }
}

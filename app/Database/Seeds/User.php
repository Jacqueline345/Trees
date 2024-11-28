<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'name',
            'lastname' => 'lastname',
            'phone_number' => 'phone_number',
            'username' => 'username',
            'address' => 'address',
            'country' => 'country',
            'password' => password_hash('password', PASSWORD_BCRYPT),
            'role' => 'amigo'
        ];

        $this->db->table('usuarios')->insert($data);
    }
}

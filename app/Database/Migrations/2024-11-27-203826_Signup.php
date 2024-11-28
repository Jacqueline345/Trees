<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Signup extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name' => [
                'type'         => 'VARCHAR',
                'constraint'   => 100
            ],
            'lastname' => [
                'type'        => 'VARCHAR',
                'constraint'  => 100
            ],
            'phone_number' => [
                'type'       => 'INT',
                'constraint' => 10
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'address'  => [
                'type'       => 'VARCHAR',
                'constraint' => 200
            ],
            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'password' =>[
                'type'       => 'VARCHAR',
                'constraint' => 200
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'amigo'
            ]
            ]);
            $this->forge->addKey('id',true);
            $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}

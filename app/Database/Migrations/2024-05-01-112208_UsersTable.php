<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTable extends Migration
{
    public function up()
    {
        // create users table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'id_restaurant' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'passwrd' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'roles' => [ //papel de cada utilizador (adm, user, funcionário)
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'blocked_until' => [ //bloquear o acesso de um utilizador até um determinada data q ele n conseguirá fazer login
                'type' => 'DATETIME',
                'null' => true,
            ],
            'active' => [ //se um utilizador está ou n ativo/ se ele pode fazer login independentement se está bloqueado ou não// ou se quero impedir dele fazer login, mas manter seu registro
                'type' => 'INT',
                'constraint' => 1,
            ],
            'code' => [ //pra recuperar a senha
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            
            'last_login' => [ //controlar o ultimo login q o usuario fez
                'type' => 'DATETIME',
                'null' => true,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
           
           
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
        $this->forge->dropTable('users');
    }
}

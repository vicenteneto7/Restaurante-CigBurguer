<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RestaurantsTable extends Migration
{
    public function up()
    {
        // create restaurants table

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
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
        //primary key
        $this->forge->addKey('id', true);

        // create table
        $this->forge->createTable('restaurants');
    
    }

    public function down()
    {
        //drop table, rollback na mig
        $this->forge->dropTable('restaurants');
    }
}

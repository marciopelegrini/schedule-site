<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUnits extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],

            "name" => [
                "type" => 'VARCHAR',
                'constraint' => 70
            ],
            "email" => [
                "type" => 'VARCHAR',
                'constraint' => 255
            ],
            "phone" => [
                "type" => 'VARCHAR',
                'constraint' => 14
            ],
            "phone" => [
                "type" => 'VARCHAR',
                'constraint' => 14,
                'comment' => '999-999-9999'
            ],
            "coordinator" => [
                "type" => 'VARCHAR',
                'constraint' => 70
            ],
            "address" => [
                "type" => 'VARCHAR',
                'constraint' => 128
            ],
            "services" => [
                "type" => 'JSON',
                'null' => true,
                "default" => null
            ],
            "starttime" => [
                "type" => 'VARCHAR',
                'constraint' => 6
            ],
            "endtime" => [
                "type" => 'VARCHAR',
                'constraint' => 6
            ],
            "servicetime" => [
                "type" => 'VARCHAR',
                'constraint' => 20
            ],
            "active" => [
                "type" => 'TINYINT',
                'constraint' => 1,
                'default' => 0
            ],
            'created_at' => [
                "type" => 'DATETIME',
                "null" => true,
                "default" => null
            ],
            'updated_at' => [
                "type" => 'DATETIME',
                "null" => true,
                "default" => null
            ]
        ]);
        $this->forge->addKey("id", true);
        $this->forge->addKey("name");
        $this->forge->addKey("email");
        $this->forge->addKey("phone");
        $this->forge->createTable('units');
    }

    public function down()
    {
        $this->forge->dropTable('units');
    }
}
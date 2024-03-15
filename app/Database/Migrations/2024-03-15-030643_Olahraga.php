<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Olahraga extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'jenis_olahraga' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('olahraga');
    }

    public function down()
    {
        $this->forge->dropTable('olahraga');
    }
}

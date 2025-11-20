<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carrers extends Migration
{
    public function up()
    {
        //Creo tabla carreras
        $this->forge->addField([
            'id_carrer' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'code' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('id_carrer', true);
        $this->forge->createTable('carrers', true);
    }

    public function down()
    {
        // Eliminar tabla
        $this->forge->dropTable('carrers');
    }
}

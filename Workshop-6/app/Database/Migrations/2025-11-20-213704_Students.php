<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
    public function up()
    {
        //Creo tabla carreras
        $this->forge->addField([
            'id_student' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_carrer' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('id_student', true);

        $this->forge->addForeignKey('id_carrer', 'carrers', 'id_carrer', 'CASCADE', 'CASCADE');

        $this->forge->createTable('students', true);
    }

    public function down()
    {
        // Eliminar tabla
        $this->forge->dropTable('students');
    }
}
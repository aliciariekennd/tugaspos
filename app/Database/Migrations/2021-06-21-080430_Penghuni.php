<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penghuni extends Migration
{
	public function up()
	{
			$this->forge->addField([
					'id'          => [
							'type'           => 'INT',
							'constraint'     => 11,
							'unsigned'       => true,
							'auto_increment' => true,
					],
					'nama'       => [
						'type'     		=> 'VARCHAR',
						'constraint' 	=> '255',
					],
					'unit' => [
						'type' 			=> 'VARCHAR',
						'constraint' 	=> '255',
					],
					'no_ktp' => [
						'type'	 		=> 'VARCHAR',
						'constraint' 	=> '255',					
					],
					'foto' => [
						'type' 			=> 'VARCHAR',
						'constraint' 	=> '255',
					],
					'created_at' =>[
						'type' => 'DATETIME',
						'null' => TRUE
					],
					'updated_at' =>[
						'type' => 'DATETIME',
						'null' => TRUE
					],

			]);
			$this->forge->addKey('id', true);
			$this->forge->createTable('penghuni');
	}

	public function down()
	{
			$this->forge->dropTable('penghuni');
	}
}

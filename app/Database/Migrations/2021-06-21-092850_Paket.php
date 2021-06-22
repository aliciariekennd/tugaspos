<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class Paket extends Migration
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
					'tanggal'       => [
						'type'     		=> 'DATE',
						'null' 			=> false,
					],
					'isipaket'       => [
						'type'     		=> 'VARCHAR',
						'constraint' 	=> '255',
					],
					'tanggal_diterima'       => [
						'type'     		=> 'DATE',
						'null' 			=> false,
					],
					'nama_karyawan'       => [
						'type'     		=> 'VARCHAR',
						'constraint' 	=> '255',
						
					],
					'nip'       => [
						'type'     		=> 'INT',
						'constraint' 	=> 11,
					],
					'penghuni'       => [
						'type'     		=> 'VARCHAR',
						'constraint' 	=> '255',
					],
					'status'      => [
						'type'           => 'ENUM',
						'constraint'     => ['Pendding', 'Success'],
						'default'        => 'Pendding',
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
			$this->forge->createTable('paket');

	}

	public function down()
	{
			$this->forge->dropTable('paket');
	}
}
 
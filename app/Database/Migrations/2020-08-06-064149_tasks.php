<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tasks extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'ansigned' => true,
				'auto_increment' => true
			],
			'date' => [
				'type' => 'VARCHAR',
				'constraint' => 10
			],
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'body' => [
				'type' => 'TEXT'
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('Tasks');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('Tasks');
	}
}

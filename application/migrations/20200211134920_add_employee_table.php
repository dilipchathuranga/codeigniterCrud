<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_employee_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'auto_no' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'code' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => FALSE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'address' => array(
				'type' => 'TEXT'
			),
			'email' => array(
				'type' => 'EMAIL',
				'constraint' => '100'
			),
			'telephone' => array(
				'type' => 'VARCHAR',
				'constraint' => '11'
			)
		));

		$this->dbforge->create_table('employee');
	}

	public function down()
	{
		$this->dbforge->drop_table('employee');
	}


 ?>
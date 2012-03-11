<?php

namespace Fuel\Migrations;

class Create_customers
{
	public function up()
	{
		\DBUtil::create_table('customers', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'contact_number' => array('constraint' => 20, 'type' => 'varchar'),
			'address' => array('type' => 'text'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('customers');
	}
}
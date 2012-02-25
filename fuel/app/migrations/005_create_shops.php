<?php

namespace Fuel\Migrations;

class Create_shops
{
	public function up()
	{
		\DBUtil::create_table('shops', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'location' => array('constraint' => 255, 'type' => 'varchar'),
			'contact_number' => array('constraint' => 20, 'type' => 'varchar'),
			'skype' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('shops');
	}
}
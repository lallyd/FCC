<?php

namespace Fuel\Migrations;

class Create_jobs
{
	public function up()
	{
		\DBUtil::create_table('jobs', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'customer_id' => array('constraint' => 11, 'type' => 'int'),
			'shop_id' => array('constraint' => 11, 'type' => 'int'),
			'status_id' => array('constraint' => 11, 'type' => 'int'),
			'fault_description' => array('type' => 'text'),
			'item_description' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('jobs');
	}
}
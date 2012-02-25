<?php

namespace Fuel\Migrations;

class Create_notes
{
	public function up()
	{
		\DBUtil::create_table('notes', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'content' => array('type' => 'text'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'job_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('notes');
	}
}
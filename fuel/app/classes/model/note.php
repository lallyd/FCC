<?php

class Model_Note extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'content',
		'user_id',
		'job_id',
		'created_at'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_belongs_to = array("job", "user");


	public static function find($id = null, array $options = array())
	{
		$options['order_by'] = array("created_at" => "desc");
		return parent::find($id, $options);
	}
}

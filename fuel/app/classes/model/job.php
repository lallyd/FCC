<?php

class Model_Job extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'customer_id',
		'shop_id',
		'status_id',
		'fault_description',
		'item_description',
		'serial_number',
		'accessories',
		'created_at',
		'updated_at'
	);

	protected static $_belongs_to = array("user", "customer", "shop", "status");
	protected static $_has_many = array("note");

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);


	public function highlight_class()
	{

		if ($this->status->status == "In progress" or $this->status->status == "Pending" )
		{
			if ($this->updated_at < time()-259200)
			{
				return "over-72h";
			}

			if ($this->updated_at < time()-86400)
			{
				return "over-24h";
			}
		}

		if ($this->status->status == "Awaiting collection")
		{
			return "awaiting-collection";
		}

		
	}
}

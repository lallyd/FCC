<?php

class Model_Shop extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'location',
		'contact_number',
		'skype',
		'email'
	);

	protected static $_has_many = array("job");
}

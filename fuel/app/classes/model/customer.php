<?php

class Model_Customer extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'email',
		'contact_number',
		'address'
	);

	protected static $_has_many = array("job");
}

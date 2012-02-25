<?php

class Model_Status extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'status',
	);

	protected static $_has_many = array("job");
}

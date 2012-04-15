<?php

class Model_User extends \Orm\Model
{

	protected static $logged_in = null;

	protected static $_properties = array(
		'id',
		'username',
		'password',
		'name',
		'contact_number'
	);

	protected static $_has_many = array("job", "note");

	public function logged_in()
	{
		return !is_null(static::$logged_in);
	}

	public static function logged_in_user()
	{
		if (is_null(static::$logged_in))
		{
			throw new NotLoggedInException("Not Logged In");
		}

		return static::$logged_in;
	}

	public static function get_by_username($username)
	{
		$user = static::find('all', array(
			'where' => array(
				array('username', '=', $username)
			)
		));

		if (count($user) == 0)
		{
			throw new UserNotFoundException($username);
		}

		return reset($user);
	}

	public static function force_login($id)
	{
		Session::set('userid', $id);
	}

	public static function logout()
	{
		Session::delete('userid');
	}

	public static function check_login()
	{
		if (Session::get('userid'))
		{
			static::$logged_in = static::find( Session::get('userid') );
		}
	}

}

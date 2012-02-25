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

	public function logged_in()
	{
		return !is_null(static::$logged_in);
	}

	public static function logged_in_user()
	{
		if (is_null(static::$logged_in))
		{
			throw new Exception("Not Logged In");
		}

		return static::$logged_in;
	}

	public static function login($username, $password)
	{
		$password = $password; // Encrypt what they passed in

		$user = static::find('all', array(
			'where' => array(
				array('username', '=', $username),
				array('password', '=', $password)
			)
		));

		if (count($user) == 0)
		{
			throw new UserNotFoundException($username);
		}

		$user = reset($user);

		Session::set('userid', $user->id);
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

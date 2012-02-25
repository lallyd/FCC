<?php

class Controller_Auth extends Base_Public
{

	public function action_login()
	{
		if (Input::Is_Post())
		{
			try 
			{
				Model_User::login( Input::Post("username"), Input::Post("password") );
			}
			catch (UserNotFoundException $e)
			{
				Message::Error("That user does not exist");
			}
		}

		$this->template->title = 'Login';
	}

	public function action_logout()
	{
		$this->template->title = 'Logout';
	}

}

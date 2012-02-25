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
				Message::Success("Logged In");
				Response::Redirect("/");
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
		Model_User::logout();
		Message::Success("Logged Out");
		Response::Redirect("/");
	}

}

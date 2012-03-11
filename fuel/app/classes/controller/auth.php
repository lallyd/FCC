<?php

class Controller_Auth extends Base_Public
{

	public function action_login()
	{
		if (Input::Is_Post())
		{
			$val = Validation::forge();
			$val->add('username', 'Your username')->add_rule('required');
			$val->add('password', 'Your password')->add_rule('required');

			if ($val->run())
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

			else
			{
				foreach ($val->error() as $err)
				{
					Message::Error($err);
				}

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

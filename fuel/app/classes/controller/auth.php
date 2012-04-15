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
					// Get user details
					$u = Model_User::get_by_username(Input::Post("username"));

					if (BCrypt::check(Input::Post("password"), $u->password)){
						Model_User::force_login($u->id);
						Message::Success("Logged In");
						Response::Redirect("/");
					}
					else
					{
						throw new UserNotFoundException;
					}

					
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

<?php

class Controller_User extends Base_Private
{

	public function action_index()
	{
		$this->template->title = 'View Account';
	}

	public function action_edit()
	{

		if (Input::is_post())
		{
			$this->user->name = Input::Post("name");
			$this->user->contact_number = Input::Post("contact_number");
			
			$val = Validation::forge();
			$val->add("name", "Name")->add_rule("required");
			$val->add("contact_number", "Contact Number")->add_rule("required");

			if ($val->run())
			{
			$this->user->save();
			Message::Success("Details Updated");
			}

			else
			{
				foreach ($val->error() as $err)
				{
					Message::Error($err);
				}
			}
		}

		$this->template->title = 'Edit Account';
	}

}

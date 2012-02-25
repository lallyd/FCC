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
			$this->user->save();
			Message::Success("Details Updated");
		}

		$this->template->title = 'Edit Account';
	}

}

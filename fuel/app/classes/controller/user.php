<?php

class Controller_User extends Base_Private
{

	public function action_index()
	{
		$this->template->title = 'View Account';
	}

	public function action_edit()
	{
		$this->template->title = 'Edit Account';
	}

}

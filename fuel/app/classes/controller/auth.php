<?php

class Controller_Auth extends Base_Public
{

	public function action_login()
	{
		$this->template->title = 'Login';
	}

	public function action_logout()
	{
		$this->template->title = 'Logout';
	}

}

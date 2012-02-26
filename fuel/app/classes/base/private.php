<?php

class Base_Private extends Base_Public
{
	public function __construct($req, $res)
	{
		parent::__construct($req, $res);

		if (!$this->user->logged_in())
		{
			Message::Error("You need to be logged in");
			Response::Redirect("auth/login");
		}
	}
}
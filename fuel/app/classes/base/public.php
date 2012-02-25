<?php

class Base_Public extends Controller_Template
{
	public function __construct($req, $res)
	{
		parent::__construct($req, $res);
		$this->data = array();

		Model_User::check_login();

		try {
			$this->user = Model_User::logged_in_user();
		}
		catch(NotLoggedInException $e)
		{
			$this->user = new Model_User;
		}

		$this->data['user'] = $this->user;

	}

	public function after($res)
	{
		if (isset($this->template->title))
		{
			$this->template->title .= " | ";
		}
		else
		{
			$this->template->title = '';
		}

		foreach ($this->data as $k => $v)
		{
			$this->template->{$k} = $v;
		}

		$this->template->title .= "FCC";

		$c = strtolower( str_replace("Controller_", "", \Request::active()->controller) );
		$m = \Request::active()->action;
		if ($m == "add" || $m == "edit"){ $m = "addedit"; }

		$this->template->content = View::forge($c.'/'.$m, $this->data);

		parent::after($res);
	}
}
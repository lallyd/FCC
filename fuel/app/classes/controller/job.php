<?php

class Controller_Job extends Base_Private
{

	public function action_index()
	{
		$this->template->title = 'Job List';
	}

	public function action_view($id)
	{
		$this->template->title = 'View Job';
	}

	public function action_add()
	{
		$this->template->title = 'Add Job';
	}

	public function action_edit()
	{
		$this->template->title = 'Edit Job';
	}

}

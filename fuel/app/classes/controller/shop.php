<?php

class Controller_Shop extends Base_Private
{

	public function action_index()
	{
		$this->data['shop'] = Model_Shop::find('all');
		$this->template->title = 'Shop List';
	}

	public function action_add()
	{
		$this->template->title = 'Add Shop';
	}

	public function action_edit()
	{
		$this->template->title = 'Edit Shop';
	}

	public function action_view($id)
	{
		$this->data['shop'] = Model_Shop::find($id);
		$this->template->title = 'View Shop';

	}

}

<?php

class Controller_Status extends Base_Private
{

	public function action_add()
	{
		$this->template->title = 'Add Status';
		$s = new Model_Status;

		if (Input::Is_Post())
		{
			$s = new Model_Status;
			$s->status = Input::Post("status");
			$s->save();

			Message::Success("Status Added");	
			Response::Redirect("status");
		}

	}

	public function action_index()
	{
		$this->template->title = 'View Status';
		$this->data['status']= Model_Status::find('all');

	}

}

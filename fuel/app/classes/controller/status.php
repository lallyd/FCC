<?php

class Controller_Status extends Base_Private
{

	public function action_add()
	{
		$this->template->title = 'Add Status';
		$s = new Model_Status;

		if (Input::Is_Post())
		{
			$val = Validation::forge();
			$val->add("status", "Status")->add_rule("required");

			if ($val->run())
			{
				$s = new Model_Status;
				$s->status = Input::Post("status");
				$s->save();

				Message::Success("Status Added");	
				Response::Redirect("status");
			}
			else
			{
				foreach ($val->error() as $err)
				{
					Message::Error($err);
				}
			}
			
		}

	}

	public function action_index()
	{
		$this->template->title = 'View Status';
		$this->data['status']= Model_Status::find('all');

	}

}

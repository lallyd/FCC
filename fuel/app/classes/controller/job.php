<?php

class Controller_Job extends Base_Private
{

	public function action_index()
	{
		$this->template->title = 'Job List';

		$this->data['jobs'] = Model_Job::find('all');
	}

	public function action_view($id)
	{
		$this->template->title = 'View Job';
		$this->data['job'] = Model_Job::find($id);
	}

	public function action_add()
	{

		$j = new Model_Job;

		if (Input::Is_Post())
		{
			$j->status_id = Input::Post("status");
			$j->customer_id = Input::Post("customer");
			$j->fault_description = Input::Post("fault_description");
			$j->item_description = Input::Post("item_description");
			$j->shop_id = Input::Post("shop");
			$j->user_id = $this->user->id;

			$j->save();
			Message::Success("Job Created");
			Response::Redirect("job/view/".$j->id);
		}

		$this->template->title = 'Add Job';

		$this->data['job'] = $j;
		$this->data['status'] = Model_Status::find('all');
		$this->data['shop'] = Model_Shop::find('all');
	}

	public function action_edit()
	{
		$this->template->title = 'Edit Job';
	}

}

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
		$this->data['action'] = "Add";
		$this->add_edit($j);
		$this->template->title = 'Add Job';		
	}

	public function action_edit($id)
	{
		$j = Model_Job::find($id);
		$this->data['action'] = "Edit";
		$this->add_edit($j);
		$this->template->title = 'Edit Job';
	}

	public function action_add_note($id)
	{
		if (Input::Is_Post())
		{
			$n = new Model_Note;
			$n->job_id = $id;
			$n->user_id = $this->user->id;
			$n->content = Input::Post("note");
			$n->save();

			Message::Success("Note Added");	
		}
		
		Response::Redirect("job/view/".$id);
	}

	protected function add_edit($j)
	{
		if (Input::Is_Post())
		{
			$j->status_id = Input::Post("status");
			$j->fault_description = Input::Post("fault_description");
			$j->item_description = Input::Post("item_description");
			$j->shop_id = Input::Post("shop");
			$j->user_id = $this->user->id;

			if ($j->is_new())
			{
				$j->customer_id = Input::Post("customer");
			}

			$j->save();
			Message::Success("Job ".$this->data['action'].'ed');
			Response::Redirect("job/view/".$j->id);
		}

		$this->data['job'] = $j;
		$this->data['status'] = Model_Status::find('all');
		$this->data['shop'] = Model_Shop::find('all');
	}

}

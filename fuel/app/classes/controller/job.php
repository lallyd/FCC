<?php

class Controller_Job extends Base_Private
{

	public function action_index()
	{
		$this->template->title = 'Job List';

		$options = array();
		if (Input::Get("status"))
		{
			$options['where'] = array( array("status_id","=", Input::Get("status")) );
		}

		if (Input::Get("date"))
		{
			$options['order_by'] = array("created_at"=> Input::Get("date"));
		}

		$this->data['jobs'] = Model_Job::find('all', $options);
	}

	public function action_view($id)
	{
		$this->template->title = 'View Job';
		$this->data['job'] = Model_Job::find($id);

		if (Input::Get("print") !== null){
			echo View::Forge("job/print", $this->data);
			exit;
		}
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
			
			$val = Validation::forge();
			$val->add("note", "Note")->add_rule("required");

			if ($val->run())
			{
			Message::Success("Note Added");	
			$n->save();
			}

			else
			{
				foreach ($val->error() as $err)
				{
					Message::Error($err);
				}
			}

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
			$j->serial_number = Input::Post("serial_number");
			$j->accessories = Input::Post("accessories");
			$j->shop_id = Input::Post("shop");
			$j->password = Input::Post("password");
			$j->user_id = $this->user->id;

			$val = Validation::forge();
			$val->add("status", "Status")->add_rule("required");
			$val->add("fault_description", "Fault Description")->add_rule("required");
			$val->add("item_description", "Item Description")->add_rule("required");
			$val->add("accessories", "Accessories")->add_rule("required");
			$val->add("shop", "Shop")->add_rule("required");

			if ($val->run())

			{
			if ($j->is_new())
			{
				$cust = reset(Model_Customer::find('all', array('where' => array( array('name','=', Input::Post("customer"))))));
				$j->customer_id = $cust->id;
			}

			$j->save();
			Message::Success("Job ".$this->data['action'].'ed');
			Response::Redirect("job/view/".$j->id);
			}

			else
			{
				foreach ($val->error() as $err)
				{
					Message::Error($err);
				}
			}
		}

		$this->data['job'] = $j;
		$this->data['status'] = Model_Status::find('all');
		$this->data['shop'] = Model_Shop::find('all');
		$this->data['customer'] = Model_Customer::find('all');
	}

}

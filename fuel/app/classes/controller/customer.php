<?php

class Controller_Customer extends Base_Private
{

	public function action_index()
	{
		$this->data['customers'] = Model_Customer::find('all');
		$this->template->title = 'Customer List';
	}

	public function action_view($id)
	{
		$this->data['customer'] = Model_Customer::find($id);
		$this->template->title = 'View Customer';
	}

	public function action_add()
	{
		$this->template->title = 'Add Customer';
		$this->data['action'] = 'Add';
		$this->add_edit(new Model_Customer);
	}

	public function action_edit($id)
	{
		$model = Model_Customer::find($id);
		$this->template->title = 'Edit Customer';
		$this->data['action'] = 'Edit';
		$this->add_edit($model);
	}

	public function add_edit($c)
	{

		if (Input::Is_Post())
		{

			$c->name = Input::Post("name");
			$c->email = Input::Post("email");
			$c->address = Input::Post("address");
			$c->contact_number = Input::Post("contact_number");

			$val = Validation::forge();
			$val->add("name", "Name")->add_rule("required");
			$val->add("email", "Email")-> add_rule("valid_email");
			$val->add("contact_number", "Contact Number")->add_rule("required");

			if ($val->run())
			{
				$c->save();

				Message::Success("Customer " .$this->data['action']."ed");
				Response::Redirect("customer/view/".$c->id);
			}

			else
			{
				foreach ($val->error() as $err)
				{
					Message::Error($err);
				}
			}
		}

		$this->data['customer'] = $c;
	}

	public function action_ajax_search()
	{
		$ret = array();

		$customers = Model_Customer::find('all', array(
			'where' => array(
				array('name', 'LIKE', '%'.Input::Get('term').'%')
			)
		));
		foreach($customers as $c)
		{
			$ret[] = $c->name;
		}

		echo json_encode($ret);die;
	}

}

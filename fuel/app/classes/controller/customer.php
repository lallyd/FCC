<?php

class Controller_Customer extends Base_Private
{

	public function action_index()
	{
		$this->template->title = 'Customer &raquo; Index';
		$this->template->content = View::forge('customer/index');
	}

	public function action_view()
	{
		$this->template->title = 'Customer &raquo; View';
		$this->template->content = View::forge('customer/view');
	}

	public function action_add()
	{
		$this->template->title = 'Customer &raquo; Add';
		$this->template->content = View::forge('customer/add');
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

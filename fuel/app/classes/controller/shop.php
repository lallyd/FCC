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
		$shop = new Model_Shop;
		$this->data['action'] = 'Add';
		$this->add_edit($shop);
		
	}

	public function action_edit($id)
	{
		$shop = Model_Shop::find($id);
		$this->template->title = 'Edit Shop';
		$this->data['action'] = 'Edit';
		$this->add_edit($shop);


	}

	public function action_view($id)
	{
		$this->data['shop'] = Model_Shop::find($id);
		$this->template->title = 'View Shop';

	}

	protected function add_edit($m)
	{
		if (Input::is_post()){
		$m->location=Input::post('location');
		$m->contact_number=Input::post('contact_number');
		$m->email=Input::post('email');
		$m->skype=Input::post('skype');
		$m->save();

		Message::Success("Shop " .$this->data['action']."ed");
		Response::Redirect("shop/view/".$m->id);			
		}

		$this->data['shop'] = $m;

	}

}

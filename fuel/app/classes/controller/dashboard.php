<?php

class Controller_Dashboard extends Base_Private
{

	public function action_index()
	{
		$this->template->title = 'Dashboard';

		$this->data['status'] = Model_Status::find('all');
		$counts = array();
		foreach ($this->data['status'] as $s)
		{
			$counts[$s->id] = 0;
		}

		// Get jobs
		$jobs = Model_Job::find('all');
		foreach ($jobs as $j)
		{
			$counts[$j->status_id]++;
		}

		$this->data['counts'] = $counts;

	}

}

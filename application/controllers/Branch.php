<?php

	/**
	* 
	*/
	class Branch extends CI_Controller
	{
		
		public function add_branch()
		{
			$data['nav'] = 'add_branch';
			$this->api->load_view('branch/add_branch', '', 'branchmd', $data);
		}
		public function save_branch()
		{
			$this->load->model('branchmd');
			$data = ['description' => $this->input->post('branch_name')];
			$this->branchmd->insert_branch($data);
			$this->api->set_session_message('success', 'Branch Added', 'message');
			redirect('/add_branch');
		}
		
	}
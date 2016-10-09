<?php

	/**
	* 
	*/
	class Employee extends CI_Controller
	{
		
		public function add_employee()
		{
			$this->load->view('templates/header');
			$data['nav'] = 'employee';
			$this->load->model('usermd');
			$this->load->view('templates/navigation', $data);
			$this->load->view('employee/add_employee');
			$this->load->view('templates/footer');

		}
	}
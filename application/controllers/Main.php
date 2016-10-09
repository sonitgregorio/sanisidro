<?php

	class Main extends CI_Controller
	{
		
		public function index(){

			$data['nav'] ='';
			$this->load->view('templates/header');
			if ($this->session->userdata('uid'))
			{
				$this->load->view('templates/navigation', $data);
				$this->load->view('pages/student_list');
			}
			else
			{
				$this->load->view('templates/header2', array('nav' => ''));
				$this->load->view('index');
			}
			$this->load->view('templates/footer');
		}
		public function verify_user()
		{
			$this->load->model('mainmd');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->mainmd->check_user($username, $password);
			if ($result) 
			{
				$this->session->set_userdata('uid', $result['id']);
				$this->session->set_userdata('pid', $result['pid']);
				$this->session->set_userdata('position', $result['position']);


			}
			else
			{
				$this->api->set_session_message('danger', 'Invalid Username/Password', 'message');
			}
			redirect('/');
		}
	}
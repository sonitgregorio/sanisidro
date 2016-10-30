<?php
	/**
	* 
	*/
	class User extends CI_Controller
	{
		
		public function unset_data()
		{
			$this->session->unset_userdata('uid');	
			redirect('/');
		}
		public function insert_user()
		{
			$this->load->model('usermd');
			$firstname = $this->input->post('firstname');
			$address = $this->input->post('address');
			$contact = $this->input->post('contact');
			$position = $this->input->post('position');
			$lastname = $this->input->post('lastname');
			$status = $this->input->post('status');
			$gender = $this->input->post('gender');
			$email_add = $this->input->post('email_add');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$pid = $this->input->post('pid');
			$data = array(
				'firstname' => $firstname,
				'lastname' => $lastname,
				'position' => $position,
				'address' => $address,
				'contact' => $contact,
				'civil' => $status,
				'gender' => $gender,
				'email'	=> $email_add
				);

			if (empty($pid) || $pid == '') {
				$id = $this->usermd->insert_user($data, $pid);
				$creds = array(
					'username' => $username,
					'password' => MD5($password),
					'position' => $position,
					'pid' => $id
				);

				$this->usermd->insert_creds($creds);
				$this->api->set_session_message('success', 'New User Inserted', 'message');
			}else{
				$this->usermd->insert_user($data, $pid);
				$this->api->set_session_message('success', 'New User Updated', 'message');
			}

			
			redirect('/add_employee');
		}
		public function request()
		{
			$this->load->view('templates/header');
			$this->load->view('templates/header2', array('nav' => 'request'));
			$this->load->view('pages/request');
			$this->load->view('templates/footer');

		}
		public function add_announcement()
		{
			$this->load->model('usermd');
			$this->load->view('templates/header');
			$this->load->view('templates/navigation', array('nav' => 'add_announcement'));
			$this->load->view('pages/add_announcement');
			$this->load->view('templates/footer');
		}
		public function save_announcement()
		{
			$this->load->model('usermd');
			$ann = $this->input->post('ann');
			$data = array(
				'ann' => $ann,
				'title' => $this->input->post('title'),
				'date_ann' => Date('Y-m-d'),
				'pid' => $this->session->userdata('pid')
				);
			$this->usermd->insert_ann($data);
			$this->api->set_session_message('success', 'New Announcement Inserted', 'message');
			redirect('/add_announcement');
		}
		public function delete_ann($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('tbl_announcement');
			$this->api->set_session_message('success', 'Announcement Successfully Deleted', 'message');
			redirect('/add_announcement');
		}
		public function get_user_specific()
		{
			$pid = $this->input->post('pid');
			$this->db->where('id', $pid);
			$x = $this->db->get('tbl_party')->row_array();
			ob_clean();
			echo json_encode($x);
			die();
		}
		public function view_announcement()
		{
			$this->load->model('usermd');
			$this->load->view('templates/header');
			$this->load->view('templates/header2', array('nav' => 'view_ann'));
			$this->load->view('pages/view_ann');
			$this->load->view('templates/footer');
		}
		public function delete_user($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('tbl_party');
			$this->db->where('pid', $id);
			$this->db->delete('tbl_users');
			$this->api->set_session_message('success', 'User Deleted', 'message');
			redirect('/add_employee');
		}
		public function view_upload()
		{
			$this->load->model('usermd');
			$this->load->view('templates/header');
			$this->load->view('templates/navigation', array('nav' => 'upload'));
			$this->load->view('pages/view_upload');
			$this->load->view('templates/footer');
		}
		public function save_upload()
		{
			$config['upload_path']    = './assets/files/';
        	$config['allowed_types']   = 'doc|docx|xlsx|pdf';
       		$config['encrypt_name']    =  FALSE;

       		$this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('files'))
	        {
	          
	        } else {
	        	$data = array(
	        		'filename' => $this->input->post('filename'),
	        		'file_path' => $this->upload->data('file_name'),
	        		'pid' => $this->session->userdata('pid')
	        		);

	        	$this->db->insert('tbl_file_upload', $data);
				$this->api->set_session_message('success', 'New file has been uploaded !', 'message');
	        	redirect('/view_upload');
	        }	
		}
		public function delete_documents($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('tbl_file_upload');
			$this->api->set_session_message('success', 'File has been removed!', 'message');
        	redirect('/view_upload');	
		}
		public function download_documents($id)
		{
			$this->load->helper('download');
          	$this->load->library('encryption');
			$this->db->where('id', $id);
			$x = $this->db->get('tbl_file_upload')->row_array();
			$f = $x['file_path'];
            $data = './assets/files/' . $f;
            $name = $x['filename'];
            force_download($x['file_path'], $data);
		}
		public function insert_request()
		{
			$fname = $this->input->post('fname');
			$address = $this->input->post('address');
			$contact = $this->input->post('contact');
			$email = $this->input->post('email');
			$description = $this->input->post('description');

			$data = array('fullname' => $fname,
						  'address' => $address,
						  'contact' => $contact,
						  'email' => $email,
						  'description' => $description
						 );

			$config['upload_path']    = './assets/files/';
        	$config['allowed_types']   = 'doc|docx|xlsx|pdf';
       		$config['encrypt_name']    =  FALSE;

       		$this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('files'))
	        {
	          
	        } else {
	        	$upload_data = $this->upload->data();
	        	$data['filename'] = $upload_data['file_name'];

				$this->db->insert('tbl_request', $data);
				$this->api->set_session_message('success', 'Request has been sent!', 'message');
	        	redirect('/request');
	        }	
		}
		function view_request()
		{
			$this->load->model('usermd');
			$this->load->view('templates/header');
			$this->load->view('templates/navigation', array('nav' => 'reuqest'));
			$this->load->view('pages/view_request');
			$this->load->view('templates/footer');
		}
		public function download_request($id)
		{
			$this->load->helper('download');
          	$this->load->library('encryption');
			$this->db->where('id', $id);
			$x = $this->db->get('tbl_request')->row_array();
			$f = $x['filename'];
            $data = './assets/files/' . $f;
            $name = $x['filename'];
            force_download($x['filename'], $data);
		}
		public function approve($id)
		{
			$data = array('status' => 'Approved');
			$this->db->where('id', $id);
			$this->db->update('tbl_request', $data);
			$this->api->set_session_message('success', 'Request has been Approved!', 'message');
			redirect('/view_request');
		}
		public function reject_r($id)
		{
			$data = array('status' => 'Rejected');
			$this->db->where('id', $id);
			$this->db->update('tbl_request', $data);
			$this->api->set_session_message('success', 'Request has been Rejected!', 'message');
			redirect('/view_request');
		}
		public function view_approve()
		{
			$this->load->model('usermd');
			$this->load->view('templates/header');
			$this->load->view('templates/navigation', array('nav' => 'app_re'));
			$this->load->view('pages/view_approve');
			$this->load->view('templates/footer');
		}
		public function organization()
		{
			$this->load->model('usermd');
			$this->load->view('templates/header');
			$this->load->view('templates/header2', array('nav' => 'organization'));
			$this->load->view('pages/organization');
			$this->load->view('templates/footer');
		}
	}
	
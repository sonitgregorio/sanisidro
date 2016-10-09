<?php

	/**
	* 
	*/
	class Mainmd extends CI_Model
	{
		public function check_user($username, $password){
			$this->db->where('username', $username);
			$this->db->where('password', MD5($password));
			return $this->db->get('tbl_users')->row_array();
		}
		public function messageForm($type = 'success', $message, $name = 'message')
		{
			 $this->session->set_flashdata($name,'<div class="alert alert-'.$type.'">'.$message.'</div>');
		}
	}
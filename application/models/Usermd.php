<?php
	/**
	* 
	*/
	class Usermd extends CI_Model
	{
		
		public function insert_user($data, $pid)
		{
			if ($pid != '' || !empty($pid)) {
				$this->db->where('id', $pid);
				$this->db->update('tbl_party', $data);
			}else{
				$this->db->insert('tbl_party', $data);
				return $this->db->insert_id();
			}
			
		}
		public function insert_creds($data)
		{

			$this->db->insert('tbl_users', $data);
		}
		public function getUsers()
		{
			$this->db->where('tbl_party.position = tbl_position.id');
			$this->db->select('tbl_party.*, tbl_position.description');
			return $this->db->get('tbl_party, tbl_position')->result_array();
		}
		public function insert_ann($data)
		{
			$this->db->insert('tbl_announcement', $data);
		}
		public function get_ann()
		{
			$this->db->order_by('id', 'DESC');
			return $this->db->get('tbl_announcement')->result_array();
		}
		public function get_files()
		{
			$this->db->where('a.pid = b.id');
			$this->db->select('a.*, CONCAT(b.firstname, " ", b.lastname) fname');
			return $this->db->get('tbl_file_upload a, tbl_party b')->result_array();
		}
		public function getRequest()
		{
			$this->db->where('status = ""');
			return $this->db->get('tbl_request')->result_array();
		}
		public function getApprove()
		{
			$this->db->where('status', "Approved");
			return $this->db->get('tbl_request')->result_array();
		}
	}
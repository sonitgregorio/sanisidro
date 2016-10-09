<?php

/**
* 
*/
class Branchmd extends CI_Model
{
	public function get_employee($position)
	{
		$this->db->where('position', $position);
		return $this->db->get('tbl_party')->result_array();
	}
	public function insert_branch($data)
	{
		$this->db->insert('tbl_branch', $data);
	}
	public function get_branches()
	{
		return $this->db->get('tbl_branch')->result();		
	}
}
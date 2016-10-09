<?php


/**
* 
*/
class StudentRegistration extends CI_Model
{
	
	function GetStudentList()
	{
		  return $this->db->query("SELECT *, tbl_party.id as studID FROM tbl_party WHERE tbl_party.usertype = tbl_usertype.id")->result_array();

	}
}

?>
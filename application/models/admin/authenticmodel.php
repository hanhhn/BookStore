<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticmodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_row_byemail($email = 0)
	{
		return $this->db->from("user")->where("email", $email)->get()->row_array();
	}
	
	public function update($data = NULL, $id = 0)
	{
		$this->db->update("kind", $data, array("id" => $id));
		if($this->db->affected_rows() >= 1)
		{
			return array(
				"type" => "Successful",
				"msg" => " Update a row is successful!"
			);
		}
		else
		{
			return array(
				"type" => "Error",
				"msg" => " Update a row is error! again."
			);
		}
	}
	
	public function check_email($email = "")
	{
		return count($this->db->from("user")->where("email", $email)->get()->row_array()) > 0 ? TRUE : FALSE ;
	}
	
	public function login($email = "", $password = "")
	{
		$row = $this->db->from("user")
							  ->where(array("email" => $email, "password" => $password))
							  ->get()->row_array();
		print_r($row);
		return count($row) > 0 && $row['admin'] == "1" ? TRUE : FALSE;
	}
}
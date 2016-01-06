<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accountmodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insert($data = NULL)
	{
		$this->db->insert("user", $data);
		if($this->db->affected_rows() > 0)
		{
			return array(
				"type" => "Successful",
				"msg" => " Signin is successful!"
			);
		}
	}

	public function update($id = 0, $data = NULL)
	{
		$this->db->update("user", $data, array("id" => $id));
		if($this->db->affected_rows() >= 1)
		{
			return array(
				"type" => "Successful",
				"msg" => " Update infomation is successful!"
			);
		}
		else
		{
			return array(
				"type" => "Error",
				"msg" => " Update infomation is error! again."
			);
		}
	}
	
	public function check_email($email = "")
	{
		return count($this->db->from("user")->where("email", $email)->get()->row_array()) > 0 ? TRUE : FALSE ;
	}
}
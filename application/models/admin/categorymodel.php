<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorymodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_all()
	{
		return $this->db->from("category")->order_by("id","DESC")->get()->result_array();
	}
	
	public function get_row_byid($id = 0)
	{
		return $this->db->from("category")->where("id",(int)$id)->get()->row_array();
	}
	
	public function add()
	{
		$data = array(
					"name" => $this->input->post("category_name")
				);
		$this->db->insert("category",$data);
		if($this->db->affected_rows() > 0)
		{
			return array(
				"type" => TRUE,
				"msg" => " Add new a category is successful!"
			);
		}
		else
		{
			return array(
				"type" => FALSE,
				"msg" => " Add new a category is error! again."
			);
		}
	}
	
	public function delete($checkbox = NULL)
	{
		$this->db->where_in("id", $checkbox)->delete("category");
		if($this->db->affected_rows() >= 1)
		{
			return array(
				"type" => "Successful",
				"msg" => ' Delete ('.count($checkbox).') row is successful!'
			);
		}
		else
		{
			return array(
				"type" => "Error",
				"msg" => " Delete row is error! again."
			);
		}
	}
	
	public function del($id = 0)
	{
		$this->db->delete("category", array("id" => $id));
		if($this->db->affected_rows() >= 1)
		{
			return array(
				"type" => "Successful",
				"msg" => " Delete a row is successful!"
			);
		}
		else
		{
			return array(
				"type" => "Error",
				"msg" => " Delete a row is error! again."
			);
		}
	}
	
	public function update($data = NULL, $id = 0)
	{
		$this->db->update("category", $data, array("id" => $id));
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
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authormodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_all()
	{
		return $this->db->from("author")->order_by("id","DESC")->get()->result_array();
	}
	
	public function get_row_byid($id = 0)
	{
		return $this->db->from("author")->where("id",(int)$id)->get()->row_array();
	}
	
	public function add()
	{
		$data = array(
					"name" => $this->input->post("author_name"),
					"born" => $this->input->post("author_born"),
					"field" => $this->input->post("author_field"),
					"introduce" => $this->input->post("author_introduce")
				);
		$this->db->insert("author",$data);
		if($this->db->affected_rows() > 0)
		{
			return array(
				"type" => TRUE,
				"msg" => " Add new a author is successful!"
			);
		}
		else
		{
			return array(
				"type" => FALSE,
				"msg" => " Add new a author is error! again."
			);
		}
	}
	
	public function delete($checkbox = NULL)
	{
		$this->db->where_in("id", $checkbox)->delete("author");
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
		$this->db->delete("author", array("id" => $id));
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
		$this->db->update("author", $data, array("id" => $id));
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
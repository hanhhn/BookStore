<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->Model("admin/Categorymodel");
	}
	
	public function index()
	{
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("category_name", "category ", "trim|required|min_length[5]");
			if($this->form_validation->run()){
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Categorymodel->add());
				redirect("admin/category", "refresh");
			}
		}
		$query = $this->Categorymodel->get_all();
		$data = array(
			"module" => "Category",
			"title" => "Create new a category",
			"template" => "backend/category/index",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
	public function edit($id = 0) {
		$query = $this->Categorymodel->get_row_byid($id);
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("category_name", "category ", "trim|required|min_length[5]");
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error!</strong> ','.</div>');
			if($this->form_validation->run()){
				$data =  array(
					"name" => $this->input->post("category_name")
				);
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Categorymodel->update($data,$id));
				redirect("admin/category", "refresh");
			}
		}
		$data = array(
			"module" => "Category",
			"title" => "Edit a category",
			"template" => "backend/category/edit",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
	public function del($id = 0) {
		$query = $this->Categorymodel->get_row_byid($id);
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("category_name", "category ", "trim|required|min_length[5]");
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error!</strong> ','.</div>');
			if($this->form_validation->run()){
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Categorymodel->del($id));
				redirect("admin/category", "refresh");
			}
		}
		$data = array(
			"module" => "Category",
			"title" => "Delete a category",
			"template" => "backend/category/delete",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
}

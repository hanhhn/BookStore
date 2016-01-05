<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kind extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->Model("admin/Kindmodel");
	}
	
	public function index()
	{
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("kind_name", "kind ", "trim|required|min_length[5]");
			if($this->form_validation->run()){
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Kindmodel->add());
				redirect("admin/kind", "refresh");
			}
		}
		$query = $this->Kindmodel->get_all();
		$data = array(
			"module" => "Kind",
			"title" => "Create new a kind",
			"template" => "backend/kind/index",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
	public function edit($id = 0) {
		$query = $this->Kindmodel->get_row_byid($id);
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("kind_name", "kind ", "trim|required|min_length[5]");
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error!</strong> ','.</div>');
			if($this->form_validation->run()){
				$data =  array(
					"name" => $this->input->post("kind_name")
				);
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Kindmodel->update($data,$id));
				redirect("admin/kind", "refresh");
			}
		}
		$data = array(
			"module" => "Kind",
			"title" => "Edit a kind of book",
			"template" => "backend/kind/edit",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
	public function del($id = 0) {
		$query = $this->Kindmodel->get_row_byid($id);
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("kind_name", "kind ", "trim|required|min_length[5]");
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error!</strong> ','.</div>');
			if($this->form_validation->run()){
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Kindmodel->del($id));
				redirect("admin/kind", "refresh");
			}
		}
		$data = array(
			"module" => "Kind",
			"title" => "Delete a kind of book",
			"template" => "backend/kind/delete",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
}

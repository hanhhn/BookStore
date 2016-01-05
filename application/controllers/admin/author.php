<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Author extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->Model("admin/Authormodel");
	}
	
	public function index()
	{
		$query = $this->Authormodel->get_all();
		$data = array(
			"module" => "Author",
			"title" => "Module author",
			"template" => "backend/author/index",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
	public function add()
	{
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("author_name", "author name ", "trim|required|min_length[5]");
			$this->form_validation->set_rules('author_born','date ','required');
			$this->form_validation->set_rules("author_field", "field ", "trim|required|min_length[5]");
			$this->form_validation->set_rules("author_introduce", "introduce ", "trim|required");
			if($this->form_validation->run()){
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Authormodel->add());
				redirect("admin/author", "refresh");
			}
		}
		$data = array(
			"module" => "Author",
			"title" => "Module author",
			"template" => "backend/author/add"
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
	public function edit($id = 0) {
		$query = $this->Authormodel->get_row_byid($id);
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("author_name", "author ", "trim|required|min_length[5]");
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error!</strong> ','.</div>');
			if($this->form_validation->run()){
				$data = array(
					"name" => $this->input->post("author_name"),
					"born" => $this->input->post("author_born"),
					"field" => $this->input->post("author_field"),
					"introduce" => $this->input->post("author_introduce")
				);
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Authormodel->update($data,$id));
				redirect("admin/author", "refresh");
			}
		}
		$data = array(
			"module" => "Author",
			"title" => "Edit a author",
			"template" => "backend/author/edit",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
	public function del($id = 0) {
		$query = $this->Authormodel->get_row_byid($id);
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("author_name", "Danh mục sách ", "trim|required|min_length[5]");
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error!</strong> ','.</div>');
			if($this->form_validation->run()){
				$this->session->set_flashdata('smg_flashdata', $flash = $this->Authormodel->del($id));
				redirect("admin/author", "refresh");
			}
		}
		$data = array(
			"module" => "Author",
			"title" => "Delete a author",
			"template" => "backend/author/delete",
			"data" => $query
		);
		$this->load->view('shares/_backend_layout',isset($data)?$data:NULL);
	}
	
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentic extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Accountmodel");
	}
	
	public function signin()
	{
		$data = array(
			"title" => "Sign in | Bookstore online!",
			"template" => "frontend/authentic/signin"
		);
		$this->load->view('shares/_frontend_layout',isset($data)?$data:NULL);
	}
	
	public function signup()
	{
		if($this->input->post("submit"))
		{
			$this->form_validation->set_rules("email", "email ", "trim|required|min_length[5]|valid_email");
			$this->form_validation->set_rules("fullname", "full name ", "trim|required|min_length[5]");
			$this->form_validation->set_rules("password", "password ", "trim|required|min_length[5]");
			$this->form_validation->set_rules("confirmpassword", "confirm password ", "trim|required|min_length[5]|matches[password]");
			$this->form_validation->set_rules("phone", "phone ", "trim|required|min_length[10]|max_length[11]|integer");
			$this->form_validation->set_error_delimiters('<div style="margin-bottom: 5px; color: #e74c3c;">', '</div>');
			if($this->form_validation->run())
			{
				
			}
		}
		
		$data = array(
			"title" => "Sign up | Bookstore online!",
			"template" => "frontend/authentic/signup"
		);
		$this->load->view('shares/_frontend_layout',isset($data)?$data:NULL);
	}
	
	public function _check_email($mail = "")
	{
		
	}
	
}

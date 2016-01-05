<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentic extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->Model("admin/Authenticmodel");
	}
	
	public function login()
	{
		if($this->input->post("submit")) {
			$this->form_validation->set_rules("authentic_email", "email ", "trim|required|valid_email|min_length[10]|callback__checklogin");
			$this->form_validation->set_rules("authentic_password", "password ", "trim|required|min_length[6]|max_length[18]");
			if($this->form_validation->run()){
				redirect("admin/category");
			}
		}
		$data = array(
			"title" => "Login system Easy manager!"
		);
		$this->load->view('backend/authentic/index',isset($data)?$data:NULL);
	}
	
	public function success()
	{
		
		$data = array(
			"title" => "Welcome to easy system, Your login is success!"
		);
		$this->load->view('backend/authentic/success',isset($data)?$data:NULL);
	}
	
	public function _checklogin($email = "", $password = "")
	{
		
		if($this->Authenticmodel->check_email($email))
		{
			if(!$this->Authenticmodel->login($this->input->post("authentic_email"), $this->input->post("authentic_password")))
			{
				$this->form_validation->set_message('_checklogin', 'The email and password you entered do not match.');
				return FALSE;
			}
			$newdata = array(
                   'email'     => $this->input->post("authentic_email"),
                   'logged_in' => TRUE
				);

			$this->session->set_userdata($newdata);
			
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('_checklogin', 'The email is not exists! Try again.');
			return FALSE;
		}
	}	
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data = array(
			"title" => "Welcome to bookstore online - Buying simple, payment so quick!",
			"template" => "frontend/index"
		);
		$this->load->view('shares/_frontend_layout',isset($data)?$data:NULL);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
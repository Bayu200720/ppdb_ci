<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()

	{
		$data = [
			'active_controller' => 'logout',
			'active_function'	=> 'index' 
		];
		$this->load->view('adminlte3/login');
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */
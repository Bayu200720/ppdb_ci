<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'active_controller' => 'profile',
			'active_function'	=> 'index' 
		];
		$this->load->view('adminlte3/global/template', $data);
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */
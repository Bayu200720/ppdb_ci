<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'active_controller' => 'setting',
			'active_function'	=> 'index' 
		];
		$this->load->view('adminlte3/global/template', $data);
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */
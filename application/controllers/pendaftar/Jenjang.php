<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenjang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'active_controller' => 'jenjang',
			'active_function'	=> 'index' 
		];
		$this->load->view('adminlte3/global/template', $data);
	}

}

/* End of file Jenjang.php */
/* Location: ./application/controllers/Jenjang.php */
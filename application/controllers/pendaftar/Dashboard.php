<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'active_controller' => 'dashboard',
			'active_function'	=> 'index' 
		];
		$this->load->view('adminlte3/global/template', $data);
	}

}



/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */

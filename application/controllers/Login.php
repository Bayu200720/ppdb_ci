<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		$this->load->view('adminlte3/login');
	}
	public function form_data()
	{
		$form_data=$this->input->post();
		$this->form_validation->set_rules('email_user', 'Email User', 'required');
        $this->form_validation->set_rules('password_user', 'Password User', 'required',
                        array('required' => 'You must provide a %s.')
                );
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password_user]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('adminlte3/login');
        }
        else
        {
	        $this->load->model('M_login', 'mod');
	        unset($form_data[password_confirm]);
			$result = $this->mod->cek_user_exist($form_data);
			if (count($result) === 1) {
				$result[0]['logged_in']=TRUE;
				$this->session->set_userdata($result[0]);
				
				switch ($result[0]['level_user']) {
					case 'superadmin':
						redirect(site_url('superadmin/dashboard'));
						break;
					case 'pendaftar':
						redirect(site_url('pendaftar/dashboard'));
						break;
					
					default:
						redirect(site_url('login'));
						break;
				}
				
				
				//print 'ada datanya';# code...
			} else {
				print 'Username tidak ditemukan'; # code...
			}
			//print count($result);
			//print('<pre>');
			//print_r($result);
		}
	
	}
}
/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
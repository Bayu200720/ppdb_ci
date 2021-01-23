<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek_user_exist($form_data)
	{
		$this->db->select()
		    ->from('user')
		    ->where($form_data);
		$query = $this->db->get_compiled_select();
		//print($query);
		$result = $this->db->query($query)->result_array();

		return $result;
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */
<?php 

class User_model extends CI_Model{

	public function register($enc_password){
		$data = array(
				'nome'     => $this->input->post('name'),
				'password' => $enc_password,
				'email'    => $this->input->post('email')
			);

		return $this->db->insert('users', $data);
	}

}
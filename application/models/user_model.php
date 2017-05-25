<?php 

class User_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function registrar($enc_password){
		$data = array(
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
                'password' => $enc_password,
			);
			// Insert user
			return $this->db->insert('users', $data);
	}
}
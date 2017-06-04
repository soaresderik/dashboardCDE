<?php 

class User_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function register($enc_password){
		$data = array(
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
                'password' => $enc_password,
			);
			// Insert user
			return $this->db->insert('users', $data);
	}

	public function getUsers(){
		$query = $this->db->get('users');
		return $query->result_array();
	}
}
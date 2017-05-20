<?php 

class Post_model extends CI_Model{

	public function __construct(){
			$this->load->database();
	}

	public function getPosts(){
		$this->db->order_by('posts.id', 'DESC');
		$query = $this->db->get('posts');
		return $query->result_array();
	}

	public function criar_post(){
		$data = array(
				'title' => $this->input->post('title'),
				'body' => $this->input->post('body')
			);
		return $this->db->insert('posts', $data);
	}

	public function deletar_post($id){
		$this->db->where('id', $id);
		$this->db->delete('posts');
		return true;
	}
}
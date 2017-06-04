<?php 

class CDEAdmin extends CI_Controller{

	

	public function index(){
		$data['posts'] = $this->post_model->getPosts();
		$data['users'] = $this->user_model->getUsers();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/templates/footer');
	}

	public function pages(){
		$data['posts'] = $this->post_model->getPosts();
		$data['users'] = $this->user_model->getUsers();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages');
		$this->load->view('admin/templates/footer');
	}

	public function posts(){
		$data['posts'] = $this->post_model->getPosts();
		$data['users'] = $this->user_model->getUsers();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/posts', $data);
		$this->load->view('admin/templates/footer');
	}

	public function users(){
		$data['posts'] = $this->post_model->getPosts();
		$data['users'] = $this->user_model->getUsers();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/users');
		$this->load->view('admin/templates/footer');
	}

	public function deletar($id){
		$this->post_model->deletar_post($id);

		redirect('CDEAdmin/posts');
	}

	public function escrever(){
		$data['posts'] = $this->post_model->getPosts();
		$data['users'] = $this->user_model->getUsers();
		
		$data['title'] = 'Escrever Publicação';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/escrever', $data);
			$this->load->view('admin/templates/footer');
		}else{

				$this->post_model->criar_post();
				$this->session->set_flashdata('post_created', 'Você criou um post!');
				redirect('posts');
				
		}

		
	}


}


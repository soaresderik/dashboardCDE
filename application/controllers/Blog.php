<?php 

	class Blog extends CI_Controller
	{
		
		public function index(){

			$data['posts'] = $this->post_model->getPosts();

			$this->load->view('pages/templates/header');
			$this->load->view('pages/blog', $data);
			$this->load->view('pages/templates/footer');
		}

		
	}
 
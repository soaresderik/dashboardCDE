<?php 

class CDEAdmin extends CI_Controller{
	public function index(){

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/index');
		$this->load->view('admin/templates/footer');
	}

	public function pages(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/pages');
		$this->load->view('admin/templates/footer');
	}

	public function posts(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/posts');
		$this->load->view('admin/templates/footer');
	}

	public function users(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/users');
		$this->load->view('admin/templates/footer');
	}

}


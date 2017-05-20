<?php 

class Home extends CI_Controller{
	public function index(){
		$this->load->view('pages/templates/header');
		$this->load->view('pages/index');
		$this->load->view('pages/templates/footer');
	}
}
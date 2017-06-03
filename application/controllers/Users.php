<?php 
class Users extends CI_Controller{

	public function register(){

		$data['title'] = 'Cadastrar';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username');
		$this->form_validation->set_rules('email', 'Email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){
				$this->load->view('admin/templates/header');
				$this->load->view('admin/register', $data);
				$this->load->view('admin/templates/footer');
		} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));
				$this->user_model->register($enc_password);
				// Set message
				$this->session->set_flashdata('user_registered', 'Você é um usuário registrado, agora!');
				redirect('CDEadmin');
		}


	}
 }

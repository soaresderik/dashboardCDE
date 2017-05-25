<?php 

class Users extends CI_Controller{

	public function cadastra_usuario(){

		$data['title'] = 'Criar Usuário';
		$data['posts'] = $this->post_model->getPosts();

		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required'); //callback_check_email_exists
		$this->form_validation->set_rules('senha', 'Senha', 'required');
		$this->form_validation->set_rules('confirmar', 'Confirmar senha', 'matches[senha]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/create_user', $data);
			$this->load->view('admin/templates/footer');

		} else {

			$enc_password = md5($this->input->post('senha'));
			$this->user_model->registrar($enc_password);

			redirect('CDEadmin/users');
		}

	
	}

	// public function check_email_exists($email){
	// 	$this->form_validation->set_message('check_email_exists', 'That email is taken. Por favor, escolha outro e-mail');

	// 	if($this->user_model->check_email_exists($email)){
	// 			return true;
	// 	} else {
	// 			return false;
	// 	}
	// }
}
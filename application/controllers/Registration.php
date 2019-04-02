<?php 

class Registration extends CI_Controller{

	public function __construct() {
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Registrasi_model');
	}

	public function index(){
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('home/registration');

		} else {
			$this->Registrasi_model->tambahUser();
			redirect('Timeline/index');
		}
	}
}

?>
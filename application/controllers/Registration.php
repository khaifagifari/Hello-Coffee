<?php 

class Registration extends CI_Controller{

	public function __construct() {
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Users_model');
	}

	public function index(){
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/head');
			$this->load->view('home/registration');

		} else {
			$row = $this->Users_model->cariUser($this->input->post('username'))->num_rows();
			if($row == 1){
				$this->session->set_flashdata('registrasi','<strong>Username</strong> yang anda masukan sudah terdaftar, silahkan cari username lain.');
				$this->load->view('templates/head');
				$this->load->view('home/registration');
			}else{
				$this->Users_model->tambahUser();
				$this->load->model('toko_model');
				$this->session->set_flashdata('login','<strong>Selamat</strong> anda telah terdaftar, silahkan login.');
				$this->load->view('home/index');
			}
		}
	}
}

?>
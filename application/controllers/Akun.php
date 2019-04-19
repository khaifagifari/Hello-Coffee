<?php 
class Akun extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('komentar_model');
		$this->load->model('kopi_model');
		$this->load->model('toko_model');

		$this->load->library('form_validation');
	}

	public function index(){
		
	}

	public function pengaturanAkun($id_user){
		
		$this->load->model('Users_model');
		$data['users'] = $this->Users_model->getUserById($id_user);
		$this->load->view('templates/header');
		$this->load->view('home/akun', $data);
		$this->load->view('templates/footer');
	}
	public function deleteAkun($id_user){
		$this->Users_model->deleteUser($id_user);
		session_start();
		session_destroy();
		redirect('home');
	}
}


 ?>
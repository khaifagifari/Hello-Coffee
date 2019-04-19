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

	public function editAkun(){
		$this->load->model('Users_model');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('home/edit_akun');
			$this->load->view('templates/footer');
		}else{
			$data = [
				"username" => $this->input->post('username',true),
				"email" => $this->input->post('email',true),
				"gender" => $this->input->post('gender',true),
			];
			$this->Users_model->editUser($_SESSION['id_user'],$data);
			$data = $this->Users_model->cariUser($this->input->post('username'))->result_array();
			$_SESSION['username'] = $data[0]['username'];
			$_SESSION['gender'] = $data[0]['gender'];
			$_SESSION['email'] = $data[0]['email'];

			redirect('Akun/pengaturanAkun/'.$_SESSION['id_user']);	
		}
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
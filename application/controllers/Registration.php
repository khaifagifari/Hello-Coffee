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
				//tambahin flash data "sudah ada username"
			}else{
				$this->Users_model->tambahUser();
				$this->load->model('toko_model');
				$data = $this->Users_model->cariUser($this->input->post('username'))->result_array();
				$_SESSION['username'] = $data[0]['username'];
				$_SESSION['id_user'] = $data[0]['id_user'];
				$_SESSION['id_toko'] = $data[0]['id_toko'];
				$_SESSION['gender'] = $data[0]['gender'];
				$_SESSION['email'] = $data[0]['email'];
				$_SESSION['nama'] = $data[0]['nama'];

				$data['toko'] = $this->toko_model->getToko();
				$this->load->view('templates/header');
				$this->load->view('home/table',$data);
				$this->load->view('templates/footer');
			}
		}
	}
}

?>
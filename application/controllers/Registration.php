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
			$this->load->view('home/registration');

		} else {
			if(($this->input->post('username')) and ($this->input->post('password')) and ($this->input->post('email'))){
				$row = $this->Users_model->cariUser($this->input->post('username'))->num_rows();
				if($row == 1){
					//tambahin flash data "sudah ada username"
				}else{
					$this->Users_model->tambahUser();
					$this->load->view('home/index');
					// $this->load->model('kopi_model');
					// $data['coffee'] = $this->kopi_model->getKopi();
					// $this->load->view('templates/header');
					// $this->load->view('home/table');
					// $this->load->view('templates/footer');
				}
			}
		}
	}
}

?>
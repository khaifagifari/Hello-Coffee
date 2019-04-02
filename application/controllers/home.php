<?php 

class home extends CI_Controller {
	public function index(){
		$data['user'] = $this->Registrasi_model->getAllUser();
		// $this->load->view('templates/header');
		$this->load->view('home/index', $data);
		// $this->load->view('templates/footer');
	}
}


?>
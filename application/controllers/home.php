<?php 

class home extends CI_Controller {
	public function index(){
		$this->load->model('Registrasi_model');
		$data['user'] = $this->Registrasi_model->getAllUser();
		// $this->load->view('templates/header');
		$this->load->view('home/product', $data);
		// $this->load->view('templates/footer');
	}
}


?>
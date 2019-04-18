<?php 
class Akun extends CI_Controller{
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('home/akun');
		$this->load->view('templates/footer');
	}
}


 ?>
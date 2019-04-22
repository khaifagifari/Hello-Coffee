<?php 

class FAQ extends CI_Controller{
	public function index(){


		$this->load->view('templates/header');
		$this->load->view('home/faq');
		$this->load->view('templates/footer');

	}
	
}
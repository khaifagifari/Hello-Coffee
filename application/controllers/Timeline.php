<?php 

class Timeline extends CI_Controller{
	public function index(){


		$this->load->view('templates/header');
		$this->load->view('home/table');
		$this->load->view('templates/footer');

	}
}
?>

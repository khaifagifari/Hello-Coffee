<?php 

class Team extends CI_Controller{
	public function index(){


		$this->load->view('templates/header');
		$this->load->view('home/team');
		$this->load->view('templates/footer');

	}
}
<?php 

class Team extends CI_Controller{
	public function index(){
		if($_SESSION['id_toko']!=0){
			$this->load->view('templates/header_toko');
		}else{
			$this->load->view('templates/header');
		}
		$this->load->view('home/team');
		$this->load->view('templates/footer');
	}
}
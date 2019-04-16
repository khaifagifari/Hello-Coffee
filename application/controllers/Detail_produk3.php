<?php 

class Detail_produk3 extends CI_Controller{
	public function index(){


		$this->load->view('templates/header');
		$this->load->view('home/detail_produk2');
		$this->load->view('templates/footer');

	}
}
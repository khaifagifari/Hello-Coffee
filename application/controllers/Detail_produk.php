<?php 

class Detail_produk extends CI_Controller{
	public function index(){


		$this->load->view('templates/header');
		$this->load->view('home/detail_produk');
		$this->load->view('templates/footer');

	}
}
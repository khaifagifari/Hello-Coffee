<?php 

class shopping extends CI_Controller{
	public function keranjang(){


		$this->load->view('templates/header');
		$this->load->view('home/keranjangbelanja');
		$this->load->view('templates/footer');

	}
	public function checkout(){


		$this->load->view('templates/header');
		$this->load->view('home/checkout');
		$this->load->view('templates/footer');

	}
}
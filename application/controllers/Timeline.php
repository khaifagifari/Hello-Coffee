<?php 

class Timeline extends CI_Controller{
	public function index(){


		$this->load->view('templates/header');
		$this->load->view('home/table');

		$this->load->view('templates/footer');

	}

	public function tampilproduk(){


		$this->load->view('templates/header');

		$this->load->view('home/tampilproduk');	
		$this->load->view('templates/footer');

	}
	public function checkout(){


		$this->load->view('templates/header');

		$this->load->view('home/checkout');	
		$this->load->view('templates/footer');

	}
}
?>

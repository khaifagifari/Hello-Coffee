<?php 

class Detail_produk extends CI_Controller{
	public function index(){
		
	}

	public function detail($id_kopi){
		
		$this->load->model('kopi_model');
		$data['coffee'] = $this->kopi_model->getKopiById($id_kopi);
		$this->load->view('templates/header');
		$this->load->view('home/detail_produk', $data);
		$this->load->view('templates/footer');
	}
}
<?php 

class detail_toko extends CI_Controller{
	public function index(){
		
	}

	public function detail($id_toko){
		$this->load->model('toko_model');
		$data['daftar_toko'] = $this->toko_model->getTokoById($id_toko)->result_array();
		$this->load->view('templates/header');
		$this->load->view('produk_toko/detail_toko', $data);
		$this->load->view('templates/footer');
	}


	
}
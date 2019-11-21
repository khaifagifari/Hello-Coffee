<?php 

class Detail_produk extends CI_Controller{
	public function index(){
		
	}

	public function detail($id_menu){
		
		$this->load->model('kopi_model');

		$data['coffee'] = $this->kopi_model->getKopiById($id_menu)->result_array();
		$_SESSION['id_menu'] = $id_menu;
		$this->load->model('komentar_model');
		$data['komentar'] = $this->komentar_model->getKomentarById($id_menu);
		$this->load->view('templates/header');
		$this->load->view('produk_toko/detail_produk', $data);
		$this->load->view('templates/footer');
	}
	
}
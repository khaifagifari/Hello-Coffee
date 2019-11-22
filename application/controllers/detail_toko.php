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

	public function transaksiToko($id_toko){
		$this->load->model('toko_model');
		$data['transaksi'] = $this->toko_model->getDaftarTransaksi($id_toko);
		$this->load->view('templates/header_toko');
		$this->load->view('produk_toko/daftar_transaksi',$data);
		$this->load->view('templates/footer');
	}

	public function terimaTransaksi($id_toko,$id_transaksi){
		$this->load->model('transaksi_model');
		$data = [
			"status_transaksi" => "Sukses",
		];
		$data['transaksi'] = $this->transaksi_model->updateTransaksi($id_transaksi,$data);
		redirect('detail_toko/transaksiToko/'.$_SESSION['id_toko']);
	}
	public function tolakTransaksi($id_toko,$id_transaksi){
		$this->load->model('transaksi_model');
		$data = [
			"status_transaksi" => "Gagal",
		];
		$data['transaksi'] = $this->transaksi_model->updateTransaksi($id_transaksi,$data);
		redirect('detail_toko/transaksiToko/'.$_SESSION['id_toko']);
	}
}
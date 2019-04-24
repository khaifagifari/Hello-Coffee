<?php 

class shopping extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('keranjang_model');
		$this->load->model('kopi_model');
	}

	public function keranjang($id_user){
		$data = $this->keranjang_model->getItemByIdUser($id_user)->result_array();
		$var['keranjang'] = array();
		foreach($data as $keranjang){
			$temp = $this->kopi_model->getKopiById($keranjang['id_menu'])->result_array();
			
			$temp[0]['qty'] = $keranjang['qty'];
			array_push($var['keranjang'], $temp[0]);
		}

		$this->load->view('templates/header');
		$this->load->view('home/keranjangbelanja',$var);
		$this->load->view('templates/footer');

	}
	public function tambahKeranjang($id_user,$id_menu){
		$data = [
			"qty" => $this->input->post('jumlah',true),
			"id_menu" => $id_menu,
			"id_user" => $id_user,
		];
		$this->keranjang_model->tambahKeranjang($data);
		redirect('shopping/keranjang/'.$id_user);
	}
	
	public function hapusKeranjang($id_user)
	{
		$this->keranjang_model->deleteKeranjang($id_user);
		$data['keranjang']= $this->keranjang_model->deleteKeranjang($id_user);
	}
	public function checkout(){
		$data = $this->keranjang_model->getItemByIdUser($_SESSION['id_user'])->result_array();
		$var['keranjang'] = array();
		foreach($data as $keranjang){
			$temp = $this->kopi_model->getKopiById($keranjang['id_menu'])->result_array();
			$temp[0]['qty'] = $keranjang['qty'];
			array_push($var['keranjang'], $temp[0]);
		}

		$this->load->view('templates/header');
		$this->load->view('home/checkout',$var);
		$this->load->view('templates/footer');

	}

}
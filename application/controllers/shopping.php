<?php 

class shopping extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('keranjang_model');
		$this->load->model('kopi_model');		
		$this->load->library('form_validation');
	}

	public function keranjang($id_user){
		$data = $this->keranjang_model->getItemByIdUser($id_user)->result_array();
		$var['keranjang'] = array();
		foreach($data as $keranjang){
			$temp = $this->kopi_model->getKopiById($keranjang['id_menu'])->result_array();
			
			$temp[0]['qty'] = $keranjang['qty'];
			array_push($var['keranjang'], $temp[0]);
		}/*
		$var['keranjang_baru']=$this->keranjang_model->getItemById($id_keranjang);*/

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
	
	public function hapusKeranjang($id_keranjang)
	{
		$this->keranjang_model->deleteKeranjang($id_keranjang);
		$data['keranjang']= $this->keranjang_model->deleteKeranjang($id_keranjang);
		$this->session->set_flashdata('flash','delete success'); 
		redirect('shopping/keranjang');
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
	public function proses_order()
	{

		$this->load->view('templates/header');
		$this->load->view('home/selesai');		
		$this->load->view('templates/footer');
		
	}
	public function keranjang1(){
			$this->load->view('templates/header');
		$this->load->view('home/keranjang');
		$this->load->view('templates/footer');
	}
	public function hapusAll($idUser)
	{	
		$this->keranjang_model->hapusAll($idUser);
		redirect('shopping/keranjang1');
	}

}
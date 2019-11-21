<?php 

class shopping extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('keranjang_model');
		$this->load->model('transaksi_model');
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
		$this->load->view('keranjang/keranjangbelanja',$var);
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

	public function checkoutNow($id_user,$id_menu){
		$var['keranjang'] = array();
		$temp = $this->kopi_model->getKopiById($id_menu)->result_array();
		$temp[0]['qty'] =  $_POST['jumlah'];
		$temp[0]['id_menu'] = $id_menu;
		$temp[0]['id_user'] = $id_user;
		array_push($var['keranjang'], $temp[0]);
		$this->load->view('templates/header');
		$this->load->view('keranjang/checkout',$var);
		$this->load->view('templates/footer');

	}

	public function checkout($id_user){
		$data = $this->keranjang_model->getItemByIdUser($id_user)->result_array();
		$var['keranjang'] = array();
		foreach($data as $keranjang){
			$temp = $this->kopi_model->getKopiById($keranjang['id_menu'])->result_array();
			
			$temp[0]['qty'] = $keranjang['qty'];
			array_push($var['keranjang'], $temp[0]);
		}
		$this->load->view('templates/header');
		$this->load->view('keranjang/checkout',$var);
		$this->load->view('templates/footer');

	}
	public function proses_order($id_user)
	{	
		$this->form_validation->set_rules('fname', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('zip', 'Kode Pos', 'required');
		$this->form_validation->set_rules('state', 'Jalan', 'required');
		if ($this->form_validation->run() == FALSE){
			$data = $this->keranjang_model->getItemByIdUser($id_user)->result_array();
			$var['keranjang'] = array();
			foreach($data as $keranjang){
				$temp = $this->kopi_model->getKopiById($keranjang['id_menu'])->result_array();
				
				$temp[0]['qty'] = $keranjang['qty'];
				array_push($var['keranjang'], $temp[0]);
			}
			$this->load->view('templates/header');
			$this->load->view('keranjang/checkout',$var);
			$this->load->view('templates/footer');
		}else{
			$data = [
				"full_name" => $this->input->post('fname', true),
				"email" => $this->input->post('email', true),
				"address" => $this->input->post('address', true),
				"city" => $this->input->post('city', true),
				"zip" => $this->input->post('zip',true),
				"state" => $this->input->post('state',true),
			];
			$id_detail_transaksi = $this->transaksi_model->tambahDetailTransaksi($data);

			$user = $this->keranjang_model->getItemByIdUser($id_user)->result_array();
			foreach ($user as $data_user){
				$data = [
					"id_detail_transaksi" => $id_detail_transaksi,
					"tanggal_transaksi" => date('Y-m-d'),
					"qty" => $data_user['qty'],
					"id_user" => $data_user['id_user'],
					"id_menu" => $data_user['id_menu'],
				];
				$this->transaksi_model->tambahTransaksi($data);
			}

			$this->keranjang_model->hapusAll($id_user);

			$this->load->view('templates/header');
			$this->load->view('keranjang/selesai');		
			$this->load->view('templates/footer');
		}
	}
	
	public function keranjang1(){
			$this->load->view('templates/header');
		$this->load->view('keranjang/keranjang');
		$this->load->view('templates/footer');
	}
	public function hapusAll($idUser)
	{	
		$this->keranjang_model->hapusAll($idUser);
		redirect('shopping/keranjang1');
	}

}
<?php

class komentar extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('komentar_model');
		$this->load->model('Users_model');
		$this->load->library('form_validation');
	}

	public function tambahKomentar($id_menu){
		$this->form_validation->set_rules('nama_komentar',"Nama",'required');
		$this->form_validation->set_rules('isi_komentar',"Komentar",'required');
		$user = $this->Users_model->getUserById($_SESSION['id_user']);
		$data = [
			"nama_komentar" =>$user[0]['nama'],
			"isi_komentar" => $this->input->post('isi_komentar'),
			"id_user" => $_SESSION['id_user'],
			"id_menu" => $id_menu
		];

		$this->komentar_model->tambahkomentar($data);

		redirect('Detail_produk/detail/'.$id_menu);
		}

	public function daftarKomentar($id_menu){
		$data['komentar'] = $this->komentar_model->getKomentarById($id_menu);
		$this->load->view('home/detail_produk', $data);
	}	

	public function hapusKomentar($id,$id_menu){
		$this->komentar_model->deleteKomentar($id);
		redirect('Detail_produk/detail/'.$id_menu);
	}


	public function editKomentar($id_menu){
		$komentar['komentar'] = $this->komentar_model->getKomentarById($id_menu);
		$this->form_validation->set_rules('nama_komentar',"Nama",'required');
		$this->form_validation->set_rules('isi_komentar',"Komentar",'required');


		$data = [
				"nama_komentar" => $this->input->post('nama_komentar'),
				"isi_komentar" => $this->input->post('isi_komentar'),
			];

			$this->komentar_model->editKomentar($id_menu,$data);

			redirect('timeline/toko');
		}
	}
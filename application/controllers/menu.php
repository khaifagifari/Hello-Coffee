<?php 

class menu extends CI_Controller(){
	public function hapusMenu($id_menu){
		$this->load->model('kopi_model');
		$this->kopi_model->delete_menu($id_menu);

		redirect('timeline/toko');
	}

	public function tambahMenu(){
		$this->form_validation->set_rules('nama_menu',"Nama Menu",'required');
		$this->form_validation->set_rules('harga',"Harga",'required');
		$this->form_validation->set_rules('deskripsi',"Deskripsi",'required');
		$this->form_validation->set_rules('jenis',"Jenis",'required');
		$this->form_validation->set_rules('foto',"Foto",'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header_toko');
			// $this->load->view('home/tambah_menu'); untuk load view tambah menu
			$this->load->view('templates/footer');
		}else{
			$data = [
				"nama_menu" => $this->input->post('nama_menu'),
				"harga" => $this->input->post('harga'),
				"deskripsi" => $this->input->post('deskripsi'),
				"jenis" => $this->input->post('jenis'),
				"foto" => $this->input->post('foto'),
				"id_toko" => $_SESSION['id_toko'],
			];

			$this->load->model('menu_model');
			$this->menu_model->tambahMenu($data);

			redirect('timeline/toko');
		}
	}

	public function editMenu($id_menu){
		$this->form_validation->set_rules('nama_menu',"Nama Menu",'required');
		$this->form_validation->set_rules('harga',"Harga",'required');
		$this->form_validation->set_rules('deskripsi',"Deskripsi",'required');
		$this->form_validation->set_rules('jenis',"Jenis",'required');
		$this->form_validation->set_rules('foto',"Foto",'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header_toko');
			// $this->load->view('home/edit_menu'); untuk load view edit menu
			$this->load->view('templates/footer');
		}else{
			$data = [
				"nama_menu" => $this->input->post('nama_menu'),
				"harga" => $this->input->post('harga'),
				"deskripsi" => $this->input->post('deskripsi'),
				"jenis" => $this->input->post('jenis'),
				"foto" => $this->input->post('foto'),
			];

			$this->load->model('menu_model');
			$this->menu_model->editMenu($id_menu,$data);

			redirect('timeline/toko');
		}
	}
}
?>
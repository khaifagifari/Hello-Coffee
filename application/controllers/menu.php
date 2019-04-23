<?php 

class menu extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('kopi_model');

		$this->load->library('form_validation');
	}

	public function hapusMenu($id_menu){
		$this->kopi_model->deleteMenu($id_menu);

		redirect('timeline/toko');
	}

	public function tambahMenu(){
		$this->form_validation->set_rules('nama_menu',"Nama Menu",'required');
		$this->form_validation->set_rules('harga',"Harga",'required');
		$this->form_validation->set_rules('deskripsi',"Deskripsi",'required');
		$this->form_validation->set_rules('jenis',"Jenis",'required');
		$this->form_validation->set_message('nama_menu', 'You must select a business');
		// $this->form_validation->set_rules('foto',"Foto",'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header_toko');
			$this->load->view('home/tambah_menu');
			$this->load->view('templates/footer');
		}else{
			$data = [
				"nama_menu" => $this->input->post('nama_menu'),
				"harga" => $this->input->post('harga'),
				"deskripsi" => $this->input->post('deskripsi'),
				"jenis" => $this->input->post('jenis'),
				// "foto" => $this->input->post('Foto'),
				"id_toko" => $_SESSION['id_toko'],
			];

			$this->kopi_model->tambahMenu($data);

			redirect('timeline/toko');
		}
	}

	public function editMenu($id_menu){
		$menu['menu'] = $this->kopi_model->getKopiById($id_menu);
		$this->form_validation->set_rules('nama_menu',"Nama Menu",'required');
		$this->form_validation->set_rules('harga',"Harga",'required');
		$this->form_validation->set_rules('deskripsi',"Deskripsi",'required');
		$this->form_validation->set_rules('jenis',"Jenis",'required');
		// $this->form_validation->set_rules('foto',"Foto",'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header_toko');
			$this->load->view('home/edit_menu',$menu);
			$this->load->view('templates/footer');
		}else{
			$data = [
				"nama_menu" => $this->input->post('nama_menu'),
				"harga" => $this->input->post('harga'),
				"deskripsi" => $this->input->post('deskripsi'),
				"jenis" => $this->input->post('jenis'),
				// "foto" => $this->input->post('foto'),
			];

			$this->kopi_model->editMenu($id_menu,$data);

			redirect('timeline/toko');
		}
	}

	public function daftarMenu(){
		$data['menu'] = $this->kopi_model->getKopi();
		$data['label'] = "Daftar Menu";
		$this->load->view('templates/header');
		$this->load->view('home/menu', $data);
		$this->load->view('templates/footer');
	}


	public function uploadFoto(){
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 30000;
        $config['max_width']            = 4096;
        $config['max_height']           = 4096;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/header');
            $this->load->view('home/upload_foto_menu', $error);
            $this->load->view('templates/footer');
        }
        else{
           	$data = array('upload_data' => $this->upload->data());
           	$i = 0;
           	foreach ($data['upload_data'] as $key => $value) {
           		if($i == 0){
           			echo $value;
           			break;
           		}
           	}
        }
	}
}
?>
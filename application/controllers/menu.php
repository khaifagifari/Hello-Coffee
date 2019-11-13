<?php 

class menu extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('kopi_model');

		$this->load->library('form_validation');
	}

	public function hapusMenu($id_menu){
		$menu['menu'] = $this->kopi_model->getKopiById($id_menu)->result_array();
		$nama = $menu['menu'][0]['nama_menu'];
		$this->kopi_model->deleteMenu($id_menu);

		$this->session->set_flashdata('menu','Menu <strong>'.$nama.'</strong> berhasil dihapus.');
		$this->load->model('kopi_model');
		$data['menu'] = $this->kopi_model->getMenuToko($_SESSION['id_toko'])->result_array();
		$this->load->view('templates/header_toko');
		$this->load->view('home/timeline_toko',$data);
		$this->load->view('templates/footer');
		redirect('timeline/toko');
	}

	public function tambahMenu(){
		$this->form_validation->set_rules('nama_menu',"Nama Menu",'required');
		$this->form_validation->set_rules('harga',"Harga",'required');
		$this->form_validation->set_rules('deskripsi',"Deskripsi",'required');
		$this->form_validation->set_rules('jenis',"Jenis",'required');
		$this->form_validation->set_message('nama_menu', 'You must select a menu');
		// $this->form_validation->set_rules('foto',"Foto",'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header_toko');
			$this->load->view('home/tambah_menu');
			$this->load->view('templates/footer');
		}else{
			$_SESSION['nama_menu'] = $this->input->post('nama_menu');
			$_SESSION['harga'] = $this->input->post('harga');
			$_SESSION['deskripsi'] = $this->input->post('deskripsi');
			$_SESSION['jenis'] =  $this->input->post('jenis');
			redirect('menu/uploadFoto/');
		}
	}

	public function editMenu($id_menu){
		$menu['menu'] = $this->kopi_model->getKopiById($id_menu)->result_array();
		$this->form_validation->set_rules('nama_menu',"Nama Menu",'required');
		$this->form_validation->set_rules('harga',"Harga",'required');
		$this->form_validation->set_rules('deskripsi',"Deskripsi",'required');
		$this->form_validation->set_rules('jenis',"Jenis",'required');
		// $this->form_validation->set_rules('foto',"Foto",'required');
		$_SESSION['id_menu'] = $id_menu;
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

			$this->session->set_flashdata('menu','Menu <strong>'.$this->input->post('nama_menu').'</strong> berhasil diubah.');
			$this->load->model('kopi_model');
			$data['menu'] = $this->kopi_model->getMenuToko($_SESSION['id_toko'])->result_array();
			$this->load->view('templates/header_toko');
			$this->load->view('home/timeline_toko',$data);
			$this->load->view('templates/footer');
			redirect('timeline/toko');
		}
	}

	public function daftarMenu(){
		$data['menu'] = $this->kopi_model->getKopi();
		$data['label'] = "Daftar Menu";
		$this->load->view('templates/header_toko');
		$this->load->view('home/menu', $data);
		$this->load->view('templates/footer');
	}

	public function uploadMenu(){
		$data = [
			"foto" => "kopi.png",
			"nama_menu" => $_SESSION['nama_menu'],
			"harga" => $_SESSION['harga'],
			"deskripsi" => $_SESSION['deskripsi'],
			"jenis" => $_SESSION['jenis'],
			"id_toko" => $_SESSION['id_toko'],
		];

		$this->kopi_model->tambahMenu($data);
           	
       	$this->session->set_flashdata('menu','Menu <strong>'.$_SESSION['nama_menu'].'</strong> berhasil ditambahkan.');
		$this->load->model('kopi_model');
		$data['menu'] = $this->kopi_model->getMenuToko($_SESSION['id_toko'])->result_array();
		$this->load->view('templates/header_toko');
		$this->load->view('home/timeline_toko',$data);
		$this->load->view('templates/footer');
		redirect('timeline/toko');
	}

	public function uploadFoto(){
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 30000;
        $config['max_width']            = 4096;
        $config['max_height']           = 4096;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
            $data = array('error' => $this->upload->display_errors());
            $this->load->view('templates/header_toko');
            $this->load->view('home/upload_foto_menu', $data);
            $this->load->view('templates/footer');
        }
        else{
           	$img = array('upload_data' => $this->upload->data());
           	$i = 0;
           	foreach ($img['upload_data'] as $key => $value) {
           		if($i == 0){
           			$data = [
           				"foto" => $value,
           				"nama_menu" => $_SESSION['nama_menu'],
           				"harga" => $_SESSION['harga'],
           				"deskripsi" => $_SESSION['deskripsi'],
           				"jenis" => $_SESSION['jenis'],
           				"id_toko" => $_SESSION['id_toko'],
           			];
           			break;
           		}
           	}
           	$this->kopi_model->tambahMenu($data);
           	
           	$this->session->set_flashdata('menu','Menu <strong>'.$_SESSION['nama_menu'].'</strong> berhasil ditambahkan.');
			$this->load->model('kopi_model');
			$data['menu'] = $this->kopi_model->getMenuToko($_SESSION['id_toko'])->result_array();
			$this->load->view('templates/header_toko');
			$this->load->view('home/timeline_toko',$data);
			$this->load->view('templates/footer');
			redirect('timeline/toko');
        }
	}

	public function editFoto($id_menu){
		$config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 30000;
        $config['max_width']            = 4096;
        $config['max_height']           = 4096;

        $_SESSION['id_menu'] = $id_menu;
      	$temp = $this->kopi_model->getKopiById($id_menu)->result_array();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')){
            $data = array('error' => $this->upload->display_errors(), 'menu' => $temp);
            $this->load->view('templates/header_toko');
            $this->load->view('home/edit_foto_menu', $data);
            $this->load->view('templates/footer');
        }
        else{
           	$img = array('upload_data' => $this->upload->data());
           	$i = 0;
           	foreach ($img['upload_data'] as $key => $value) {
           		if($i == 0){
           			$data = [
           				"foto" => $value,
           			];
           			break;
           		}
           	}

			$this->kopi_model->editMenu($id_menu,$data);

			$nama = $temp[0]['nama_menu'];
			$this->session->set_flashdata('menu','Foto <strong>'.$_SESSION['nama_menu'].'</strong> berhasil diubah.');
			$this->load->model('kopi_model');
			$data['menu'] = $this->kopi_model->getMenuToko($_SESSION['id_toko'])->result_array();
			$this->load->view('templates/header_toko');
			$this->load->view('home/timeline_toko',$data);
			$this->load->view('templates/footer');
			redirect('timeline/toko');
        }
	}
}
?>	
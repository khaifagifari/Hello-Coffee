<?php 

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('komentar_model');
		$this->load->model('menu_model');
		$this->load->library('form_validation');
	}

	public function index(){

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$this->load->view('templates/header');
                $this->load->view('home/index');
        }
		else{
			if (($this->input->post('email')) and ($this->input->post('password'))){
				$row = $this->Users_model->cariDataUser($this->input->post('email'),$this->input->post('password'))->num_rows();
				if($row == 1){
					$data = $this->Users_model->cariDataUser($this->input->post('email'),$this->input->post('password'))->result_array();
					$_SESSION['username'] = $data[0]['username'];
					$_SESSION['id_user'] = $data[0]['id_user'];
					//$_SESSION['id_toko'] = $data[0]['id_toko']; untuk toko nanti
					$this->load->view('templates/header');
					$this->load->view('home/table');
				}else{
					$this->load->view('templates/header');
					$this->load->view('home/index');
				}
			}
		}
	}

	public function hapus($username){
		$this->Users_model->deleteUser($username);
		// $this->load->view('templates/header');
		 $message = "akun berhasil dihapus";
		echo "<script type='text/javascript'>alert('$message');</script>";
		redirect('/home', 'refresh');
	}
	
	public function indexToko(){
		$this->load->view('home/homeToko');
	}

	public function editUser($username){
		$data = [
			"password" => $this->input->post('password'),
			"email" => $this->input->post('email'),
		];
		$this->Users_model($username,$data);
		//redirect('/index.php/web/mahasiswa', 'refresh');
	}

	//Komentar dan bintang
	public function tambahKomentar($id){
		$data = [
			"komentar" => $this->input->post('komentar'),
			"bintang" => $this->input->post('bintang'),
			"id_user" => $_SESSION['id_user'],
		];
		$this->komentar_model->tambahKomentar($data);
		//redirect('/index.php/web/mahasiswa', 'refresh');
	}

	public function getAllKomentar(){
		$this->komentar_model->getAllKomentar();
	}

	public function editKomentar($id){
		$data = [
			"komentar" => $this->input->post('komentar'),
			"bintang" => $this->input->post('bintang'),
			"id_user" => $_SESSION['id_user'],
		];
		$this->komentar_model->editKomentar($id,$data);
		//redirect('/index.php/web/mahasiswa', 'refresh');
	}

	public function hapusKomentar($id){
		$this->komentar_model->hapusKomentar($id);
		//redirect('/index.php/web/mahasiswa', 'refresh');
	}

	//Daftar menu
	public function tambahMenu($id){
		$data = [
			"nama_menu" => $this->input->post('nama_menu'),
			"harga" => $this->input->post('harga'),
			"deskripsi" => $this->input->post('deskripsi'),
			"id_toko" => $_SESSION['id_toko'],
		];
		$this->menu_model->tambahMenu($data);
		//redirect('/index.php/web/mahasiswa', 'refresh');
	}

	public function getMenuToko($id){
		$data_menu = $this->M_web->getMenuToko($id);
		$this->load->view('home/table',['data'=>$data_menu]);

		$this->load->model('Registrasi_model');
		$data['user'] = $this->Registrasi_model->getAllUser();
		// $this->load->view('templates/header');
		$this->load->view('home/product', $data);
		// $this->load->view('templates/footer');

	}

	public function editMenu($id){
		$data = [
			"nama_menu" => $this->input->post('nama_menu'),
			"harga" => $this->input->post('harga'),
			"deskripsi" => $this->input->post('deskripsi'),
			"id_toko" => $_SESSION['id_toko'],
		];
		$this->menu_model->editMenu($id,$data);
		//redirect('/index.php/web/mahasiswa', 'refresh');
	}

	public function deleteMenu($id){
		$this->komentar_model->deleteMenu($id);
		//redirect('/index.php/web/mahasiswa', 'refresh');
	}
}
?>
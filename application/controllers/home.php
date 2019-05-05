<?php 

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('komentar_model');
		$this->load->model('kopi_model');
		$this->load->model('toko_model');

		$this->load->library('form_validation');
		$this->load->helper('cookie');
	}

	public function index(){
		$cookie = get_cookie('remember_me');
		$data['data']['check'] = FALSE;
		if($cookie){
			parse_str($cookie,$cookies);
			$data['data']['username'] = $cookies['username'];
			$data['data']['password'] = $cookies['password'];
			$data['data']['check'] = TRUE;
		}
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('home/index',$data);
		}else{
			if($this->input->post('remember') == TRUE){
				$cookie = array(
	                'name'   => 'remember_me',
	                'expire' => '3000',
	                'value'  => 'username='.$this->input->post('email').'&password='.$this->input->post('password')
                );
				set_cookie($cookie);
			}else{
				delete_cookie('remember_me');
			}
			$row = $this->Users_model->cariDataUser($this->input->post('email'),md5($this->input->post('password')))->num_rows();
			if($row > 0){
				$data = $this->Users_model->cariDataUser($this->input->post('email'),md5($this->input->post('password')))->result_array();
				$_SESSION['username'] = $data[0]['username'];
				$_SESSION['id_user'] = $data[0]['id_user'];
				$_SESSION['id_toko'] = $data[0]['id_toko'];
				$_SESSION['gender'] = $data[0]['gender'];
				$_SESSION['email'] = $data[0]['email'];
				$_SESSION['nama'] = $data[0]['nama'];

				if($data[0]['id_toko'] != 0){
					$data['menu'] = $this->kopi_model->getMenuToko($_SESSION['id_toko'])->result_array(	);
					$this->load->view('templates/header_toko');
					$this->load->view('home/timeline_toko',$data);
					$this->load->view('templates/footer');
				}else{
					$data['toko'] = $this->toko_model->getToko();

					$this->load->view('templates/header');
					$this->load->view('home/table',$data);
					$this->load->view('templates/footer');
				}					
			}else{
				$this->session->set_flashdata('login','<strong>Username atau password</strong> yang anda masukan salah.');
				$data['data']['check'] = FALSE;
				$this->load->view('home/index',$data);
			}
		}
	}

	public function hapus($username){
		$this->Users_model->deleteUser($username);

		// $this->load->view('templates/header');
		$message = "akun berhasil dihapus";
		$data['data']['check'] = FALSE;
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
		

		// $this->load->view('templates/header');
		$message = "akun berhasil dihapus";
		echo "<script type='text/javascript'>alert('$message');</script>";
		redirect('home');
		// $this->index();
	}

	public function getKopi(){
		$data['kopi'] = $this->kopi_model->getKopi();
		$this->load->view('home/table', $data);
	}

	public function logout(){
		session_start();
		session_destroy();
		redirect('home');
	}
}
?>
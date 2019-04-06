<?php 

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('home/index');
        }
		else{
			if (($this->input->post('email')) and ($this->input->post('password'))){
				$row = $this->Users_model->cariDataUser($this->input->post('email'),$this->input->post('password'))->num_rows();
				if($row == 1){
					$_SESSION['username'] = $this->input->post('email');
					$this->load->view('home/table');
				}else{
					$this->load->view('home/index');
				}
			}
		}
	}

	public function hapus($username){
		$this->Users_model->deleteUser($username);
		$this->index();
	}
}
?>
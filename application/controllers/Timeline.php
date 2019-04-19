<?php 

class Timeline extends CI_Controller{
	public function index(){
		$this->load->model('kopi_model');
		$data['coffee'] = $this->kopi_model->getKopi();
		$this->load->view('templates/header');
		$this->load->view('home/table',$data);
		$this->load->view('templates/footer');
	}

	public function toko(){
		$this->load->model('kopi_model');
		$data['menu'] = $this->kopi_model->getMenuToko($_SESSION['id_toko'])->result_array();
		$this->load->view('templates/header');
		$this->load->view('home/timeline_toko',$data);
		$this->load->view('templates/footer');
	}
}
?>

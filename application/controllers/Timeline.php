<?php 

class Timeline extends CI_Controller{
	public function index(){

		$this->load->model('kopi_model');
		$data['coffee'] = $this->kopi_model->getKopi();
		$this->load->view('templates/header');
		$this->load->view('home/table',$data);
		$this->load->view('templates/footer');

	}
}
?>

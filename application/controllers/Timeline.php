<?php 

class Timeline extends CI_Controller{
	public function index(){
		$data['judul'] = 'Hello Coffee';
		$this->load->view('home/table', $data);	
	}
}
?>

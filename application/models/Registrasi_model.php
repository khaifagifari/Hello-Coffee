<?php 

class Registrasi_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getAllUser(){
		return $this->db->get('user')->result_array();
	}

	public function tambahUser(){

		$data = array(
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true),
			"gender" => $this->input->post('gender', true),
		);

		$this->db->insert('user', $data);

	}
}

 ?>
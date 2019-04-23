<?php 

class Users_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getAllUser(){
		return $this->db->get('user')->result_array();
	}
	public function getUserById($id_user){
		$this->db->from('user');
		$this->db->where('id_user',$id_user);
        return $this->db->get()->result_array();
        //return as object array
	}

	public function tambahUser(){
		$gender = $this->input->post('gender', true);
		$data = [
			"username" => $this->input->post('username', true),
			"password" => md5($this->input->post('password', true)),
			"email" => $this->input->post('email', true),
			"gender" => $gender,
			"nama" => $this->input->post('nama',true),
		];
		return $this->db->insert('user', $data);
	}

	public function deleteUser($id_user){
		$this->db->where('id_user',$id_user);
		return $this->db->delete('user');
	}

	public function cariUser($username){
		$this->db->from('user');
		$this->db->where('username',$username);
		return $this->db->get();
	}

	public function cariDataUser($username,$password){
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->or_where('email',$username);
		return $this->db->get();
	}

	public function editUser($id_user,$data){
		$this->db->where('id_user',$id_user);
		return $this->db->update('user',$data);
	}
}
?>



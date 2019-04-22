<?php 

class Users_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getAllUser(){
		return $this->db->get('user')->result_array();
	}

	public function tambahUser(){
		$gender = $this->input->post('gender', true);
		if($gender = 'Laki-laki'){
			$gender = 'L';
		}else{
			$gender = 'P';
		}
		$data = [
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"email" => $this->input->post('email', true),
			"gender" => $gender,
		];
		return $this->db->insert('user', $data);
	}

	public function deleteUser($username){
		$this->db->where('username',$username);
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


	public function editUser($username,$data){
		$this->db->where('username',$username);
		return $this->db->update('user',$data);
	}
}
?>

}

 ?>


<?php 

class Registrasi_toko extends CI_Model{

	public function __construct(){
		parent::__construct();
    }
    
	function tampil_data(){
		return $this->db->get('user');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}

 ?>
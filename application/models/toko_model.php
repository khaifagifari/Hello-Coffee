<?php 

class toko_model extends CI_model{
	public function getToko(){
		$query = $this->db->get('daftar_toko');
		return $query->result_array();
	}
}
?>
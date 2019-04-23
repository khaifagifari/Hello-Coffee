<?php 

class toko_model extends CI_model{
	public function getToko(){
		$query = $this->db->get('daftar_toko');
		return $query->result_array();
	}
	public function getTokoById($id_toko){
		$this->db->from('daftar_toko');
		$this->db->where('id_toko',$id_toko);
        return $this->db->get();
        //return as object array
	}
}
?>
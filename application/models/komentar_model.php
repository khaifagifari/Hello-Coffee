<?php 

class komentar_model extends CI_Model{
	public function tambahKomentar($data){
		return $this->db->insert('komentar',$data);
	}

	public function getAllKomentar(){
		return $this->db->get('komentar');
	}


	public function editKomentar($id,$data){
		$this->db->where('id_komentar',$id);
		$this->db->update('komentar',$data);
	}

	public function deleteKomentar($id){
		$this->db->where('id_komentar',$id);
		return $this->db->delete('komentar');
	}
}
?>
<?php 

class keranjang_model extends CI_Model{

	public function getItem(){
		$query = $this->db->get('keranjang');
		return $query->result_array();
	}
	public function getItemByIdUser($id_user){
		$this->db->select('*');
		$this->db->from('keranjang');
		$this->db->where('id_user',$id_user);
		return $this->db->get();
	}

	public function getItemById($id_keranjang){
		$query = $this->db->query("SELECT * FROM menu WHERE id_keranjang='$id_keranjang'");
        return $query->result_array();
        //return as object array
	}

	public function tambahKeranjang($id_user){
		return $this->db->insert('keranjang',$id_user);

	}
	public function editKeranjang($id,$data){
		$this->db->where('id_menu',$id);
		return $this->db->update('keranjang',$data);
	}
	public function deleteKeranjang($id){
		$this->db->where('id_keranjang',$id);
		return $this->db->delete('keranjang');
	}
}
?>
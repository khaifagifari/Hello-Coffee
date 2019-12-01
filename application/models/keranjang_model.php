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
		$query = $this->db->query("SELECT * FROM keranjang WHERE id_keranjang='$id_keranjang'");
        return $query->result_array();
        
	}

	public function tambahKeranjang($data){
		return $this->db->insert('keranjang',$data);

	}
	public function editKeranjang($id,$data){
		$this->db->where('id_menu',$id);
		return $this->db->update('keranjang',$data);
	}
	public function deleteKeranjang($id_keranjang){
		$this->db->where('id_keranjang',$id);
		return $this->db->delete('keranjang');
	}
	public function tambah_pelanggan($data)
	{
		$this->db->insert('order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	public function tambahorder(){
		$data = [
			"nama" => $this->input->post('nama', true),
			
			"email" => $this->input->post('email', true),
		];
		$this->db->insert('order', $data);
	}
	public function hapusAll($id_user){
		$this->db->where('id_user',$id_user);
		return $this->db->delete('keranjang');
	}
	
}
?>
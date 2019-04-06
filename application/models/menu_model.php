<?php

class menu_model extends CI_Model{

	public function tambahMenu($data){
		return $this->db->insert('menu',$data);
	}

	public function getMenuToko($id){
		$this->db->from('menu');
		$this->db->where('id_toko',$id);
		return $this->db->get();
	}

	public function editMenu($id,$data){
		$this->db->where('id_menu',$id);
		return $this->db->update('menu',$data);
	}

	public function deleteMenu($id){
		$this->db->where('id_menu',$id);
		return $this->db->delete('menu');
	}
}
?>
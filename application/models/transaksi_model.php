<?php 

class transaksi_model extends CI_model{
	public function getTransaksi($id_user){
		$this->db->from('transaksi');
		$this->db->where('id_user',$id_user);
        return $this->db->get()->result_array();
	}

	public function tambahTransaksi($data){
		$this->db->insert('transaksi',$data);
	}

	public function tambahDetailTransaksi($data){
		$this->db->insert('detail_transaksi',$data);
		return $this->db->insert_id();
	}
	public function getTransaksiAkun($id_user){
		$this->db->from('transaksi');
		$this->db->join('menu', 'transaksi.id_menu = menu.id_menu');
		$this->db->where('id_user',$id_user);
        return $this->db->get()->result_array();
	}
	public function getTransaksiAkunToko($id_toko){
		$this->db->from('transaksi');
		$this->db->join('menu', 'transaksi.id_menu = menu.id_menu');
		$this->db->join('daftar_toko', 'daftar_toko.id_toko = menu.id_toko');
		$this->db->where('daftar_toko.id_toko',$id_toko);
        return $this->db->get()->result_array();
	}
	public function updateTransaksi($id_transaksi,$data){
		$this->db->where('id_transaksi',$id_transaksi);
		return $this->db->update('transaksi',$data);
	}
}
?>
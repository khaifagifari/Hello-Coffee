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

	public function getDaftarTransaksi($id_toko){
		$this->db->from('transaksi');
		$this->db->join('menu', 'transaksi.id_menu = menu.id_menu');
		$this->db->join('detail_transaksi', 'transaksi.id_detail_transaksi = detail_transaksi.id_detail_transaksi');
		$this->db->where('id_toko',$id_toko);
		$this->db->where('status_transaksi',"Baru");
		return $this->db->get()->result_array();
	}

}
?>
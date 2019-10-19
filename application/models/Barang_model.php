<?php 

class Barang_model extends CI_model{
	public function getAllBarang(){
		return $this->db->get('barang')->result_array();

	}

	public function tambahDataBarang(){
		$data = [
			"nama" => $this->input->post('nama', true), // true adalah parameter untuk mengamankan data dari serangan
			"harga" => $this->input->post('harga', true),
			"warna" => $this->input->post('warna', true),
			"jenis" => $this->input->post('jenis', true)
		];

		$this->db->insert('barang', $data);
	}

	public function hapusDataBarang($id){
		$this->db->where('id', $id); // where id == $id
		$this->db->delete('barang', ['id' => $id]);
	}

	public function getBarangById($id){
		return $this->db->get_where('barang', ['id' => $id])->row_array();
	}

	public function ubahDataBarang(){
		$data = [
			"nama" => $this->input->post('nama', true), // true adalah parameter untuk mengamankan data dari serangan
			"harga" => $this->input->post('harga', true),
			"warna" => $this->input->post('warna', true),
			"jenis" => $this->input->post('jenis', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('barang', $data);
	}

	public function cariDataBarang(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('harga', $keyword);
		$this->db->or_like('warna', $keyword);
		$this->db->or_like('jenis', $keyword);
		return $this->db->get('barang')->result_array();
	}


}
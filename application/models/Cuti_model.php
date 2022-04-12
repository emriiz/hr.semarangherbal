<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}
	public function listing() {
		$this->db->select('tbl_cuti.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_cuti');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_cuti.id_karyawan');
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result();
	}
	public function pilih($id_karyawan){
		$this->db->select('tbl_cuti.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_cuti');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_cuti.id_karyawan');
		$this->db->where('tbl_cuti.id_karyawan', $id_karyawan);
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result();
	}
	// Tambah Data
	public function tambah($data){
		$this->db->insert('tbl_cuti', $data);
	}
	// Edit Data
	public function edit($data) {
		$this->db->where('id_cuti',$data['id_cuti']);
		$this->db->update('tbl_cuti',$data);
	}
	// Hapus Data
	public function delete($data) {
		$this->db->where('id_cuti' ,$data['id_cuti']);
		$this->db->delete('tbl_cuti',$data);
	}
	// Detail
	public function detail($id_cuti) {
		$this->db->select('*');
		$this->db->from('tbl_cuti');
		$this->db->where('id_cuti', $id_cuti);
		$this->db->order_by('id_cuti','ASC');
		$query = $this->db->get();
		return $query->row();
	}
	public function jumlahCuti($id_karyawan){
	  	$this->db->where('id_karyawan', $id_karyawan);
		$query = $this->db->get('tbl_cuti');
		return $query->num_rows();
	}

}

/* End of file Cuti_model.php */
/* Location: ./application/models/Cuti_model.php */
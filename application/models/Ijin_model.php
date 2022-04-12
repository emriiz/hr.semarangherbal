<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function listing() {
		$this->db->select('tbl_ijin.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_ijin');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_ijin.id_karyawan');
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function pilih($id_karyawan){
		$this->db->select('tbl_ijin.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_ijin');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_ijin.id_karyawan');
		$this->db->where('tbl_ijin.id_karyawan', $id_karyawan);
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	// Tambah Data
	public function tambah($data){
		$this->db->insert('tbl_ijin', $data);
	}

	// Edit Data
	public function edit($data) {
		$this->db->where('id_ijin',$data['id_ijin']);
		$this->db->update('tbl_ijin',$data);
	}

	// Hapus Data
	public function delete($data) {
		$this->db->where('id_ijin' ,$data['id_ijin']);
		$this->db->delete('tbl_ijin',$data);
	}

	// Detail
	public function detail($id_ijin) {
		$this->db->select('*');
		$this->db->from('tbl_ijin');
		$this->db->where('id_ijin', $id_ijin);
		$this->db->order_by('id_ijin','ASC');
		$query = $this->db->get();
		return $query->row();
	}

	public function jumlahIjin($id_karyawan){
	  	$this->db->where('id_karyawan', $id_karyawan);
		$query = $this->db->get('tbl_ijin');
		return $query->num_rows();

	}

}

/* End of file Ijin_model.php */
/* Location: ./application/models/Ijin_model.php */
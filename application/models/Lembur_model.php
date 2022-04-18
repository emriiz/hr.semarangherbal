<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembur_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function listing() {
		$this->db->select('tbl_lembur.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_lembur');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_lembur.id_karyawan');
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function pilih($id_karyawan){
		$this->db->select('tbl_lembur.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_lembur');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_lembur.id_karyawan');
		$this->db->where('tbl_lembur.id_karyawan', $id_karyawan);
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	// Tambah Data
	public function tambah($data){
		$this->db->insert('tbl_lembur', $data);
	}

	// Edit Data
	public function edit($data) {
		$this->db->where('id_lembur',$data['id_lembur']);
		$this->db->update('tbl_lembur',$data);
	}

	// Hapus Data
	public function delete($data) {
		$this->db->where('id_lembur' ,$data['id_lembur']);
		$this->db->delete('tbl_lembur',$data);
	}

	// Detail
	public function detail($id_lembur) {
		$this->db->select('*');
		$this->db->from('tbl_lembur');
		$this->db->where('id_lembur', $id_lembur);
		$this->db->order_by('id_lembur','ASC');
		$query = $this->db->get();
		return $query->row();
	}

	public function jumlahLembur($id_karyawan){
	  	$this->db->where('id_karyawan', $id_karyawan);
		$query = $this->db->get('tbl_lembur');
		return $query->num_rows();
	}

	public function getDataLembur($tglawal = null, $tglakhir = null)
    {
      	if($tglawal && $tglakhir){
      	$this->db->select('tbl_lembur.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_lembur');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_lembur.id_karyawan');
		$this->db->where('tanggal >', $tglawal);
    	$this->db->where('tanggal <', $tglakhir);
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result_array();
    	}
    	$this->db->select('tbl_lembur.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_lembur');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_lembur.id_karyawan');
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
}

/* End of file Lembur_model.php */
/* Location: ./application/models/Lembur_model.php */
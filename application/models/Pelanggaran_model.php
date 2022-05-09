<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggaran_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}

	public function listing() {
		$this->db->select('tbl_pelanggaran.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_pelanggaran');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_pelanggaran.id_karyawan');
		$this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function pilih($id_karyawan){
		$this->db->select('tbl_pelanggaran.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_pelanggaran');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_pelanggaran.id_karyawan');
		$this->db->where('tbl_pelanggaran.id_karyawan', $id_karyawan);
		$this->db->order_by('tgl_pelanggaran','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Tambah Data
	public function tambah($data){
		$this->db->insert('tbl_pelanggaran', $data);
	}

	// Edit Data
	public function edit($data) {
		$this->db->where('id_pelanggaran',$data['id_pelanggaran']);
		$this->db->update('tbl_pelanggaran',$data);
	}

	// Hapus Data
	public function delete($data) {
		$this->db->where('id_pelanggaran' ,$data['id_pelanggaran']);
		$this->db->delete('tbl_pelanggaran',$data);
	}

	// Detail
	public function detail($id_pelanggaran) {
		$this->db->select('*');
		$this->db->from('tbl_pelanggaran');
		$this->db->where('id_pelanggaran', $id_pelanggaran);
		$this->db->order_by('id_pelanggaran','ASC');
		$query = $this->db->get();
		return $query->row();
	}

	public function jumlahPelanggaran($id_karyawan){
	 $this->db->where('id_karyawan', $id_karyawan);
		$query = $this->db->get('tbl_pelanggaran');
		return $query->num_rows();
	}

	public function getDataPelanggaran($tglawal = null, $tglakhir = null)
    {
      	if($tglawal && $tglakhir){
      	$this->db->select('tbl_pelanggaran.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_pelanggaran');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_pelanggaran.id_karyawan');
		$this->db->where('tgl_pelanggaran >', $tglawal);
    	$this->db->where('tgl_pelanggaran <', $tglakhir);
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result_array();
    	}
    	$this->db->select('tbl_pelanggaran.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_pelanggaran');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_pelanggaran.id_karyawan');
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}

}

/* End of file Pelanggaran_model.php */
/* Location: ./application/models/Pelanggaran_model.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
	}
	public function listing() {
		$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan,
						 tbl_karyawan.tgl_join');
		$this->db->from('tbl_kontrak');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function list_karyawan() {
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		$this->db->where('status_karyawan =', 'Kontrak');
		$this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function pilih($id_karyawan){
		$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan');
		$this->db->from('tbl_kontrak');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
		$this->db->where('tbl_kontrak.id_karyawan', $id_karyawan);
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result();
	}
	// Tambah Data
	public function tambah($data){
		$this->db->insert('tbl_kontrak', $data);
	}

	// Edit Data
	public function edit($data) {
		$this->db->where('id_kontrak',$data['id_kontrak']);
		$this->db->update('tbl_kontrak',$data);
	}
	// Hapus Data
	public function delete($data) {
		$this->db->where('id_kontrak' ,$data['id_kontrak']);
		$this->db->delete('tbl_kontrak',$data);
	}
	// Detail
	public function detail($id_kontrak) {
		$this->db->select('*');
		$this->db->from('tbl_kontrak');
		$this->db->where('id_kontrak', $id_kontrak);
		$this->db->order_by('id_kontrak','ASC');
		$query = $this->db->get();
		return $query->row();
	}

	public function getDataKontrak($tglawal = null, $tglakhir = null, $kontrak = null)
    {
      	if($tglawal && $tglakhir && $kontrak == 'kt1_2'){
    			$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan,
						 tbl_karyawan.tgl_join');
			$this->db->from('tbl_kontrak');
			$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
			$this->db->where('kt1_2 >', $tglawal);
	    	$this->db->where('kt1_2 <', $tglakhir);
			$this->db->order_by('id_karyawan','ASC');
			$query = $this->db->get();
			return $query->result_array();
    		}else if($tglawal && $tglakhir && $kontrak == 'kt2_2'){
    			$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan,
						 tbl_karyawan.tgl_join');
			$this->db->from('tbl_kontrak');
			$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
			$this->db->where('kt2_2 >', $tglawal);
	    	$this->db->where('kt2_2 <', $tglakhir);
			$this->db->order_by('id_karyawan','ASC');
			$query = $this->db->get();
			return $query->result_array();
    		}
    		else if($tglawal && $tglakhir && $kontrak == 'kt3_2'){
    			$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan,
						 tbl_karyawan.tgl_join');
			$this->db->from('tbl_kontrak');
			$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
			$this->db->where('kt3_2 >', $tglawal);
	    	$this->db->where('kt3_2 <', $tglakhir);
			$this->db->order_by('id_karyawan','ASC');
			$query = $this->db->get();
			return $query->result_array();
    		}else if($tglawal && $tglakhir && $kontrak == 'kt4_2'){
    			$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan,
						 tbl_karyawan.tgl_join');
			$this->db->from('tbl_kontrak');
			$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
			$this->db->where('kt4_2 >', $tglawal);
	    	$this->db->where('kt4_2 <', $tglakhir);
			$this->db->order_by('id_karyawan','ASC');
			$query = $this->db->get();
			return $query->result_array();
    		}else if($tglawal && $tglakhir && $kontrak == 'kt5_2'){
    			$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan,
						 tbl_karyawan.tgl_join');
			$this->db->from('tbl_kontrak');
			$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
			$this->db->where('kt5_2 >', $tglawal);
	    	$this->db->where('kt5_2 <', $tglakhir);
			$this->db->order_by('id_karyawan','ASC');
			$query = $this->db->get();
			return $query->result_array();
    		}else if($tglawal && $tglakhir && $kontrak == 'kt6_2'){
    			$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan,
						 tbl_karyawan.tgl_join');
			$this->db->from('tbl_kontrak');
			$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
			$this->db->where('kt6_2 >', $tglawal);
	    	$this->db->where('kt6_2 <', $tglakhir);
			$this->db->order_by('id_karyawan','ASC');
			$query = $this->db->get();
			return $query->result_array();
    		}

    	$this->db->select('tbl_kontrak.*,
						 tbl_karyawan.nik,
						 tbl_karyawan.nama,
						 tbl_karyawan.jabatan,
						 tbl_karyawan.tgl_join');
		$this->db->from('tbl_kontrak');
		$this->db->join('tbl_karyawan','tbl_karyawan.id_karyawan = tbl_kontrak.id_karyawan');
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
}

/* End of file Lembur_model.php */
/* Location: ./application/models/Lembur_model.php */
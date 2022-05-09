<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing() {
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		$this->db->where('status_aktif = 1');
		$this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function non_aktif() {
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		$this->db->where('status_aktif = 2');
		$this->db->order_by('tgl_resign','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail
	public function detail($id_karyawan) {
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		$this->db->where('id_karyawan', $id_karyawan);
		$this->db->order_by('id_karyawan','ASC');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah Data
	public function tambah($data){
		$this->db->insert('tbl_karyawan', $data);
	}

	// Edit Data
	public function edit($data) {
		$this->db->where('id_karyawan',$data['id_karyawan']);
		$this->db->update('tbl_karyawan',$data);
	}

	// Hapus Data
	public function delete($data) {
		$this->db->where('id_karyawan' ,$data['id_karyawan']);
		$this->db->delete('tbl_karyawan',$data);
	}

	public function import_data($datakaryawan)
    {
        $jumlah = count($datakaryawan);
        if ($jumlah > 0) {
            $this->db->replace('tbl_karyawan', $datakaryawan);
        }
    }

    public function getDataKaryawan($tglawal = null, $tglakhir = null)
    {
      	if($tglawal && $tglakhir){
    		$this->db->where('tgl_join >', $tglawal);
    		$this->db->where('tgl_join <', $tglakhir);
    	}
		$this->db->order_by('id_karyawan','DESC');
    	$this->db->where('status_aktif = 1');
        return $this->db->get('tbl_karyawan')->result_array();
    }

    public function getDataKaryawanNon($tglawal = null, $tglakhir = null)
    {
      	if($tglawal && $tglakhir){
    		$this->db->where('tgl_resign >', $tglawal);
    		$this->db->where('tgl_resign <', $tglakhir);
    	}
		$this->db->order_by('id_karyawan','DESC');
    	$this->db->where('status_aktif = 2');
        return $this->db->get('tbl_karyawan')->result_array();
    }

    public function totalKaryawan()
	{   
	    $query = $this->db->get('tbl_karyawan');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function pria() {
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		$this->db->like('jekel', 'Laki-laki');
		$this->db->where('status_aktif = 1');
		$this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function wanita() {
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		$this->db->like('jekel', 'perempuan');
		$this->db->where('status_aktif = 1');
		$this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function tetap() {
		$this->db->select('*');
		$this->db->from('tbl_karyawan');
		$this->db->like('status_karyawan', 'Tetap');
		$this->db->where('status_aktif = 1');
		$this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_atsiri()
	{
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->like('departemen', 'Atsiri');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_ayak()
	{
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->like('departemen', 'Ayak');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_bio()
	{
		$unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', $unit);
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_gudang()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'Gudang');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_hrga()
	{
		$unit = array('HR','GA', 'K3');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', $unit);
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_ipal()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'IPAL');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_ipa()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'IPA');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_lp()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'LP');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_marketing()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'Marketing');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_produksi()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'Produksi');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_qa()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'QA');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_qc()
	{
		$unit = array('QC','LAB');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', $unit);
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_rnd()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'R&D');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_finance()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'Finance');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function unit_teknik()
	{
		// $unit = array('Bioetanol','Pelet');
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where_in('departemen', 'Teknik');
        $this->db->like('status_aktif', '1');
        $this->db->order_by('id_karyawan','DESC');
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Karyawan_model.php */
/* Location: ./application/models/Karyawan_model.php */
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
		$this->db->order_by('id_karyawan','ASC');
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

	// public function totalPria()
	// {   
	// 	$this->db->where('jekel = Laki-laki');
	//     $query = $this->db->get('tbl_karyawan');
	//     if($query->num_rows()>0)
	//     {
	//       return $query->num_rows();
	//     }
	//     else
	//     {
	//       return 0;
	//     }
	// }

}

/* End of file Karyawan_model.php */
/* Location: ./application/models/Karyawan_model.php */
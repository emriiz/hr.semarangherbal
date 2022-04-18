<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_model extends CI_Model {

	public function listing() {
		$this->db->select('*');
		$this->db->from('tbl_absensi');
		// $this->db->where('wh_shift !=', 'Day Off');
		$this->db->order_by('id_absen','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function import_data($dataabsensi)
    {
        $jumlah = count($dataabsensi);
        if ($jumlah > 0) {
            $this->db->replace('tbl_absensi', $dataabsensi);
        }
    }

    public function getDataAbsensi()
    {
        return $this->db->get('tbl_absensi')->result_array();
    }

}

/* End of file Absensi_model.php */
/* Location: ./application/models/Absensi_model.php */
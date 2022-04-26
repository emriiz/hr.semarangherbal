<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Karyawan_model','User_model'));
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$produksi = $this->Karyawan_model->unit_produksi();
			$data = array('title'    	=> 'Data Karyawan Unit Produksi',
						  'judul'		=> 'Produksi',
						  'produksi'   => $produksi,
						  'page' 	 	=> 'operator/unit/produksi');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
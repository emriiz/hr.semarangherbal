<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bioetanol extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Karyawan_model','User_model'));
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$bio = $this->Karyawan_model->unit_bio();
			$data = array('title'    => 'Data Karyawan Unit bio',
						  'judul'	=> 'bio',
						  'bio'   => $bio,
						  'page' 	 => 'operator/unit/bioetanol');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
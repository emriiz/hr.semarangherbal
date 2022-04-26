<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HRGA extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Karyawan_model','User_model'));
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$hrga = $this->Karyawan_model->unit_hrga();
			$data = array('title'    => 'Data Karyawan Unit HRGA-K3',
						  'judul'	=> 'HRGA-K3',
						  'hrga'   	=> $hrga,
						  'page' 	 => 'operator/unit/hrga');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_model');
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$totalKaryawan = $this->Karyawan_model->totalKaryawan();
			$data = array('totalKaryawan' => $totalKaryawan,
						  'page' => 'operator/content');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IPA extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Karyawan_model','User_model'));
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$ipa = $this->Karyawan_model->unit_ipa();
			$data = array('title'    => 'Data Karyawan Unit IPA',
						  'judul'	=> 'IPA',
						  'ipa'   	=> $ipa,
						  'page' 	 => 'operator/unit/ipa');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
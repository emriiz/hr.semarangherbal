<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->library('form_validation');
	    $this->load->model('Karyawan_model');
	    $this->load->model('Kontrak_model');
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$kontrak = $this->Kontrak_model->listing();
			$data 	= array('title' => 'Data Kontrak',
							'kontrak'	=> $kontrak);
			$data['page'] = 'operator/kontrak/list';
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('login','refresh');
		}
	}

	public function list_karyawan()
	{
		$karyawan = $this->Kontrak_model->list_karyawan();
		$data 	  = array('title' => 'Data Karyawan',
        				  'karyawan'  => $karyawan,
        				  'page'    => 'operator/kontrak/list-karyawan');
		$this->load->view('operator/template', $data);
	}

}

/* End of file Kontrak.php */
/* Location: ./application/controllers/operator/Kontrak.php */
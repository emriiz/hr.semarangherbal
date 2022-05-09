<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Kontrak_model','User_model'));
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$kontrak = $this->Kontrak_model->list_karyawan();
			$data = array('title'    => 'Data Karyawan kontrak',
						  'judul'	 => 'Kontrak',
						  'kontrak'  => $kontrak,
						  'page' 	 => 'operator/unit/kontrak');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
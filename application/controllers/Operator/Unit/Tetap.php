<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tetap extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Karyawan_model','User_model'));
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$tetap = $this->Karyawan_model->tetap();
			$data = array('title'    => 'Data Karyawan Tetap',
						  'judul'	=> 'Tetap',
						  'tetap'   => $tetap,
						  'page' 	 => 'operator/unit/tetap');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
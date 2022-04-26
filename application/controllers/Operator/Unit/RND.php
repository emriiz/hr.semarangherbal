<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RND extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Karyawan_model','User_model'));
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$rnd = $this->Karyawan_model->unit_rnd();
			$data = array('title'    => 'Data Karyawan Unit RND',
						  'judul'	=> 'RND',
						  'rnd'   	=> $rnd,
						  'page' 	 => 'operator/unit/rnd');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
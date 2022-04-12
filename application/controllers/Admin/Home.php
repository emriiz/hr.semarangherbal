<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
		$data  = array('page' => 'admin/content');
		$this->load->view('admin/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('login','refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Admin/Home.php */
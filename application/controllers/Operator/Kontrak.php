<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
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

	public function add($id_karyawan){
		$karyawan 	 = $this->Karyawan_model->detail($id_karyawan);
		$kontrak 	 = $this->Kontrak_model->pilih($id_karyawan);

		$valid = $this->form_validation;
		$valid->set_rules('kt1','Kontrak 1','required', array('required'  => 'Kontrak harus di isi' ));
		if($valid->run()== FALSE){
			
			$data = array(
				'title'   	 	=> 'Kontrak Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'kontrak'		=> $kontrak,
				'page'			=> 'operator/kontrak/tambah'
			);
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_karyawan'  	=> $id_karyawan,
						  'id_user'			=> $this->session->userdata('id_user'),
						  'kt1'				=> date('Y-m-d', strtotime($i->post('kt1'))),
						  'kt2'				=> date('Y-m-d', strtotime($i->post('kt2'))),
						  'kt1_1'			=> date('Y-m-d', strtotime($i->post('kt1_1'))),
						  'kt2_1'			=> date('Y-m-d', strtotime($i->post('kt2_1')))
					);
			$this->Kontrak_model->tambah($data);
			$this->session->set_flashdata('success', 'Data Kontrak Telah di Tambah');
			redirect(base_url('operator/kontrak'), 'refresh');
		}
	}

	public function edit($id_kontrak)
	{
		$kontrak 		= $this->Kontrak_model->detail($id_kontrak);
		$id_karyawan	= $kontrak->id_karyawan;
		$karyawan 		= $this->Karyawan_model->detail($id_karyawan);

		$valid = $this->form_validation;

		$valid->set_rules('kt2', 'Kontrak 2','required',
					array('required' => 'Masukkan Kontrak1')); 

		if($valid->run()==FALSE) {
			$data = array(
				'title'   	 	=> 'Edit Data Kontrak Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'kontrak'		=> $kontrak
			);
			$data['page'] = 'operator/kontrak/edit';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_kontrak'		=> $id_kontrak,
						  'id_karyawan'  	=> $id_karyawan,
						  'id_user'			=> $this->session->userdata('id_user'),
						  'kt1'				=> date('Y-m-d', strtotime($i->post('kt1'))),
						  'kt2'				=> date('Y-m-d', strtotime($i->post('kt2'))),
						  'kt1_1'			=> date('Y-m-d', strtotime($i->post('kt1_1'))),
						  'kt2_1'			=> date('Y-m-d', strtotime($i->post('kt2_1')))
					);
			$this->Kontrak_model->edit($data);
			$this->session->set_flashdata('success', 'Data Kontrak Telah di Edit');
			redirect(base_url('operator/kontrak'), 'refresh');
		}
	}

	public function delete($id_kontrak)
	{
		$data = array('id_kontrak'   => $id_kontrak);
		$this->Kontrak_model->delete($data);
		$this->session->set_flashdata('success', 'Data kontrak telah dihapus');
		redirect(base_url('operator/kontrak'),'refresh');
	}

}

/* End of file Kontrak.php */
/* Location: ./application/controllers/operator/Kontrak.php */
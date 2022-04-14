<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->library('form_validation');
	    $this->load->model('Cuti_model');
	    $this->load->model('Karyawan_model');
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$cuti = $this->Cuti_model->listing();
			$data = array( 'title'   	 => 'Data Cuti',
						   'cuti' 		 => $cuti);
			$data['page'] = 'operator/cuti/list';
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('login','refresh');
		}
	}

	public function list()
	{
		$karyawan = $this->Karyawan_model->listing();
		$data = array( 'title'   	 => 'Data Karyawan',
					   'karyawan'	 => $karyawan);
		$data['page'] = 'operator/cuti/list_karyawan';
		$this->load->view('operator/template', $data);
	}

	public function add($id_karyawan){
		$karyawan 	 = $this->Karyawan_model->detail($id_karyawan);
		$cuti 		 = $this->Cuti_model->pilih($id_karyawan);
		$jml		 = $this->Cuti_model->jumlahCuti($id_karyawan);

		$valid = $this->form_validation;
		$valid->set_rules('jml_hari','Jumlah Hari','required', array('required'  => 'JUmlah Hari Harus Di isi' ));
		if($valid->run()== FALSE){
			
			$data = array(
				'title'   	 	=> 'Pengajuan Cuti Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'cuti'			=> $cuti,
				'jml'			=> $jml
			);
			$data['page'] = 'operator/cuti/tambah';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_karyawan'  	=> $id_karyawan,
						  'id_user'			=> $this->session->userdata('id_user'),
						  'tgl_awal' 		=> date('Y-m-d', strtotime($i->post('tgl_awal'))),
						  'tgl_akhir' 		=> date('Y-m-d', strtotime($i->post('tgl_akhir'))),
						  'jml_hari'		=> $i->post('jml_hari'),
						  'keterangan'		=> $i->post('keterangan')  
					);
			$this->Cuti_model->tambah($data);
			$this->session->set_flashdata('success', 'Data Cuti Telah di Tambah');
			redirect(base_url('operator/cuti'), 'refresh');
		}
	}

	public function edit($id_cuti)
	{
		$cuti 			= $this->Cuti_model->detail($id_cuti);
		$id_karyawan	= $cuti->id_karyawan;
		$karyawan 		= $this->Karyawan_model->detail($id_karyawan);

		$valid = $this->form_validation;
		$valid->set_rules('jml_hari','Jumlah Hari','required', array('required'  => 'JUmlah Hari Harus Di isi' ));
		if($valid->run()== FALSE){
			
			$data = array(
				'title'   	 	=> 'Edit Pengajuan Cuti Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'cuti'			=> $cuti
			);
			$data['page'] = 'operator/cuti/edit';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_cuti'			=> $id_cuti,
						  'id_karyawan'  	=> $id_karyawan,
						  'id_user'			=> $this->session->userdata('id_user'),
						  'tgl_awal' 		=> $i->post('tgl_awal'),
						  'tgl_akhir' 		=> $i->post('tgl_akhir'),
						  'jml_hari'		=> $i->post('jml_hari'),
						  'keterangan'		=> $i->post('keterangan')
						  
					);
			$this->Cuti_model->edit($data);
			$this->session->set_flashdata('success', 'Data Cuti Telah di Edit');
			redirect(base_url('operator/cuti'), 'refresh');
		}
	}

	public function delete($id_cuti)
	{
		$data = array('id_cuti'   => $id_cuti);
		$this->Cuti_model->delete($data);
		$this->session->set_flashdata('success', 'Data Cuti telah dihapus');
		redirect(base_url('operator/cuti'),'refresh');
	}

}

/* End of file Cuti.php */
/* Location: ./application/controllers/operator/Cuti.php */
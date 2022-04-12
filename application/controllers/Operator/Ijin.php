<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijin extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->library('form_validation');
	    $this->load->model('Karyawan_model');
	    $this->load->model('Ijin_model');
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$ijin = $this->Ijin_model->listing();
			$data 	= array('title' => 'Ijin',
							'ijin'	=> $ijin);
			$data['page'] = 'operator/ijin/list';
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
		$data['page'] = 'operator/ijin/list_karyawan';
		$this->load->view('operator/template', $data);
	}

	public function add($id_karyawan){
		$karyawan 	 = $this->Karyawan_model->detail($id_karyawan);
		$ijin 	 	 = $this->Ijin_model->pilih($id_karyawan);
		$jml		 = $this->Ijin_model->jumlahIjin($id_karyawan);

		$valid = $this->form_validation;
		$valid->set_rules('jenis_ijin','Jenis_ijin','required', array('required'  => 'Jenis Ijin harus di isi' ));
		if($valid->run()== FALSE){
			
			$data = array(
				'title'   	 	=> 'Ijin Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'ijin'			=> $ijin,
				'jml'			=> $jml
			);
			$data['page'] = 'operator/ijin/tambah';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_karyawan'  	=> $id_karyawan,
						  'tgl_ijin'		=> date('d-m-y', strtotime($i->post('tgl_ijin'))),
						  'jenis_ijin'		=> $i->post('jenis_ijin'),
						  'jam_awal' 		=> date('H:i:s', strtotime($i->post('jam_awal'))),
						  'jam_akhir' 		=> date('H:i:s', strtotime($i->post('jam_akhir'))),
						  'keterangan'		=> $i->post('keterangan')
					);
			$this->Ijin_model->tambah($data);
			$this->session->set_flashdata('success', 'Data Ijin Telah di Tambah');
			redirect(base_url('operator/ijin'), 'refresh');
		}
	}

	public function edit($id_ijin)
	{
		$ijin 			= $this->Ijin_model->detail($id_ijin);
		$id_karyawan	= $ijin->id_karyawan;
		$karyawan 		= $this->Karyawan_model->detail($id_karyawan);

		$valid = $this->form_validation;

		$valid->set_rules('keterangan', 'Keterangan','required',
					array('required' => 'Masukkan Keterangan')); 

		if($valid->run()==FALSE) {
			$data = array(
				'title'   	 	=> 'Edit Data Ijin Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'ijin'			=> $ijin
			);
			$data['page'] = 'operator/ijin/edit';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_ijin'			=> $id_ijin,
						  'id_karyawan'  	=> $id_karyawan,
						  'tgl_ijin'		=> $i->post('tgl_ijin'),
						  'jenis_ijin'		=> $i->post('jenis_ijin'),
						  'jam_awal' 		=> $i->post('jam_awal'),
						  'jam_akhir' 		=> $i->post('jam_akhir'),
						  'keterangan'		=> $i->post('keterangan')
					);
			$this->Ijin_model->edit($data);
			$this->session->set_flashdata('success', 'Data Ijin Telah di Edit');
			redirect(base_url('operator/ijin'), 'refresh');
		}
	}

	public function delete($id_ijin)
	{
		$data = array('id_ijin'   => $id_ijin);
		$this->Ijin_model->delete($data);
		$this->session->set_flashdata('success', 'Data Ijin telah dihapus');
		redirect(base_url('operator/ijin'),'refresh');
	}

}

/* End of file Ijin.php */
/* Location: ./application/controllers/operator/Ijin.php */
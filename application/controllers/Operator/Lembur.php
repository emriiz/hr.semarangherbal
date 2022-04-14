<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembur extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->library('form_validation');
	    $this->load->model('Karyawan_model');
	    $this->load->model('Lembur_model');
	}

	public function index()
	{
		
		$lembur = $this->Lembur_model->listing();
		$data 	= array('title' => 'Data Lembur',
						'lembur'	=> $lembur);
		$data['page'] = 'operator/lembur/list';
		$this->load->view('operator/template', $data);
	}

	public function list()
	{
		$karyawan = $this->Karyawan_model->listing();
		$data = array( 'title'   	 => 'Data Karyawan',
					   'karyawan'	 => $karyawan);
		$data['page'] = 'operator/lembur/list_karyawan';
		$this->load->view('operator/template', $data);
	}

	public function add($id_karyawan){
		$karyawan 	 = $this->Karyawan_model->detail($id_karyawan);
		$lembur 	 = $this->Lembur_model->pilih($id_karyawan);
		$jml		 = $this->Lembur_model->jumlahLembur($id_karyawan);

		$valid = $this->form_validation;
		$valid->set_rules('waktu','Waktu','required', array('required'  => 'Waktu harus di isi' ));
		if($valid->run()== FALSE){
			
			$data = array(
				'title'   	 	=> 'Lembur Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'lembur'		=> $lembur,
				'jml'			=> $jml
			);
			$data['page'] = 'operator/lembur/tambah';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_karyawan'  	=> $id_karyawan,
						  'id_user'			=> $this->session->userdata('id_user'),
						  'waktu'			=> $i->post('waktu'),
						  'tanggal'			=> date('Y-m-d', strtotime($i->post('tanggal'))),
						  'jam_awal' 		=> date('H:i:s', strtotime($i->post('jam_awal'))),
						  'jam_akhir' 		=> date('H:i:s', strtotime($i->post('jam_akhir'))),
						  'keterangan'		=> $i->post('keterangan')
					);
			$this->Lembur_model->tambah($data);
			$this->session->set_flashdata('success', 'Data Lembur Telah di Tambah');
			redirect(base_url('operator/lembur'), 'refresh');
		}
	}

	public function edit($id_lembur)
	{
		$lembur 		= $this->Lembur_model->detail($id_lembur);
		$id_karyawan	= $lembur->id_karyawan;
		$karyawan 		= $this->Karyawan_model->detail($id_karyawan);

		$valid = $this->form_validation;

		$valid->set_rules('keterangan', 'Keterangan','required',
					array('required' => 'Masukkan Keterangan')); 

		if($valid->run()==FALSE) {
			$data = array(
				'title'   	 	=> 'Edit Data Lembur Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'lembur'		=> $lembur
			);
			$data['page'] = 'operator/lembur/edit';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_lembur'		=> $id_lembur,
						  'id_karyawan'  	=> $id_karyawan,
						  'id_user'			=> $this->session->userdata('id_user'),
						  'tanggal'			=> $i->post('tanggal'),
						  'waktu'			=> $i->post('waktu'),
						  'jam_awal' 		=> $i->post('jam_awal'),
						  'jam_akhir' 		=> $i->post('jam_akhir'),
						  'keterangan'		=> $i->post('keterangan')
					);
			$this->Lembur_model->edit($data);
			$this->session->set_flashdata('success', 'Data Lembur Telah di Edit');
			redirect(base_url('operator/lembur'), 'refresh');
		}
	}

	public function delete($id_lembur)
	{
		$data = array('id_lembur'   => $id_lembur);
		$this->Lembur_model->delete($data);
		$this->session->set_flashdata('success', 'Data lembur telah dihapus');
		redirect(base_url('operator/lembur'),'refresh');
	}


}

/* End of file Lembur.php */
/* Location: ./application/controllers/operator/Lembur.php */
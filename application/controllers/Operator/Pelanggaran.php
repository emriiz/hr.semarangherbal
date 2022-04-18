<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggaran extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->library('form_validation');
	    $this->load->model('Karyawan_model');
	    $this->load->model('Pelanggaran_model');
	}

	public function index()
	{
		
		$pelanggaran = $this->Pelanggaran_model->listing();
		$data = array( 'title'   	 => 'Pelanggaran',
					   'pelanggaran' => $pelanggaran);
		$data['page'] = 'operator/pelanggaran/list';
		$this->load->view('operator/template', $data);
	}

	public function list()
	{
		$karyawan = $this->Karyawan_model->listing();
		$data = array( 'title'   	 => 'Data Karyawan',
					   'karyawan'	 => $karyawan);
		$data['page'] = 'operator/pelanggaran/list_karyawan';
		$this->load->view('operator/template', $data);
	}

	public function add($id_karyawan){
		$karyawan 	 = $this->Karyawan_model->detail($id_karyawan);
		$pelanggaran = $this->Pelanggaran_model->pilih($id_karyawan);
		$jml		 = $this->Pelanggaran_model->jumlahPelanggaran($id_karyawan);

		$valid = $this->form_validation;
		$valid->set_rules('sanksi','Sanksi','required', array('required'  => 'Sanksi harus di isi' ));
		if($valid->run()== FALSE){
			
			$data = array(
				'title'   	 	=> 'Pelanggaran Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'pelanggaran'	=> $pelanggaran,
				'jml'			=> $jml
			);
			$data['page'] = 'operator/pelanggaran/tambah';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_karyawan'  	=> $id_karyawan,
						  'id_user'			=> $this->session->userdata('id_user'),
						  'tgl_pelanggaran' => date('Y-m-d', strtotime($i->post('tgl_pelanggaran'))),
						  'keterangan'		=> $i->post('keterangan'),
						  'sanksi'			=> $i->post('sanksi')
					);
			$this->Pelanggaran_model->tambah($data);
			$this->session->set_flashdata('success', '<b>Data Pelanggaran Telah di Tambah</b>');
			redirect(base_url('operator/pelanggaran'), 'refresh');
		}
	}

	public function edit($id_pelanggaran)
	{
		$pelanggaran 	= $this->Pelanggaran_model->detail($id_pelanggaran);
		$id_karyawan	= $pelanggaran->id_karyawan;
		$karyawan 		= $this->Karyawan_model->detail($id_karyawan);

		$valid = $this->form_validation;

		$valid->set_rules('sanksi', 'Pilih Sanksi','required',
					array('required' => 'Masukkan Sanksi')); 

		if($valid->run()==FALSE) {
			$data = array(
				'title'   	 	=> 'Edit Pelanggaran Atas Nama ' .$karyawan->nama,
				'karyawan'		=> $karyawan,
				'pelanggaran'	=> $pelanggaran
			);
			$data['page'] = 'operator/pelanggaran/edit';
			$this->load->view('operator/template', $data);
		} else {
			$i = $this->input;
			$data = array('id_pelanggaran'	=> $id_pelanggaran,
						  'id_karyawan'  	=> $id_karyawan,
						  'id_user'			=> $this->session->userdata('id_user'),
						  'tgl_pelanggaran' => $i->post('tgl_pelanggaran'),
						  'keterangan'		=> $i->post('keterangan'),
						  'sanksi'			=> $i->post('sanksi')
					);
			$this->Pelanggaran_model->edit($data);
			$this->session->set_flashdata('success', '<b>Data Pelanggaran Telah di Edit</b>');
			redirect(base_url('operator/pelanggaran'), 'refresh');
		}
	}

	public function delete($id_pelanggaran)
	{
		$data = array('id_pelanggaran'   => $id_pelanggaran);
		$this->Pelanggaran_model->delete($data);
		$this->session->set_flashdata('success', '<b>Data Pelanggaran telah dihapus</b>');
		redirect(base_url('operator/pelanggaran'),'refresh');
	}

	public function laporan()
    {
      if($this->session->userdata('status') == TRUE){
        $tglawal  = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $pelanggaran = $this->Pelanggaran_model->getDataPelanggaran($tglawal, $tglakhir);
        $data = array('title' => 'Data Pelanggaran Karyawan',
                      'pelanggaran'  => $pelanggaran,
                      'page'    => 'operator/pelanggaran/laporan');
        $this->load->view('operator/template', $data);
      } else{
        $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
        redirect('login','refresh');
      }
    }

    public function export()
    {
        $tglawal  = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $pelanggaran 	  = $this->Pelanggaran_model->getDataPelanggaran($tglawal, $tglakhir);
        $data = array('title'     => 'Laporan Data Pelanggaran Karyawan SHI '.date('Y'),
                      'pelanggaran'  	  => $pelanggaran,
                      'tglawal'   => $tglawal,
                      'tglakhir'  => $tglakhir);
        $this->load->view('operator/pelanggaran/cetak', $data);
    }
}

/* End of file Pelanggaran.php */
/* Location: ./application/controllers/operator/Pelanggaran.php */
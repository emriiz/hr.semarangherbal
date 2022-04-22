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
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}
	}

	public function list()
	{
		if($this->session->userdata('status') == TRUE){
			$karyawan = $this->Karyawan_model->listing();
			$data = array( 'title'   	 => 'Data Karyawan',
						   'karyawan'	 => $karyawan);
			$data['page'] = 'operator/ijin/list_karyawan';
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', '<b> Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}
	}

	public function add($id_karyawan){
		if($this->session->userdata('status') == TRUE){
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
				$data = array('id_karyawan' => $id_karyawan,
							'id_user'		=> $this->session->userdata('id_user'),
							'tgl_ijin'		=> date('Y-m-d', strtotime($i->post('tgl_ijin'))),
							'jenis_ijin'	=> $i->post('jenis_ijin'),
							'jam_awal' 		=> date('H:i:s', strtotime($i->post('jam_awal'))),
							'jam_akhir' 	=> date('H:i:s', strtotime($i->post('jam_akhir'))),
							'keterangan'	=> $i->post('keterangan')
						);
				$this->Ijin_model->tambah($data);
				$this->session->set_flashdata('success', '<b>Data Ijin Telah di Tambah</b>');
				redirect(base_url('Operator/Ijin'), 'refresh');
			}
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		  }
	}

	public function edit($id_ijin)
	{
		if($this->session->userdata('status') == TRUE){	
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
				$data = array('id_ijin'		=> $id_ijin,
							'id_karyawan'  	=> $id_karyawan,
							'id_user'		=> $this->session->userdata('id_user'),
							'tgl_ijin'		=> $i->post('tgl_ijin'),
							'jenis_ijin'	=> $i->post('jenis_ijin'),
							'jam_awal' 		=> $i->post('jam_awal'),
							'jam_akhir' 	=> $i->post('jam_akhir'),
							'keterangan'	=> $i->post('keterangan')
						);
				$this->Ijin_model->edit($data);
				$this->session->set_flashdata('success', '<b>Data Ijin Telah di Edit</b>');
				redirect(base_url('Operator/Ijin'), 'refresh');
			}
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}
	}

	public function delete($id_ijin)
	{
		if($this->session->userdata('status') == TRUE){
			$data = array('id_ijin'   => $id_ijin);
			$this->Ijin_model->delete($data);
			$this->session->set_flashdata('success', '<b>Data Ijin telah dihapus</b>');
			redirect(base_url('Operator/Ijin'),'refresh');
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		  }
	}

	public function laporan()
    {
      if($this->session->userdata('status') == TRUE){
        $tglawal  = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $ijin = $this->Ijin_model->getDataIjin($tglawal, $tglakhir);
        $data = array('title' => 'Data Ijin Karyawan',
                      'ijin'  => $ijin,
                      'page'    => 'operator/ijin/laporan');
        $this->load->view('operator/template', $data);
      } else{
        $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
        redirect('Login','refresh');
      }
    }

    public function export()
    {
        $tglawal  = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $ijin 	  = $this->Ijin_model->getDataIjin($tglawal, $tglakhir);
        $data = array('title'     => 'Laporan Data Ijin Karyawan SHI '.date('Y'),
                      'ijin'  	  => $ijin,
                      'tglawal'   => $tglawal,
                      'tglakhir'  => $tglakhir);
        $this->load->view('operator/ijin/cetak', $data);
    }

}

/* End of file Ijin.php */
/* Location: ./application/controllers/operator/Ijin.php */
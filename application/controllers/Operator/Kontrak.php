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
			$data 	= array('title' 	=> 'Data Kontrak',
							'kontrak'	=> $kontrak);
			$data['page'] = 'operator/kontrak/list';
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}
	}

	public function list_karyawan()
	{
		if($this->session->userdata('status') == TRUE){
			$karyawan = $this->Kontrak_model->list_karyawan();
			$data 	  = array('title' 	  => 'Data Karyawan',
							  'karyawan'  => $karyawan,
							  'page'      => 'operator/kontrak/list-karyawan');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}
	}

	public function add($id_karyawan){
		if($this->session->userdata('status') == TRUE){
			$karyawan 	 = $this->Karyawan_model->detail($id_karyawan);
			$kontrak 	 = $this->Kontrak_model->pilih($id_karyawan);

			$valid = $this->form_validation;
			$valid->set_rules('kt1_1','Kontrak 1','required', array('required'  => 'Kontrak harus di isi' ));
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
				$data = array('id_karyawan' => $id_karyawan,
							'id_user'		=> $this->session->userdata('id_user'),
							'kt1_1'			=> date('Y-m-d', strtotime($i->post('kt1_1'))),
							'kt1_2'			=> date('Y-m-d', strtotime($i->post('kt1_2'))),
							'kt2_1'			=> date('Y-m-d', strtotime($i->post('kt2_1'))),
							'kt2_2'			=> date('Y-m-d', strtotime($i->post('kt2_2'))),
							'kt3_1'			=> date('Y-m-d', strtotime($i->post('kt3_1'))),
							'kt3_2'			=> date('Y-m-d', strtotime($i->post('kt3_2'))),
							'kt4_1'			=> date('Y-m-d', strtotime($i->post('kt4_1'))),
							'kt4_2'			=> date('Y-m-d', strtotime($i->post('kt4_2'))),
							'kt5_1'			=> date('Y-m-d', strtotime($i->post('kt5_1'))),
							'kt5_2'			=> date('Y-m-d', strtotime($i->post('kt5_2'))),
							'kt6_1'			=> date('Y-m-d', strtotime($i->post('kt6_1'))),
							'kt6_2'			=> date('Y-m-d', strtotime($i->post('kt6_2')))
						);
				$this->Kontrak_model->tambah($data);
				$this->session->set_flashdata('success', '<b>Data Kontrak Telah di Tambah</b>');
				redirect(base_url('Operator/Kontrak'), 'refresh');
			}
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}	
	}

	public function edit($id_kontrak)
	{
		if($this->session->userdata('status') == TRUE){
			$kontrak 		= $this->Kontrak_model->detail($id_kontrak);
			$id_karyawan	= $kontrak->id_karyawan;
			$karyawan 		= $this->Karyawan_model->detail($id_karyawan);

			$valid = $this->form_validation;

			$valid->set_rules('kt1_1', 'Kontrak 2','required',
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
				$data = array('id_kontrak'	=> $id_kontrak,
							'id_karyawan'  	=> $id_karyawan,
							'id_user'		=> $this->session->userdata('id_user'),
							'kt1_1'			=> date('Y-m-d', strtotime($i->post('kt1_1'))),
							'kt1_2'			=> date('Y-m-d', strtotime($i->post('kt1_2'))),
							'kt2_1'			=> date('Y-m-d', strtotime($i->post('kt2_1'))),
							'kt2_2'			=> date('Y-m-d', strtotime($i->post('kt2_2'))),
							'kt3_1'			=> date('Y-m-d', strtotime($i->post('kt3_1'))),
							'kt3_2'			=> date('Y-m-d', strtotime($i->post('kt3_2'))),
							'kt4_1'			=> date('Y-m-d', strtotime($i->post('kt4_1'))),
							'kt4_2'			=> date('Y-m-d', strtotime($i->post('kt4_2'))),
							'kt5_1'			=> date('Y-m-d', strtotime($i->post('kt5_1'))),
							'kt5_2'			=> date('Y-m-d', strtotime($i->post('kt5_2'))),
							'kt6_1'			=> date('Y-m-d', strtotime($i->post('kt6_1'))),
							'kt6_2'			=> date('Y-m-d', strtotime($i->post('kt6_2')))
						);
				$this->Kontrak_model->edit($data);
				$this->session->set_flashdata('success', '<b>Data Kontrak Telah di Edit</b>');
				redirect(base_url('Operator/Kontrak'), 'refresh');
			}
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}
	}

	public function delete($id_kontrak)
	{
		if($this->session->userdata('status') == TRUE){
			$data = array('id_kontrak'   => $id_kontrak);
			$this->Kontrak_model->delete($data);
			$this->session->set_flashdata('success', '<b>Data kontrak telah dihapus</b>');
			redirect(base_url('Operator/Kontrak'),'refresh');
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}	
	}

	public function laporan()
    {
      if($this->session->userdata('status') == TRUE){
      	$kontrak  = $this->input->get('kontrak');
      	$tglawal  = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $kontrak1 = $this->Kontrak_model->getDataKontrak($tglawal, $tglakhir, $kontrak);
				$data 	= array('title' 		=> 'Data Kontrak',
												'kontrak1'	=> $kontrak1,
												'kontrak'		=> $kontrak,
												'tglawal'   => $tglawal,
                      	'tglakhir'  => $tglakhir);
				$data['page'] = 'operator/kontrak/laporan';
				$this->load->view('operator/template', $data);
			} else{
				$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
				redirect('Login','refresh');
			}
    }

    public function export()
    {
        $kontrak  = $this->input->get('kontrak');
      	$tglawal  = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $kontrak1 = $this->Kontrak_model->getDataKontrak($tglawal, $tglakhir, $kontrak);
				$data 	= array('title' 		=> 'Data Kontrak',
												'kontrak1'	=> $kontrak1,
												'kontrak'		=> $kontrak,
												'tglawal'   => $tglawal,
                      	'tglakhir'  => $tglakhir);
        $this->load->view('operator/kontrak/cetak', $data);
    }

}

/* End of file Kontrak.php */
/* Location: ./application/controllers/operator/Kontrak.php */
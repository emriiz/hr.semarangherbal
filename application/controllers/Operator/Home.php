<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Karyawan_model','User_model'));
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$totalKaryawan = $this->Karyawan_model->totalKaryawan();
			$data = array('totalKaryawan'   => $totalKaryawan,
						  'page' 			=> 'operator/content');
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
	}

	public function ubah_password(){
		if($this->session->userdata('status') == TRUE){
			$id_user 	= $this->session->userdata('id_user');
			$user 	    = $this->User_model->detail($id_user);

			$valid = $this ->form_validation;

			$valid->set_rules('pass_lama','Password Lama','trim|required|min_length[3]');
			$valid->set_rules('new_password','Password Baru','trim|required|min_length[3]|matches[conf_pass]');
			$valid->set_rules('conf_pass','Konfirmasi Password','trim|required|min_length[3]|matches[new_password]');

			if($valid->run() == FALSE) {
				$data = array('page' => 'operator/ubah-password');
				$this->load->view('operator/template', $data);

			} else {

				// Update Password
				$i = $this->input;
				$data = array('id_user'    => $id_user,
							'password' => md5($i->post('new_password')));
				// print_r($data);exit;
				// Cek Password Lama
				$result = $this->User_model->cek_password($this->session->userdata('id_user'), md5($i->post('pass_lama')));
				// var_dump($result);exit;
				if($result > 0 AND $result === TRUE){
					$result = $this->User_model->update_pass($this->session->userdata('id_user'), $data);
					if($result > 0 ){
						$this->session->set_flashdata('success', '<b>Password Berhasil diubah</b>');
						redirect(base_url('Operator/Home/ubah_password'),'refresh');
					}else {
						$this->session->set_flashdata('alert', '<b>Password tidak dapat di ubah</b> ');
						redirect(base_url('Operator/Home/ubah_password'),'refresh');
					}
				} else {
					$this->session->set_flashdata('alert', '<b>Password lama tidak cocok</b> ');
					redirect(base_url('Operator/Home/ubah_password'),'refresh');
				}
			}
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('Login','refresh');
		}
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Operator/Home.php */
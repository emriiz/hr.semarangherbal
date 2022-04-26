<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('User_model');
	}

	// Halaman Login
	public function index()
	{
		$data = array('title'  => 'Login Administrator');
		$this->load->view('v_login', $data);
	}

	public function proses(){
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		// perulangan if else
		if ($this->form_validation->run() != FALSE) {
			// menangkap data email dan password dari halaman login
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			// menyimpan data pada sebuah array
			$where = array(
				'email' => $email,
				'password' => md5($password),
			);
			$this->load->model('User_model');
			// cek kesesuaian login pada table pengguna
			$cek = $this->User_model->cek_login('tbl_user', $where)->num_rows();

			// cek jika login benar
			if ($cek > 0) {

				// ambil data pengguna yang melakukan login
				$data = $this->User_model->cek_login('tbl_user', $where)->row();
				// buat session untuk pengguna yang berhasil login
				$data_session = array(
					'id_user'   => $data->id_user,
					'email' 	=> $data->email,
					'nama'      => $data->nama,
					'hak_akses' => $data->hak_akses,
					'status' 	=> TRUE
				);
				
				// mengambil data session user
				$this->session->set_userdata($data_session);
				if(($data->hak_akses) == 1){
						
					$this->session->set_flashdata('success', 'Selamat datang di halaman Admin User');
					redirect('Admin/Home','refresh');
						
					}else if(($data->hak_akses) == 2){
						$this->session->set_flashdata('success', 'Selamat datang di halaman Admin HRGA-K3');
					     redirect('Operator/Home','refresh');
						
					}else{
						$this->session->set_flashdata('success', 'Selamat datang di halaman Admin HRGA-K3');
					     redirect('Operator/Home','refresh');
					}
			} else {
				// alert untuk menampilkan sebuah pesan gagal login
				$this->session->set_flashdata('alert', 'Username dan Password Salah');
				redirect(base_url('Login'),'refresh');
			}
		} else {
			// tetap berada dihalaman login
			$this->session->set_flashdata('alert', 'Username dan Password Salah');
			redirect('Login');
		}
	}

	public function logout() {
	$this->session->set_userdata('email', FALSE);
	$this->session->sess_destroy();
	$this->session->set_flashdata('success', 'Anda telah logout dari aplikasi');
	redirect('Login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
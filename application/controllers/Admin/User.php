<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$user  = $this->User_model->listing();
			$data  = array( 'user' => $user,	
							'page' => 'admin/pengguna/list');
			$this->load->view('admin/template', $data);
		} else{
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih Dahulu');
			redirect('login','refresh');
		}
		
	}

	public function tambah()
	{
		$data = array( 'title'   => 'Pengguna');

		$valid = $this ->form_validation;

		$valid->set_rules('nama','Nama','required', array('required'  => 'password harus di isi' ));

		$valid->set_rules('email','Email','required|is_unique[tbl_user.email]', 
							array('required'  => 'email harus di isi',
								  'is_unique'=>  ' Email <strong>'.$this->input->post('email').'</strong> sudah ada, buat email baru' ));

		$valid->set_rules('password','Password','required|min_length[3]', 
							array('required'  => 'password harus di isi',
							'min_length' => 'Password minimal 3 huruf' ));

		if($valid->run()== FALSE){
			$data  = array('page' => 'admin/pengguna/tambah');
			$this->load->view('admin/template', $data);
		}else{
			$i = $this->input;
			$data = array('nik'  		=> $i->post('nik'),
						  'nama'  		=> $i->post('nama'),
						  'email'  		=> $i->post('email'),
						  'password'  	=> md5($i->post('password')),
						  'hak_akses'  	=> $i->post('hak_akses')	  
					);
			$this->User_model->tambah($data);
			$this->session->set_flashdata('success', 'Data telah ditambah');
			redirect(base_url('admin/user'), 'refresh');
		}
	}

	public function edit($id_user)
	{
		$user  = $this->User_model->detail($id_user);

		$valid = $this ->form_validation;

		$valid->set_rules('nama','Nama','required', array('required'  => 'password harus di isi' ));

		if($valid->run()== FALSE){
			$data  = array('title'=> 'Edit Data '.$user->nama,
						   'user' => $user,
						   'page' => 'admin/pengguna/edit'
						   );
			$this->load->view('admin/template', $data);
		}else{
			$i = $this->input;
			$data = array('id_user'		=> $id_user,
						  'nik'  		=> $i->post('nik'),
						  'nama'  		=> $i->post('nama'),
						  'email'  		=> $i->post('email'),
						  'password'  	=> md5($i->post('password')),
						  'hak_akses'  	=> $i->post('hak_akses')	  
					);
			$this->User_model->edit($data);
			$this->session->set_flashdata('success', 'Data telah diupdate');
			redirect(base_url('admin/user'), 'refresh');
		}

	}
}

/* End of file User.php */
/* Location: ./application/controllers/Admin/User.php */
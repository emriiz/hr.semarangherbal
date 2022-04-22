<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_model');
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$karyawan = $this->Karyawan_model->listing();
            $totalKaryawan = $this->Karyawan_model->totalKaryawan();
			$data = array('title'         => 'Data Karyawan',
        					  'karyawan'  => $karyawan,
        					  'page'      => 'Operator/karyawan/list');
		$this->load->view('Operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}
	}

  public function non_aktif()
  {
    if($this->session->userdata('status') == TRUE){
       $tglawal  = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $karyawan = $this->Karyawan_model->getDataKaryawanNon($tglawal, $tglakhir);
      $data = array('title'     => 'Data Karyawan Non Aktif',
                    'karyawan'  => $karyawan,
                    'page'      => 'Operator/karyawan/list_non');
    $this->load->view('Operator/template', $data);
    } else{
      $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
      redirect('Login','refresh');
    }
  }

    public function tambah()
    {
        if($this->session->userdata('status') == TRUE){
            $id_user = $this->session->userdata('id_user');
            $data = array('title' => 'Tambah Data Karyawan');
            $valid = $this->form_validation;

            $valid->set_rules('nik','NIK','required|is_unique[tbl_karyawan.nik]', 
                array('required'  => 'NIK Harus di isi',
                      'is_unique' =>  ' NIK <strong>'.$this->input->post('nik').'</strong> sudah terdaftar, silahkan gunakan NIK yang belum terdaftar' ));
            $valid->set_rules('nama','Nama','required', array('required'  => 'Nama harus di isi' ));

            if($valid->run()) {
                // End Validasi kalau foto tidak di upload
                if (!empty($_FILES['foto']['name'])) {
                    $config['upload_path'] = './assets/foto/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size']  = '12000';//KB
                
                    $this->upload->initialize($config);

                    if(! $this->upload->do_upload('foto')){
                        $data['page'] = 'Operator/karyawan/tambah';
                        $this->load->view('Operator/template', $data);
                        }else{
                            //UPLOAD DATA
                            $upload_data    =  array('uploads' => $this->upload->data());

                            $config['image_library']    = 'gd2';
                            $config['source_image']     = './assets/foto/' .$upload_data['uploads']['file_name'];
                            $config['new_image']        = './assets/foto/thumbs/';
                            $config['create_thumb']     = TRUE;
                            $config['quality']          = "100%";
                            $config['maintain_ratio']   = TRUE;
                            $config['width']            = 360;
                            $config['height']           = 360;
                            $config['x_axis']           = 0;
                            $config['y_axis']           = 0;
                            $config['thumb_marker']         = '';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();

                            $i = $this->input;
                            $data = array('id_user'         => $id_user,
                                        'nik'             => htmlspecialchars($i->post('nik', TRUE)),
                                        'nama'            => htmlspecialchars($i->post('nama', TRUE)),
                                        'foto'            => $upload_data['uploads']['file_name'],
                                        'tmpt_lahir'      => $i->post('tmpt_lahir'),
                                        'tgl_lahir'       => $i->post('tgl_lahir'),
                                        'umur'            => $i->post('umur'),
                                        'jekel'           => $i->post('jekel'),
                                        'agama'           => $i->post('agama'),
                                        'pendidikan'      => $i->post('pendidikan'),
                                        'tgl_join'        => date('Y-m-d', strtotime($i->post('tgl_join'))),
                                        'tgl_tetap'       => date('Y-m-d', strtotime($i->post('tgl_tetap'))),
                                        'tgl_resign'      => date('Y-m-d', strtotime($i->post('tgl_resign'))),
                                        'departemen'      => $i->post('departemen'),
                                        'jabatan'         => $i->post('jabatan'),
                                        'level'           => $i->post('level'),
                                        'lok_kerja'       => $i->post('lok_kerja'),
                                        'status_kerja'    => $i->post('status_kerja'),
                                        'status_karyawan' => $i->post('status_karyawan'),
                                        'status_menikah'  => $i->post('status_menikah'),
                                        'jml_anak'        => $i->post('jml_anak'),
                                        'alamat_ktp'      => $i->post('alamat_ktp'),
                                        'alamat_dom'      => $i->post('alamat_dom'),
                                        'cp'              => $i->post('cp'),
                                        'email'           => $i->post('email'),
                                        'rekening'        => $i->post('rekening'),
                                        'ktp'             => $i->post('ktp'),
                                        'npwp'            => $i->post('npwp'),
                                        'domisili'        => $i->post('domisili'),
                                        // 'resign'           => $i->post('resign'),
                                        'pekerjaan'       => $i->post('pekerjaan'),
                                        'status_aktif'    => 1,
                                        'tgl_input'       => $i->post('tgl_input')
                            );
                            $this->Karyawan_model->tambah($data);
                            $this->session->set_flashdata('success', '<b>Data Baru Telah Ditambahkan</b>');
                            redirect(base_url('Operator/Karyawan'),'refresh');
                    }
                }else{
                    $i = $this->input;
                            $data = array('id_user'         => $id_user,
                                        'nik'             => htmlspecialchars($i->post('nik', TRUE)),
                                        'nama'            => htmlspecialchars($i->post('nama', TRUE)),
                                        'tmpt_lahir'      => $i->post('tmpt_lahir'),
                                        'tgl_lahir'       => date('Y-m-d', strtotime($i->post('tgl_lahir'))),
                                        'umur'            => $i->post('umur'),
                                        'jekel'           => $i->post('jekel'),
                                        'agama'           => $i->post('agama'),
                                        'pendidikan'      => $i->post('pendidikan'),
                                        'tgl_join'        => date('Y-m-d', strtotime($i->post('tgl_join'))),
                                        'tgl_tetap'       => date('Y-m-d', strtotime($i->post('tgl_tetap'))),
                                        'tgl_resign'      => date('Y-m-d', strtotime($i->post('tgl_resign'))),
                                        'departemen'      => $i->post('departemen'),
                                        'jabatan'         => $i->post('jabatan'),
                                        'level'           => $i->post('level'),
                                        'lok_kerja'       => $i->post('lok_kerja'),
                                        'status_kerja'    => $i->post('status_kerja'),
                                        'status_karyawan' => $i->post('status_karyawan'),
                                        'status_menikah'  => $i->post('status_menikah'),
                                        'jml_anak'        => $i->post('jml_anak'),
                                        'alamat_ktp'      => $i->post('alamat_ktp'),
                                        'alamat_dom'      => $i->post('alamat_dom'),
                                        'cp'              => $i->post('cp'),
                                        'email'           => $i->post('email'),
                                        'rekening'        => $i->post('rekening'),
                                        'ktp'             => $i->post('ktp'),
                                        'npwp'            => $i->post('npwp'),
                                        'domisili'        => $i->post('domisili'),
                                        // 'resign'           => $i->post('resign'),
                                        'pekerjaan'       => $i->post('pekerjaan'),
                                        'status_aktif'    => 1,
                                        'tgl_input'       => $i->post('tgl_input')
                            );
                            $this->Karyawan_model->tambah($data);
                            $this->session->set_flashdata('success', '<b>Data Baru Telah Ditambahkan</b>');
                            redirect(base_url('Operator/Karyawan'),'refresh');
                }   
            }
            $data['page'] = 'operator/karyawan/tambah';
            $this->load->view('Operator/template', $data);
        } else{
            $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
            redirect('Login','refresh');
        }
    }

	public function edit($id_karyawan){
        if($this->session->userdata('status') == TRUE){
            $id_user = $this->session->userdata('id_user');
            $karyawan = $this->Karyawan_model->detail($id_karyawan);

            $valid = $this->form_validation;

            $valid->set_rules('nik','Nik','required', array('required'  => 'NIK harus di isi' ));
            $valid->set_rules('nama','Nama','required', array('required'  => 'Nama harus di isi' ));

            if($valid->run()) {
                // End Validasi kalau foto tidak di upload
                if (!empty($_FILES['foto']['name'])) {
                    $config['upload_path'] = './assets/foto/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size']  = '12000';//KB
                
                    $this->upload->initialize($config);

                    if(! $this->upload->do_upload('foto')){
                        $data    = array('title'    => $karyawan->nama,
                                        'karyawan'  => $karyawan);
                        $data['page'] = 'Operator/karyawan/edit';
                        $this->load->view('Operator/template', $data);
                        }else{
                            //UPLOAD DATA
                            $upload_data    =  array('uploads' => $this->upload->data());

                            $config['image_library']    = 'gd2';
                            $config['source_image']     = './assets/foto/' .$upload_data['uploads']['file_name'];
                            $config['new_image']        = './assets/foto/thumbs/';
                            $config['create_thumb']     = TRUE;
                            $config['quality']          = "100%";
                            $config['maintain_ratio']   = TRUE;
                            $config['width']            = 360;
                            $config['height']           = 360;
                            $config['x_axis']           = 0;
                            $config['y_axis']           = 0;
                            $config['thumb_marker']         = '';
                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();

                            $i = $this->input;
                            $data = array('id_karyawan'   => $id_karyawan,
                                        'id_user'         => $id_user,
                                        'nik'             => htmlspecialchars($i->post('nik', TRUE)),
                                        'nama'            => htmlspecialchars($i->post('nama', TRUE)),
                                        'foto'            => $upload_data['uploads']['file_name'],
                                        'tmpt_lahir'      => $i->post('tmpt_lahir'),
                                        'tgl_lahir'       => date('Y-m-d', strtotime($i->post('tgl_lahir'))),
                                        'umur'            => $i->post('umur'),
                                        'jekel'           => $i->post('jekel'),
                                        'agama'           => $i->post('agama'),
                                        'pendidikan'      => $i->post('pendidikan'),
                                        'tgl_join'        => $i->post('tgl_join'),
                                        'tgl_tetap'       => $i->post('tgl_tetap'),
                                        'tgl_resign'      => $i->post('tgl_resign'),
                                        'departemen'      => $i->post('departemen'),
                                        'jabatan'         => $i->post('jabatan'),
                                        'level'           => $i->post('level'),
                                        'lok_kerja'       => $i->post('lok_kerja'),
                                        'status_kerja'    => $i->post('status_kerja'),
                                        'status_karyawan' => $i->post('status_karyawan'),
                                        'status_menikah'  => $i->post('status_menikah'),
                                        'jml_anak'        => $i->post('jml_anak'),
                                        'alamat_ktp'      => $i->post('alamat_ktp'),
                                        'alamat_dom'      => $i->post('alamat_dom'),
                                        'cp'              => $i->post('cp'),
                                        'email'           => $i->post('email'),
                                        'rekening'        => $i->post('rekening'),
                                        'ktp'             => $i->post('ktp'),
                                        'npwp'            => $i->post('npwp'),
                                        'domisili'        => $i->post('domisili'),
                                        'resign'          => $i->post('resign'),
                                        'pekerjaan'       => $i->post('pekerjaan'),
                                        'status_aktif'    => $i->post('status_aktif'),
                                        'tgl_input'       => $i->post('tgl_input')
                            );
                            $this->Karyawan_model->edit($data);
                            $this->session->set_flashdata('success', '<b>Data Telah Diedit</b>');
                            redirect(base_url('Operator/Karyawan'),'refresh');
                    }
                }else{
                    $i = $this->input;
                            $data = array('id_karyawan'   => $id_karyawan,
                                        'id_user'         => $id_user,
                                        'nik'             => htmlspecialchars($i->post('nik', TRUE)),
                                        'nama'            => htmlspecialchars($i->post('nama', TRUE)),
                                        'tmpt_lahir'      => $i->post('tmpt_lahir'),
                                        'tgl_lahir'       => date('Y-m-d', strtotime($i->post('tgl_lahir'))),
                                        'umur'            => $i->post('umur'),
                                        'jekel'           => $i->post('jekel'),
                                        'agama'           => $i->post('agama'),
                                        'pendidikan'      => $i->post('pendidikan'),
                                        'tgl_join'        => $i->post('tgl_join'),
                                        'tgl_tetap'       => $i->post('tgl_tetap'),
                                        'tgl_resign'      => $i->post('tgl_resign'),
                                        'departemen'      => $i->post('departemen'),
                                        'jabatan'         => $i->post('jabatan'),
                                        'level'           => $i->post('level'),
                                        'lok_kerja'       => $i->post('lok_kerja'),
                                        'status_kerja'    => $i->post('status_kerja'),
                                        'status_karyawan' => $i->post('status_karyawan'),
                                        'status_menikah'  => $i->post('status_menikah'),
                                        'jml_anak'        => $i->post('jml_anak'),
                                        'alamat_ktp'      => $i->post('alamat_ktp'),
                                        'alamat_dom'      => $i->post('alamat_dom'),
                                        'cp'              => $i->post('cp'),
                                        'email'           => $i->post('email'),
                                        'rekening'        => $i->post('rekening'),
                                        'ktp'             => $i->post('ktp'),
                                        'npwp'            => $i->post('npwp'),
                                        'domisili'        => $i->post('domisili'),
                                        'resign'          => $i->post('resign'),
                                        'pekerjaan'       => $i->post('pekerjaan'),
                                        'status_aktif'    => $i->post('status_aktif'),
                                        'tgl_input'       => $i->post('tgl_input')
                            );
                            $this->Karyawan_model->edit($data);
                            $this->session->set_flashdata('success', '<b>Data Telah Diedit</b>');
                            redirect(base_url('Operator/Karyawan'),'refresh');
                }   
            }
            $data    = array('title'    => $karyawan->nama,
                            'karyawan'  => $karyawan);
            $data['page'] = 'Operator/karyawan/edit';
            $this->load->view('Operator/template', $data);
        } else{
            $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
            redirect('Login','refresh');
        }    
	}

	public function delete($id_karyawan)
	{
        if($this->session->userdata('status') == TRUE){
            $karyawan = $this->Karyawan_model->detail($id_karyawan);
            if($karyawan->foto != "") {
                unlink('./assets/foto/'.$karyawan->foto);
                unlink('./assets/foto/thumbs/'.$karyawan->foto);
            }
            
            $data = array('id_karyawan'   => $id_karyawan);
            $this->Karyawan_model->delete($data);
            $this->session->set_flashdata('success', '<b>Data telah dihapus</b>');
            redirect(base_url('Operator/Karyawan'),'refresh');
        } else{
            $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
            redirect('Login','refresh');
        }  
	}	

	 public function uploaddata()
    {
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->setShouldFormatDates(true);
            $reader->open('./assets/uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 0;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 0) {
                        $datakaryawan = array(
                            'nik'  			    => $row->getCellAtIndex(0),
                            'nama' 				=> $row->getCellAtIndex(1),
                            'tmpt_lahir' 		=> $row->getCellAtIndex(2),
                            'pendidikan'    	=> $row->getCellAtIndex(3),
                            'tgl_lahir' 		=> $row->getCellAtIndex(4),
                            'umur' 				=> $row->getCellAtIndex(5),
                            'tgl_join' 	        => $row->getCellAtIndex(6),
                            'tgl_tetap' 		=> $row->getCellAtIndex(7),
                            'tgl_resign' 		=> $row->getCellAtIndex(8),
                            'jekel'    			=> $row->getCellAtIndex(9),
                            'agama'   	 	    => $row->getCellAtIndex(10),
                            'departemen'        => $row->getCellAtIndex(11),
                            'jabatan'    	    => $row->getCellAtIndex(12),
                            'lok_kerja'    	    => $row->getCellAtIndex(13),
                            'status_kerja'      => $row->getCellAtIndex(14),
                            'status_karyawan'   => $row->getCellAtIndex(15),
                            'status_menikah'    => $row->getCellAtIndex(16),
                            'jml_anak'    		=> $row->getCellAtIndex(17),
                            'alamat_ktp'    	=> $row->getCellAtIndex(18),
                            'alamat_dom'    	=> $row->getCellAtIndex(19),
                            'cp'    			=> $row->getCellAtIndex(20),
                            'email'    			=> $row->getCellAtIndex(21),
                            'rekening'    		=> $row->getCellAtIndex(22),
                            'ktp'    			=> $row->getCellAtIndex(23),
                            'npwp'    			=> $row->getCellAtIndex(24),
                            'domisili'    		=> $row->getCellAtIndex(25),
                            'cc'    			=> $row->getCellAtIndex(26),
                            'resign'    		=> $row->getCellAtIndex(27),
                        );
                        $this->Karyawan_model->import_data($datakaryawan);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('./assets/uploads/' . $file['file_name']);
                $this->session->set_flashdata('success', '<b>Import Data Berhasil</b>');
                redirect('Operator/Karyawan');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }

    public function exportExcel()
    {
        $tglawal  = $this->input->get('tglawal');
        $tglakhir = $this->input->get('tglakhir');
        $karyawan = $this->Karyawan_model->getDataKaryawan($tglawal, $tglakhir);
        $data = array('title'     => 'Laporan Data Karyawan SHI '.date('Y'),
                      'karyawan'  => $karyawan,
                      'tglawal'   => $tglawal,
                      'tglakhir'  => $tglakhir);
        $this->load->view('Operator/karyawan/cetak', $data);
    }

    public function export()
    {
        if($this->session->userdata('status') == TRUE){    
            $tglawal  = $this->input->get('tglawal');
            $tglakhir = $this->input->get('tglakhir');
            $karyawan = $this->Karyawan_model->getDataKaryawanNon($tglawal, $tglakhir);
            $data = array('title'     => 'Laporan Data Resign Karyawan SHI '.date('Y'),
                          'karyawan'  => $karyawan,
                          'tglawal'   => $tglawal,
                          'tglakhir'  => $tglakhir);
            $this->load->view('Operator/karyawan/print', $data);
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
        $karyawan = $this->Karyawan_model->getDataKaryawan($tglawal, $tglakhir);
        $data = array('title'     => 'Data Karyawan',
                      'karyawan'  => $karyawan,
                      'page'      => 'Operator/karyawan/laporan');
        $this->load->view('Operator/template', $data);
      } else{
        $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
        redirect('Login','refresh');
      }
    }

    public function detail($id_karyawan)
    {
        if($this->session->userdata('status') == TRUE){
            $karyawan      = $this->Karyawan_model->detail($id_karyawan);
            $cuti          = $this->db->get_where('tbl_cuti',['id_karyawan'=>$id_karyawan])->result();
            $kontrak       = $this->db->get_where('tbl_kontrak',['id_karyawan'=>$id_karyawan])->result();
            $pelanggaran   = $this->db->get_where('tbl_pelanggaran',['id_karyawan'=>$id_karyawan])->result();
            $lembur        = $this->db->get_where('tbl_lembur',['id_karyawan'=>$id_karyawan])->result();
            $data     = array('title'       => 'Profile '.$karyawan->nama,
                            'karyawan'    => $karyawan,
                            'cuti'        => $cuti,
                            'kontrak'     => $kontrak,
                            'pelanggaran' => $pelanggaran,
                            'lembur'      => $lembur,
                            'page'        => 'Operator/karyawan/profile');
            $this->load->view('Operator/template', $data);
    } else{
        $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
        redirect('Login','refresh');
      }    
    }

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/Operator/Karyawan.php */
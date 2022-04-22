<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Absensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Absensi_model');
	}

	public function index()
	{
		if($this->session->userdata('status') == TRUE){
			$absensi = $this->Absensi_model->listing();
			$data = array( 'title'   	 => 'Data Absensi',
						   'absensi' 		 => $absensi);
			$data['page'] = 'operator/absensi/list';
			$this->load->view('operator/template', $data);
		} else{
			$this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
			redirect('Login','refresh');
		}
	}

	 public function uploaddata()
    {
        if($this->session->userdata('status') == TRUE){
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();
            $reader->setShouldFormatDates(true);
            $reader->setShouldPreserveEmptyRows(false);
            $reader->open('./assets/uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $datakaryawan = array(
                            'nik'  		   => $row->getCellAtIndex(1),
                            'nama' 		   => $row->getCellAtIndex(2),
                            'tgl' 		   => $row->getCellAtIndex(3),
                            'duty_on'      => $row->getCellAtIndex(4),
                            'duty_off' 	   => $row->getCellAtIndex(5),
                            'wh_in' 	   => $row->getCellAtIndex(6),
                            'wh_off' 	   => $row->getCellAtIndex(7),
                            'wh_shift' 	   => $row->getCellAtIndex(8),
                            'a_code'       => $row->getCellAtIndex(9),
                            'a_duty_on'    => $row->getCellAtIndex(10),
                            'a_duty_off'   => $row->getCellAtIndex(11),
                            'spl_on'       => $row->getCellAtIndex(12),
                            'spl_off'      => $row->getCellAtIndex(13),
                            'spl_on_hour'  => $row->getCellAtIndex(14),
                            'spl_off_hour' => $row->getCellAtIndex(15),
                            'permit'  	   => $row->getCellAtIndex(16),
                            'permit_on'    => $row->getCellAtIndex(17),
                            'permit_off'   => $row->getCellAtIndex(18)
                        );
                        $this->Absensi_model->import_data($datakaryawan);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('./assets/uploads/' . $file['file_name']);
                $this->session->set_flashdata('success', '<b>import Data Berhasil</b>');
                redirect('Operator/Absensi');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    } else{
        $this->session->set_flashdata('alert', '<b>Silahkan Login Terlebih Dahulu</b>');
        redirect('Login','refresh');
    }
    }

}

/* End of file Absensi.php */
/* Location: ./application/controllers/Operator/Absensi.php */
<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Apointment extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['pasien_m','apoinment_m']);
	}

	public function index()
	{
		// $this->template->load('template', 'dokter/dokter_data');
		$data['pasiens'] = $this->pasien_m->getDataPasien();
		// echo "<pre>";print_r($data['dokter']); echo "</pre>";
		// die();
		$this->template->load('template', 'pasien/pasien_data',$data);
	}



	 public function add()
    {

       
		// print_r($_POST['username']);
		// if($this->input->post()){
			//ketika ada data yang mau diinsert
			$id_pasien = $this->pasien_m->insertPasien(
				$this->input->post('nomor_identitas'),
				$this->input->post('nama_pasien'),
				$this->input->post('jenis_kelamin'),
				$this->input->post('alamat'),
				$this->input->post('no_telp')
            );
          
           
            if($id_pasien){
                //insert table reservasi
                $this->apoinment_m->insertAppoimnet(
			        $id_pasien,
				    $this->input->post('id_dokter'),
				    $this->input->post('tgl_janji'),
				    $this->input->post('pesan')
            );
                
            }
	
			header("Location:"."/ci3/front/list/"); /* Redirect browser */
		// } else {
		// 	$this->load->library('form_validation');
		// 	$this->form_validation->set_rules('fullname', 'Nama', 'required');
		// 	$this->template->load('template', 'pasien/pasien_form_add');
		// }
    
	}




}

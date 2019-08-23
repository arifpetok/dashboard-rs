<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('dokter_m');
	}

	public function index()
	{
		// $this->template->load('template', 'dokter/dokter_data');
		$data['dokters'] = $this->dokter_m->getDataDokter();
		// echo "<pre>";print_r($data['dokter']); echo "</pre>";
		// die();
		$this->template->load('template', 'dokter/dokter_data',$data);
	}

	public function deleteDokter($iddokter){
		$this->dokter_m->deleteDocter($iddokter);
	}

	 public function add()
    {
		// print_r($_POST['username']);
		if($this->input->post()){
			//ketika ada data yang mau diinsert
			$this->dokter_m->insertDocter(
				$this->input->post('nama_dokter'),
				$this->input->post('spesialis'),
				$this->input->post('alamat'),
				$this->input->post('no_telp')
			);
			header("Location:"."/ci3/dokter"); /* Redirect browser */
		} else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'Nama', 'required');
			$this->template->load('template', 'dokter/dokter_form_add');
		}
    
	}

	public function update($id_dokter = null){
		if($this->input->post()){
			//ketika ada data yang mau diinsert
			
			$this->dokter_m->updateDokter(
				$this->input->post('id_dokter'),
				$this->input->post('nama_dokter'),
				$this->input->post('spesialis'),
				$this->input->post('alamat'),
				$this->input->post('no_telp')
			);
			header("Location:"."/ci3/dokter"); /* Redirect browser */
		} else {
			$data['doctor'] = $this->dokter_m->getSingleDocter($id_dokter);
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'Nama', 'required');
			$this->template->load('template', 'dokter/dokter_form_update', $data);
		}
    
	}



}

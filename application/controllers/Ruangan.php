<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ruangan_m');
	}

	public function index()
	{
		// $this->template->load('template', 'dokter/dokter_data');
		$data['ruangans'] = $this->ruangan_m->getDataRuangan();
		// echo "<pre>";print_r($data['dokter']); echo "</pre>";
		// die();
		$this->template->load('template', 'ruangan/ruangan_data',$data);
	}

	public function deleteRuangan($id_ruangan){
		$this->ruangan_m->deleteRuangan($id_ruangan);
	}

	 public function add()
    {
		// print_r($_POST['username']);
		if($this->input->post()){
			//ketika ada data yang mau diinsert
			$this->ruangan_m->insertRuangan(
				$this->input->post('nama_ruangan'),
				$this->input->post('gedung')
			);
			header("Location:"."/ci3/ruangan"); /* Redirect browser */
		} else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'Nama', 'required');
			$this->template->load('template', 'ruangan/ruangan_form_add');
		}
	}

	public function update($id_ruangan = null){
		if($this->input->post()){
			//ketika ada data yang mau diinsert
			
			$this->ruangan_m->updateRuangan(
				$this->input->post('id_ruangan'),
				$this->input->post('nama_ruangan'),
				$this->input->post('gedung')
			);
			header("Location:"."/ci3/ruangan"); /* Redirect browser */
		} else {
			$data['ruangan'] = $this->ruangan_m->getSingleRuangan($id_ruangan);
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'Nama', 'required');
			$this->template->load('template', 'ruangan/ruangan_form_update', $data);
		}
    
	}


}

<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('obat_m');
	}

	public function index()
	{
		// $this->template->load('template', 'dokter/dokter_data');
		$data['obats'] = $this->obat_m->getDataObat();
		// echo "<pre>";print_r($data['dokter']); echo "</pre>";
		// die();
		$this->template->load('template', 'obat/obat_data',$data);
	}

	public function deleteObat($id_obat){
		$this->obat_m->deleteObat($id_obat);
	}

	 public function add()
    {
		// print_r($_POST['username']);
		if($this->input->post()){
			//ketika ada data yang mau diinsert
			$this->obat_m->insertObat(
				$this->input->post('nama_obat'),
				$this->input->post('keterangan_obat')
			);
			header("Location:"."/ci3/obat"); /* Redirect browser */
		} else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'Nama', 'required');
			$this->template->load('template', 'obat/obat_form_add');
		}
	}

	public function update($id_obat = null){
		if($this->input->post()){
			//ketika ada data yang mau diinsert
			
			$this->obat_m->updateObat(
				$this->input->post('id_obat'),
				$this->input->post('nama_obat'),
				$this->input->post('keterangan_obat')
			);
			header("Location:"."/ci3/obat"); /* Redirect browser */
		} else {
			$data['obat'] = $this->obat_m->getSingleObat($id_obat);
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'Nama', 'required');
			$this->template->load('template', 'obat/obat_form_update', $data);
		}
    
	}


}

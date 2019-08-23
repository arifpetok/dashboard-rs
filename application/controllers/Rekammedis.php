<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('rekammedis_m');
	}

	public function index()
	{
		$data['rekam_medis'] = $this->rekammedis_m->getRekamMedis();
		// echo "<pre>"; print_r($data['rekam_medis']); echo "</pre>";
		// $this->template->load('template', 'dokter/dokter_data');
			$this->template->load('template', 'rekammedis/rekammedis_data',$data);
	}

	public function deleteRekamMedis($id_rm){
		$this->rekammedis_m->deleteRekamMedis($id_rm);
	}

	 public function add()
    {
		// print_r($_POST['username']);
		if($this->input->post()){
			//ketika ada data yang mau diinsert
		

			$data = [
				"id_pasien"=>$this->input->post('id_pasien'),
				"keluhan"=>$this->input->post('keluhan'),
				"id_dokter"=>$this->input->post('id_dokter'),
				"diagnosa"=>$this->input->post('diagnosa'),
				"id_ruangan"=>$this->input->post('id_ruangan'),
				"tgl_periksa"=>$this->input->post('tgl_periksa'),
			];

			$this->rekammedis_m->addRekamMedis($data);

			header("Location:"."/ci3/rekammedis"); /* Redirect browser */
		} else {

			$this->load->model('pasien_m');
			$this->load->model('dokter_m');
			$this->load->model('ruangan_m');

			$data['pasien'] = $this->pasien_m->getDataPasien();
			$data['dokter'] = $this->dokter_m->getDataDokter();
			$data['ruangan'] = $this->ruangan_m->getDataRuangan();


			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'Nama', 'required');
			$this->template->load('template', 'rekammedis/rekammedis_form_add',$data);
		}
    
	}

	public function update($id_rm = null){
		if($this->input->post()){
			//ketika ada data yang mau diinsert
			
			
			$data = [
				"id_pasien"=>$this->input->post('id_pasien'),
				"keluhan"=>$this->input->post('keluhan'),
				"id_dokter"=>$this->input->post('id_dokter'),
				"diagnosa"=>$this->input->post('diagnosa'),
				"id_ruangan"=>$this->input->post('id_ruangan'),
				"tgl_periksa"=>$this->input->post('tgl_periksa'),
			];

			$this->rekammedis_m->updateRekamMedis($data, $id_rm);

			header("Location:"."/ci3/rekammedis"); /* Redirect browser */
		} else {
		$this->load->model('pasien_m');
			$this->load->model('dokter_m');
			$this->load->model('ruangan_m');

			$data['pasien'] = $this->pasien_m->getDataPasien();
			$data['dokter'] = $this->dokter_m->getDataDokter();
			$data['ruangan'] = $this->ruangan_m->getDataRuangan();
			$data['rekammedis'] = $this->rekammedis_m->getOne($id_rm);


			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'Nama', 'required');
			$this->template->load('template', 'rekammedis/rekammedis_form_update',$data);
		}
    
	}

	public function view($id_rm) 
	{			
		$this->load->model('pasien_m');
			$this->load->model('dokter_m');
			$this->load->model('ruangan_m');
		$data['rekammedis'] = $this->rekammedis_m->getOne($id_rm);
		// echo "<pre>"; print_r($data['rekammedis']); echo "</pre>";

		$this->template->load('template', 'rekammedis/rekammedis_view',$data);
	}

}

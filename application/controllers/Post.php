<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model(['dokter_m','apoinment_m','post_m']);
	}

	public function index()
	{
        // $data['dokters'] = $this->dokter_m->getDataDokter();
        $data['posts'] = $this->post_m->getPost();
        // echo "<pre>";print_r($data['posts']); echo "</pre>";
		// die();
	
		$this->template->load('template', 'post/post_data',$data);
	}

	public function list()
	{
		$data['dokters'] = $this->dokter_m->getDataDokter();
		$data['list_reservasi'] = $this->apoinment_m->getAppoinment();
        // echo "<pre>";print_r($data['list_reservasi']); echo "</pre>";
		// die();

		$this->load->view('front/list_appointment', $data);
    }
    
    	public function view($id_post) 
	{			
		
	}
}

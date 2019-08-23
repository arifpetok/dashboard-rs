<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		$this->load->model(['apoinment_m']);
	}

	public function index()
	{
		check_not_login();
		$data['list_reservasi2'] = $this->apoinment_m->getAppoinment();
		
		$this->template->load('template', 'dashboard', $data);
	}
}

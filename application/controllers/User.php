<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        check_not_login();
        
        $this->load->model('user_m');
        $data['row'] = $this->user_m->get();

	    	$this->template->load('template', 'user/user_data', $data);
  }
    
    public function add()
    {
        // print_r($_POST['username']);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
		    $this->template->load('template', 'user/user_form_add');

    }
}

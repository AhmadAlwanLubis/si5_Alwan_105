<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function _construct()
    {
        parent::_construct();
        if($this->session->userdata('status') != "login") { 
            redirect(base_url("login"));
        }
    }

	public function index()
	{
		$this->load->view('dashboard');
	}
}
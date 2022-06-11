<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmasuk extends CI_Controller {
    public function _construct()
    {
        parent::_construct();
        if($this->session->userdata('status') != "login") { 
            redirect(base_url("login"));
        }
    }

	public function index()
	{
        $this->load->model('crud');
        $data['admin'] = $this->crud->tampil_data()->result();
		$this->load->view('dashboard_admin',$data);
	}

    function edit($username){
        $this->load->model('crud');
		$where = array('username' => $username);
		$data['admin'] = $this->crud->edit_data($where,'admin')->result();
		$this->load->view('edituser',$data);
	}

    function update(){
        $this->load->model('crud');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    
        $data = array(
            'email' => $email,
            'password' => $password
            
        );
    
        $where = array(
            'username' => $username
        );
    
        $this->crud->update_data($where,$data,'admin');
        redirect('adminmasuk/index');
    }

    function hapus($username){
        $this->load->model('crud');
		$where = array('username' => $username);
		$this->crud->hapus_data($where,'admin');
		redirect('adminmasuk/index');
	}
}
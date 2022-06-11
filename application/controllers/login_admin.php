<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login_admin extends CI_Controller { 

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model_admin'); 
    }

    function index() { 
        $this->load->view('login_view_admin');
    }

    function login_action() { 
        $username = $this->input->post('username'); 
        $password = $this->input->post('password'); 
        $where = array(
            'username' => $username, 
            'password' => $password 
        );

        $cek = $this->login_model_admin->cek_login("adminmasuk", $where)->num_rows(); 
        if($cek > 0) { 
            $data_session = array( 
                'nama' => $username, 
                'status' => "login" 
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('adminmasuk'));
        }       
        else {
            echo "Username dan password salah!";
        }    
    }
    
    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
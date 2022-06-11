<?php

class Register extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('auth');
	}
	function index()
	{
		$this->load->view('daftar');
	}
	public function proses(){
	    $this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[8]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
            $email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->auth->register($username,$password,$email);

			redirect('login');
		}
		else
		{
			redirect('daftar');
		}
    }
}
?>
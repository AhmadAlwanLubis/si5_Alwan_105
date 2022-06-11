<?php
class Projek extends CI_Controller {
    public function construct()
    {
    parent:: construct();
    }

    public function index()
    {
        $this->load->view('login_view');
    }
    public function tentang()
    {
        $this->load->view('about');
    }
    public function admin()
    {
        $this->load->view('admin');
    }
}
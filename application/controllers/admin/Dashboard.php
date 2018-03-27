<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index(){
        if ($this->session->userdata('user_admin') == false) {
            redirect(base_url().'admin/account/login');
        }
        $this->load->view('a/template/V_header');
		$this->load->view('a/V_dashboard');
		$this->load->view('a/template/V_footer');		
    }
}
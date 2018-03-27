<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index(){
        redirect(base_url().'admin');
    }

    public function login(){
        if ($this->session->userdata('user_admin') == true) {
            redirect(base_url().'admin');
        }
        $this->load->view('a/V_login');
    }

    public function login_proses(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user_data = $this->M_admin->get_password($username);

        if (count($user_data) == 0) {
            redirect(base_url() . 'admin/account/login?alert');
            die;
        }

        $password_get = $user_data[0]["password"];
        
       
        if (password_verify($password, $password_get) == true) {
                $value = [
                    'username' => $username,
                ];
            $this->session->set_userdata('user_admin', $value);
            redirect(base_url() . 'admin');    
        } 
        else {
            redirect(base_url() . 'admin/account/login?alert');
            die;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_admin');
        redirect(base_url().'admin/account/login');
    }

}
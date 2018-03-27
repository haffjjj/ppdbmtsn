<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
        if ($this->session->userdata('user_admin') == false) {
            redirect(base_url().'admin/account/login');
        }
    }

    public function index(){
        $this->load->view('a/template/V_header');

        $data = $this->M_admin->get_admin()[0];

        $this->load->view('a/V_user',['data'=>$data]);
        
		$script = '';
		$this->load->view('a/template/V_footer',['script'=>$script]);
    }

    public function update(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $password = password_hash($password,PASSWORD_DEFAULT);

        $data = [
            'username'=>$username,
            'password'=>$password
        ];

        if($this->M_admin->admin_update($data) == 1){
            redirect(base_url().'admin/account/logout');
        }
        else{
            echo 'gagal';
        }
    }


}
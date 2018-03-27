<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index(){
        redirect(base_url().'admin');
    }

    public function belum(){
        $data = $this->M_admin->get_peserta_belum();
        // var_dump($data);
        $this->load->view('a/template/V_header');
		$this->load->view('a/V_peserta_belum',['data'=> $data]);
		$this->load->view('a/template/V_footer');
    }

    public function sudah(){
        $this->load->view('a/template/V_header');
		$this->load->view('a/V_peserta_sudah');
		$this->load->view('a/template/V_footer');
    }

    public function belum_view(){

    }

    public function sudah_view(){

    }
}
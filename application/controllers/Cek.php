<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_cek');
    }

    public function index(){
        $this->load->view('u/template/V_header');
		$this->load->view('u/V_status');
       
        if($this->input->get('pin')){
            $pin = $this->input->get('pin');
            $pin = str_replace('MTS','',$pin);
            $pin = str_replace('mts','',$pin);

            $data = $this->M_cek->get_kartu($pin);
            // var_dump($data);

		    $this->load->view('u/V_status_peserta',['data'=>$data]);
        }

        $this->load->view('u/template/V_footer');
    }
}
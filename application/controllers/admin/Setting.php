<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
        if ($this->session->userdata('user_admin') == false) {
            redirect(base_url().'admin/account/login');
        }
    }

    public function index(){
        $this->load->view('a/template/V_header');

        $data = $this->M_admin->get_setting()[0];

        $this->load->view('a/V_setting',['data'=>$data]);
        
        $script = '<script src="'.base_url().'/_assets/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(".datepicker").datepicker({
                format: "yyyy-mm-dd"
            });
        </script>';
        
		$this->load->view('a/template/V_footer',['script'=>$script]);
    }

    public function update(){
        $mulai = $this->input->post('mulai');
        $selesai = $this->input->post('selesai');

        $data = [
            'mulai'=>$mulai,
            'selesai'=>$selesai
        ];

        if($this->M_admin->setting_update($data) == 1){
            redirect(base_url().'admin/setting');
        }
        else{
            echo 'gagal';
        }
    }


}
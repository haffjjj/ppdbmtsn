<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_cek');
        $this->load->model('M_pendaftaran');
        // $this->load->library('M_pdf_jon');
    }

    public function index(){
        $date = $this->M_pendaftaran->get_date()[0];

		date_default_timezone_set('Asia/Jakarta');
		$now= strtotime(date('Y-m-d'));
		
		$mulai = strtotime($date['mulai']);
		$selesai = strtotime($date['selesai']);

		if($now < $mulai){
			$ppdb = 'belum';
		}
		elseif (($now > $mulai) && ($now < $selesai))
		{
			$ppdb = 'dalam';
		}
		elseif($now > $selesai)
		{
			$ppdb = 'selesai';
		}

        $this->load->view('u/template/V_header',['ppdb'=>$ppdb]);
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
    public function to_pdf(){
        $mpdf = new \Mpdf\Mpdf();

        if($this->input->get('pin')){
            $pin = $this->input->get('pin');
            $pin = str_replace('MTS','',$pin);
            $pin = str_replace('mts','',$pin);

            $data = $this->M_cek->get_kartu_diperiksa($pin);
            // var_dump($data);
            // die;
            if(count($data) > 0){

                // $showdata = []
                // echo 'cek';
                $mpdf->WriteHTML($this->load->view('u/V_kartu',['data'=>$data[0]],true));
                $mpdf->Output('kartupeserta.pdf', 'D');  
            }
            else{
                redirect(base_url());
            }

           
        }

       
    }
    public function  kartup(){
        $this->load->view('u/V_kartu');
    }
}
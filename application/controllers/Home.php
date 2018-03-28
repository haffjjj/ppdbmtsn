<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_pendaftaran');
	}

	public function index()
	{
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
		$this->load->view('u/V_home',['ppdb'=>$ppdb,'date'=>$date]);
		$this->load->view('u/template/V_footer');		
	}
}

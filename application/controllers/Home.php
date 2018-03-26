<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('u/template/V_header');
		$this->load->view('u/V_home');
		$this->load->view('u/template/V_footer');		
	}
}

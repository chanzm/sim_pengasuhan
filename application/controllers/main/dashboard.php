<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		if($username==""){
	   		$this->load->view('view_login');
	  	}
	  	else{
		$data['content'] = 'main/view_dashboard';

		$this->load->view('main/tampilan_utama',$data);
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_depan extends CI_Controller {

	public function index(){
		$this->load->view('depan/index');
	}
	public function modal(){
		$this->load->view('depan/modal');
	}
	public function login(){
	if( $this->session->userdata('status') == 'login' )
	{
		redirect(base_url('index.php/admin'));	
	}
	else
	{
		$this->load->view('depan/login');	
	}
		
	}
}
?>
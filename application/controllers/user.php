<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$this->load->model('M_admin');
		$data = $this->M_admin->GetData('buku');
		$data = array('data' => $data);
		
		$this->load->view('user/dashboard',$data);
	}
	
}
?>
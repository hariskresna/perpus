<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login(){
		$this->load->model('M_admin');
		$username=$this->input->post('userid');
		$password=$this->input->post('password');
		$where=array(
			'username'=> $username,
			'password'=> md5($password)



		);
		$cek=$this->M_admin->login('admin',$where)->num_rows();

		if($cek>0){
			$data_session=array(
				'username' => $username,
				'status' => 'login'

			);
			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/Admin/index'));
		}else{
			echo "Salah Password/Username";
		}
	}



	
}
?>
		
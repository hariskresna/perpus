<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{

		if($this->session->userdata('status')){
			$this->load->view('admin/dashboard');
		}else{
			redirect(base_url('index.php/halaman_depan/login'));		}
		

	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function register()
	{
		$this->load->view('admin/register');
	}

	public function buku()
	{
		$this->load->model('M_admin');
		$data = $this->M_admin->GetData('buku');
		$data = array('data' => $data);
		$this->load->view('admin/buku', $data);
	}

	public function tambahbuku()
	{
		$this->load->view('admin/tambahbuku');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/halaman_depan'));
	}
	
	public function prosestambahbuku()
	{
		$this->load->model('M_admin');
    	$data = array(
	        'kode' => $this->input->post('kode'),
	        'judul' => $this->input->post('judul'),
	        'lokasi' => $this->input->post('lokasi')
        );
	    $data = $this->M_admin->Insert('buku', $data);
	    redirect('admin/tambahbuku','refresh');
	}

	public function editbuku($kode)
	{
		$this->load->model('M_admin');
	    $buku = $this->M_admin->GetWhere('buku', array('kode' => $kode));
	    $data = array(
	        'kode' => $buku[0]['kode'],
	        'judul' => $buku[0]['judul'],
	        'lokasi' => $buku[0]['lokasi'],
        );
		$this->load->view('admin/editbuku', $data);
	}

	public function proseseditbuku()
	{
		$kode = $_POST['kode'];
		$judul = $_POST['judul'];
		$lokasi = $_POST['lokasi'];

		$data = array(
			'judul' => $judul,
			'lokasi' => $lokasi
		);

		$where = array(
			'kode' => $kode,
		);

		$this->load->model('M_admin');
		$query = $this->M_admin->Update('buku', $data, $where);
		if( $query > 0 )
		{
			redirect('admin/buku', 'refresh');
		}
	}

	public function deletebuku($id)
	{
		$id = array('id' => $id);
		$this->load->model('M_admin');
		$this->M_admin->Delete('buku', $id);
		redirect('admin/buku', 'refresh');
	}
}

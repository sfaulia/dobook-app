<?php

class Invoice extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
				redirect('auth/login');
		$this->email = \Config\Services::email();
		}
		
	}
	
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates_admin/footer');
	}
	
	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');

	}

	private function sendEmail()
	{
		$this->email->setFrom('dobookgroup@gmail.com','DoBook');
		$this->email->setTo('dobookgroup@gmail.com');

		$this->email->attach($attachment);

		$this->email->setSubject('Testing');

		$this->email->setMessage('<h1>Tessssssss</h1>');

		if(! $this->email->send()){
			return false;
		}else{
			return true;
		}

	}



}	
<?php

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				</div>');
				redirect('auth/login');
		}
	}
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');

	}
	public function Add_to_donation($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'	=> $barang->id,
			'qty'	=> 1,
			'price'	=> $barang->price,
			'name'	=> $barang->name,
			'address' => $barang->address,
		
	);

	
	$this->cart->insert($data);
	redirect('welcome');
	}

	
	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
	
	}
	
	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome/index');
	}
	
	public function donation()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('donation');
	    $this->load->view('templates/footer');

	
	}

	public function proses_donasi()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_donasi');
			$this->load->view('templates/footer');
		} else {
				echo "Maaf, Donasi Anda Gagal diproses";
		}
	}


	public function proses_edit()
	{
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_edit');
			$this->load->view('templates/footer');
	}
	
	public function detail($id)
	{
		$data['barang'] = $this->model_barang->detail_brg($id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	
	}
	
}
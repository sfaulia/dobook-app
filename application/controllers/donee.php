<?php

class Donee extends CI_Controller{
	
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
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('donee', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_aksi()
	{
		$name 		= $this->input->post('name');
		$category	= $this->input->post('category');
		$price 		= $this->input->post('price');
		$stock 		= $this->input->post('stock');
		$address 	= $this->input->post('address');
		$chief 		= $this->input->post('chief');
		$phone 		= $this->input->post('phone');
		$detail		= $this->input->post('detail');
		$image		= $_FILES['image']['name'];
		if($image = ''){}else{
			$config['upload_path'] = './uploads';
			$config['upload_path'] = 'jpg|jpeg|png|gif';		
		
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('image')){
				echo "Gambar Gagal DiUpload";
			}else {
				$image=$this->upload->data('file_name');
			}
		}
		
		$data = array(
			'name' 		=> $name,
			'category'	=> $category,
			'price' 	=> $price,
			'stock' 	=> $stock,
			'address'	=> $address,
			'chief'		=> $chief,
			'phone'		=> $phone,
			'detail'	=> $detail,
			'image' 	=> $image,
		);
		
		$this->model_barang->tambah_barang($data, 'products');
		redirect('donee/index');
	}
	
	
	public function detail($id)
	{
		$data['barang'] = $this->model_barang->detail_brg($id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('donee/detail_barang', $data);
		$this->load->view('templates/footer');
	
	}
	
	public function edit($id)
	{
		$where = array('id' => $id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'products')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('donee/edit_barang', $data);
		$this->load->view('templates/footer');
	}
	
	public function update(){
		$id			= $this->input->post('id');
		$name		= $this->input->post('name');
		$category	= $this->input->post('category');
		$price		= $this->input->post('price');
		$stock		= $this->input->post('stock');
		$address 	= $this->input->post('address');
		$chief 		= $this->input->post('chief');
		$phone 		= $this->input->post('phone');
		$detail		= $this->input->post('detail');
		
		$data = array(
		
			'name' 		=> $name,
			'category'	=> $category,
			'price' 	=> $price,
			'stock' 	=> $stock,
			'address'	=> $address,
			'chief'		=> $chief,
			'phone'		=> $phone,
			'detail'	=> $detail,
		);
		
		$where =array(
			'id' => $id
		);
		
		$this->model_barang->update_data($where, $data, 'products');
		redirect('donee/index');
	}
	
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_barang->hapus_data($where, 'products');
		redirect('donee/index');
	}
	

}
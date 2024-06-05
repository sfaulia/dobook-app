<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
	
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

	public function Index()
	{
		 $data['judul'] = 'Profile';
		 $data['users'] = $this->model_user->cekData(['username' => $this->session->userdata('username')])->row_array();
		 $this->load->view('templates/header', $data);
		 $this->load->view('templates/sidebar', $data);
		 $this->load->view('user/index', $data);
		 $this->load->view('templates/footer');
	}
	
	public function ubah_profile()
	{
		 $data['judul'] = 'Edit Profile';
		 $data['users'] = $this->model_user->cekData(['username' => $this->session->userdata('username')])->row_array();
		 $this->form_validation->set_rules('nama', 'Full Name', 
		'required|trim', ['required' => 'Nama tidak Boleh Kosong'
		 ]);

		
		if ($this->form_validation->run() == false) {
		 $this->load->view('templates/header', $data);
		 $this->load->view('templates/sidebar', $data);
		 $this->load->view('user/ubah_profile', $data);
		 $this->load->view('templates/footer');
		 } else {
			 $nama = $this->input->post('nama', true);
			 $email = $this->input->post('email', true);
			 $username = $this->input->post('username', true);

		 //jika ada gambar yang akan diupload
		 $upload_image = $_FILES['images']['name'];

		 if ($upload_image) {
			 $config['upload_path'] = './assets/img/';
			 $config['allowed_types'] = 'gif|jpg|png|jpeg';
			 $config['max_size'] = '2048';
			 $config['file_name'] = 'pro' . time();
			
			 $this->load->library('upload', $config);
			
			 if ($this->upload->do_upload('images')) {
			 $gambar_lama = $data['users']['images'];
			 if ($gambar_lama != 'default.png') {
			 unlink(FCPATH . 'assets/img/' . $gambar_lama);
			 }
			
			 $gambar_baru = $this->upload->data('file_name');
		 $this->db->set('images', $gambar_baru);
			 } else {
			 	echo $this->upload->display_errors();
			 }
		 }

			 $this->db->set('nama', $nama);
			 $this->db->where('email', $email);
			 $this->db->where('username', $username);
			 $this->db->update('users');
			 $this->session->set_flashdata('pesan', '<div 
		class="alert alert-success alert-message" role="alert">Profil 
		Berhasil diubah </div>');
			 redirect('index');
		}
	}
}
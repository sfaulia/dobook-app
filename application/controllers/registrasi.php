<?php 

class Registrasi extends CI_Controller{

		public function index()
		{
			$this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email wajib diisi!']);
			$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama wajib diisi!']);
			$this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Username wajib diisi!']);			
			$this->form_validation->set_rules('password_1', 'password', 'required|matches[password_2]', ['required' => 'Password wajib diisi!', 
			'matches' => 'Password tidak sesuai']);
			$this->form_validation->set_rules('password_2', 'password', 'required|matches[password_1]');

			
			if($this->form_validation->run() == FALSE){
				$this->load->view('templates/header');
				$this->load->view('registrasi');
			}else {
				$data = array(
					'id'		=> '',
					'email'		=> $this->input->post('email'),
					'nama'		=> $this->input->post('nama'),
					'username'	=> $this->input->post('username'),
					'password'	=> $this->input->post('password_1'),
					'role_id'	=> 2,
			);
			
			$this->db->insert('users', $data);
			redirect('auth/login');
			
		
			}
		}
}
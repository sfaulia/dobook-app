<?php

class Kategori extends CI_Controller{
	public function Jawa()
	{
		$data['Jawa'] = $this->model_kategori->data_Jawa()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Jawa', $data);
		$this->load->view('templates/footer');
	}
	
	public function Kalimantan()
	{
		$data['Kalimantan'] = $this->model_kategori->data_Kalimantan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Kalimantan', $data);
		$this->load->view('templates/footer');
	}
	
	public function Papua()
	{
		$data['Papua'] = $this->model_kategori->data_Papua()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Papua', $data);
		$this->load->view('templates/footer');
	}
	
	public function Sulawesi()
	{
		$data['Sulawesi'] = $this->model_kategori->data_Sulawesi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Sulawesi', $data);
		$this->load->view('templates/footer');
	}

	public function Sumatra()
	{
		$data['Sumatra'] = $this->model_kategori->data_Sumatra()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Sumatra', $data);
		$this->load->view('templates/footer');
	}
}
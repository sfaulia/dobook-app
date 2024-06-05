<?php

class Model_kategori extends CI_Model{
	
	public function data_Jawa(){
	return $this->db->get_where("products",array('category' => 'Jawa'));
	}
	
	
	public function data_Kalimantan(){
	return $this->db->get_where("products",array('category' => 'Kalimantan'));
	}
	
	
	public function data_Papua(){
	return $this->db->get_where("products",array('category' => 'Papua'));
	}
	
	
	public function data_Sulawesi(){
	return $this->db->get_where("products",array('category' => 'Sulawesi'));
	}

	public function data_Sumatra(){
	return $this->db->get_where("products",array('category' => 'Sumatra'));
	}
}

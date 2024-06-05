<?php

class Model_donee extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_tempat');
	}

	public function tambah_donee($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_donee($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_donee($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_donee($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id_tempat', $id)
					       ->limit(1)
						   ->get('tb_tempat');
		if($result->num_rows()>0){
				return $result->row();
		}else{
			return array();
		}
	}
}

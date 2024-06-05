<?php

class Model_invoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama	= $this->input->post('nama');
		$alamat	= $this->input->post('alamat');
		$alamat	= $this->input->post('email');
		$no_telepon	= $this->input->post('no_telepon');
		$pengiriman	= $this->input->post('pengiriman');
		$total_buku	= $this->input->post('total_buku');
		$catatan	= $this->input->post('catatan');

		
		$invoice	= array(
			'nama'		=> $nama,
			'alamat' 	=> $alamat,
			'email' 	=> $email,
			'no_telepon'=> $no_telepon,
			'pengiriman'=> $pengiriman,
		    'total_buku'=> $total_buku,
			'catatan'   => $catatan,
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'),
							date('i'), date('s'), date('m'), date('d')+1, date('Y')))
									
								
							);
		$this->db->insert('invoice', $invoice);
		$id_invoice = $this->db->insert_id();
		
		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice'	=> $id_invoice,
				'id_brg'		=> $item['id'],
				'nama_brg'		=> $item['name'],
				'alamat'	    => $item['address'],
				'jumlah'		=> $item['qty'],
				'harga'			=> $item['price'],
			);
			$this->db->insert('pesanan', $data);
		}
		return TRUE;
	}
	
	public function tampil_data()
	{
		$result = $this->db->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();
		} else{
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)
		->get('invoice');
		if ($result->num_rows() > 0)
		{
			return $result->row();
		} else {
			return false;
		}
	}
	
	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice) ->get('pesanan');
		if($result->num_rows()	>0){
			return $result->result();
		} else {
			return false;
		}
	}
}
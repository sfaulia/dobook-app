<?php

class Data_donee extends CI_Controller {

    public function index()
    {
        $data['tempat'] = $this->model_donee->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_donee', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit($id)
    {
        $where = array('id_tempat' =>$id);
        $data['tempat'] = $this->model_donee->edit_donee($where, 'tb_tempat')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_donee', $data);
        $this->load->view('templates_admin/footer');

    }

    public function update (){
        $id             = $this->input->post('id_tempat');
        $nama_tempat    = $this->input->post('nama_tempat');
        $alamat         = $this->input->post('alamat');
        $detail_alamat  = $this->input->post('detail_alamat');
        $keterangan     = $this->input->post('keterangan');
        $ketua_pengurus = $this->input->post('ketua_pengurus');
        $no_telepon     = $this->input->post('no_telepon');

        $data = array(

            'nama_tempat'       => $nama_tempat,
            'alamat'            => $alamat,
            'detail_alamat'     => $detail_alamat,
            'keterangan'        => $keterangan,
            'ketua_pengurus'    => $ketua_pengurus,
            'no_telepon'        => $no_telepon
        );

        $where = array(
            'id_tempat' => $id
        );

        $this->model_donee->update_donee($where,$data,'tb_tempat');
        redirect('admin/data_donee/index');

    }

    public function hapus($id)
    {
        $where = array('id_tempat' => $id);
        $this->model_donee->hapus_donee($where,'tb_tempat');
        redirect('admin/data_donee/index');
    }
}

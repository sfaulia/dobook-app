<?php
class Chat extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Chat_model');
        $this->load->library('form_validation');
    }

    public function index() {
        // Dapatkan semua pesan dari database
        $data['messages'] = $this->Chat_model->get_messages();

        // Tampilkan halaman chat
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('chat_view', $data);
        $this->load->view('templates/footer');

    }

    public function send_message() {
        // Atur aturan validasi untuk input form
        $this->form_validation->set_rules('sender', 'Sender', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman chat
            $this->index();
        } else {
            // Jika validasi berhasil, simpan pesan ke database
            $data = array(
                'sender' => $this->input->post('sender'),
                'message' => $this->input->post('message')
            );

            $this->Chat_model->save_message($data);

            // Kembali ke halaman chat setelah mengirim pesan
            redirect('chat');
        }
    }
}
?>

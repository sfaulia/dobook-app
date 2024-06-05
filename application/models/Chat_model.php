<?php
class Chat_model extends CI_Model {
    public function get_messages() {
        $this->db->order_by('created_at', 'ASC');
        return $this->db->get('messages')->result_array();
    }

    public function save_message($data) {
        $this->db->insert('messages', $data);
        return $this->db->insert_id();
    }
}
?>

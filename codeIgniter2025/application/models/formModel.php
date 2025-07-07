<?php
defined('BASEPATH')or exit ('No direct script allowed');

class formModel extends CI_Model{
    public function insert_user() {
        $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];
        return $this->db->insert('users', $data);
    }

    // public function get_data(){
    //     $query = $this->db->get('users', 10);
    //     return $query->result();
    // }
}
?>
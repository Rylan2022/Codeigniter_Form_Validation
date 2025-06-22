<?php
defined('BASEPATH') or exit('No direct script allowed');

class NewModel extends CI_Model {
    public function get_user(){
        return $this->db->get('test');
    }
}
?>
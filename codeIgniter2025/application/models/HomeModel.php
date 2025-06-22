<?php 
defined('BASEPATH') OR exit("No direct script allowed");

class HomeModel extends CI_Model{
    public function queries() {
    //  $q =  $this->db->query('SELECT * FROM test WHERE si=1');
    // $q = $this->db->get('test')->num_rows();
    //  return $q;
    $this->db->WHERE('si', 2);
   return $q = $this->db->get('test')->row();
    
    }
}
?>
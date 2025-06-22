<?php
defined('BASEPATH') or exit('No direct script allowed');


class HomeController extends CI_Controller {
    public function index() {
        echo "<h1>This is codeigniter.</h1>";
    }

    public function user_data() {
        $this->load->model('NewModel');
        $data['name'] = $this->NewModel->get_user()->result_array();
        // $data->result();

        $this->load->view('homepage', $data);
    }


}
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');


class newController extends CI_Controller
{
    public function index()
    {   
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('form/form');
        } else {
            $this->load->view('form/form_success');
        }
    }
}
?>
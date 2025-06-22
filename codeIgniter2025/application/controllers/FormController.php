<?php
defined('BASEPATH') or exit('No direct script access allowed');
class FormController extends CI_Controller
{
    public function index()
    {
        $this->load->helper('form');
        $this->load->view('form');
    }

    public function myfunc()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // $this->form_validation->set_rules('username', 'User name', 'required|max_length[20]|min_length[5]|trim',[
        //     'required' =>'%s cannot be blank.'
        // ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        if ($this->form_validation->run()) {
            echo "Not blank value";
        } else {
            $this->load->view('form');
        }
    }
}
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');


class newController extends CI_Controller
{
    public function my_func()
    {
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', [
            'required' => 'You must provide a %s.'
        ]);
        $this->form_validation->set_rules('password', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form/form_view');
        } else {
            $this->load->view('form/form_success');
        }
    }
}
?>
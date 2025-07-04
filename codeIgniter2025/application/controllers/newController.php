<?php
defined('BASEPATH') or exit('No direct script access allowed');


class newController extends CI_Controller
{
    public function my_func()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form/form');
        } else {
            $this->load->view('form/form_success');
        }
    }
}
?>
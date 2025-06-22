<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ValidateController extends CI_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run()) {
            echo "✅ Valid form submitted!";
        } else {
            $this->load->view('validate_form');
        }
    }
}
?>
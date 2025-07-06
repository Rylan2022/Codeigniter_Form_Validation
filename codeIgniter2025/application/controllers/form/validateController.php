<?php
defined('BASEPATH') or exit('No direct script allowed');

class ValidateController extends CI_Controller
{
    public function index()
    {
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->load->model('formModel');

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[5]|max_length[12]|is_unique[users.username]',
            [
                'required' => 'You have not provided %s.',
                'is_unique' => 'This %s already exists.'
            ]
        );
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form/form_view2');
        } else {
            $inserted = $this->formModel->insert_user();
            if ($inserted) {
                $this->load->view('form/form_success');
            } else {
                echo "Something went wrong. Please try again.";
            }
        }
    }
}
?>
<?php
defined('BASEPATH') or exit('No direct script allowed');

class ValidateController extends CI_Controller
{
    public function index()
    {
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->load->model('formModel');


        if ($this->form_validation->run('signup') == FALSE) {

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
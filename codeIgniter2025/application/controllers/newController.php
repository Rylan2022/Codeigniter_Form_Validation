<?php
defined('BASEPATH') or exit('No direct script access allowed');


class newController extends CI_Controller
{
    public function index()
    {   
        $this->load->helper('form');
        $this->load->view('simpleForm2');
    }
}
?>
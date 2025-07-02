<?php
defined('BASEPATH') or exit('No direct script access allowed');


class newController extends CI_Controller
{
    public function index()
    {
        $this->load->view('simpleForm');
    }
}
?>
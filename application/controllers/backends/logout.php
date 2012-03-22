<?php

class Logout extends Backends_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->ion_auth->logout();
        $this->session->set_flashdata('logout_text', 'Thank You, please come back later');
        redirect('backends/login');
    }

}
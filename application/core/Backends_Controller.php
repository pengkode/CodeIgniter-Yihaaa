<?php

class Backends_Controller extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');

        if ( !$this->ion_auth->is_admin() ) {
            redirect('backends/login');
        }
    }

}
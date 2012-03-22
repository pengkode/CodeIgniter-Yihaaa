<?php

class MY_Controller extends CI_Controller
{

    protected $tpl;

    function __construct()
    {
        parent::__construct();
        $this->tpl['themes'] = base_url() . 'themes/bootstrap/';
    }

}
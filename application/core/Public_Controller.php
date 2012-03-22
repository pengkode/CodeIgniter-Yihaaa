<?php

class Public_Controller extends MY_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->tpl['css'] = array();
        $this->tpl['javascripts'] = array();
        $this->tpl['page_title'] = config_item('app_title');
    }

}
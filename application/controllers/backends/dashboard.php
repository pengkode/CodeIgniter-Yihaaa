<?php

class Dashboard extends Backends_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        //optimize table
        $this->db->query("OPTIMIZE TABLE  `topics` ,`topic_tags` ,`tweets`");

        $this->tpl['content'] = $this->load->view('backends/dashboard/index', $this->tpl, true);
        $this->load->view('backends/body', $this->tpl);
    }

}
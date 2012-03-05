<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    protected $tpl;

    function __construct() {
        parent::__construct();
        $this->tpl['themes'] = base_url() . 'themes/bootstrap/';
    }

    public function index() {
        $this->tpl['content'] = $this->load->view('frontend/home/index', $this->tpl, true);
        $this->load->view('frontend/body', $this->tpl);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
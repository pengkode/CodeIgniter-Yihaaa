<?php

class Login extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        if ( $this->ion_auth->is_admin() ) {
            redirect('backends/dashboard');
        }
    }

    function index()
    {
        $this->load->library('form_validation');
        //validate form input
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5|callback__check_login');

        if ( $this->form_validation->run() ) {
            redirect('backends/dashboard');
        }
        $this->tpl['is_login'] = true;
        $this->tpl['content'] = $this->load->view('backends/login/index', $this->tpl, true);
        $this->load->view('backends/body', $this->tpl);
    }

    function _check_login()
    {
        $email = $this->input->post('email', 1);
        $password = $this->input->post('password', 1);
        $remember = (bool) $this->input->post('remember');

        if ( $this->ion_auth->login($email, $password, $remember) ) {
            if ( !$this->ion_auth->is_admin() ) {
                $this->form_validation->set_message('_check_login', 'You Are Not an Admin');
                return false;
            } else {
                return true;
            }
        } else {
            $this->form_validation->set_message('_check_login', $this->ion_auth->errors());
            return false;
        }
    }

}
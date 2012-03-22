<?php

class Users extends Backends_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index($offset=0)
    {
        $limit = 5;
        $this->ion_auth->limit($limit);
        $this->ion_auth->offset($offset);
        $this->ion_auth->order_by('created_on');
        $users['data'] = $this->ion_auth->users()->result();
        $users['total'] = $this->db->count_all_results('users');

        $pagination = create_pagination('backends/users/index', $users['total'], $limit, 4);

        $this->tpl['users'] = $users;
        $this->tpl['pagination'] = $pagination;
        $this->tpl['content'] = $this->load->view('backends/users/index', $this->tpl, true);
        $this->load->view('backends/body', $this->tpl);
    }

    function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|callback__register|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|md5|required');
        $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'trim|required|md5|match[password]');
        $this->form_validation->set_rules('fullname', 'Name', 'trim|required');

        if ( $this->form_validation->run() ) {
            $this->tpl['freeze'] = true;
        }
        $this->tpl['content'] = $this->load->view('backends/users/add', $this->tpl, true);
        $this->load->view('backends/body', $this->tpl);
    }

    function profile($user_id)
    {
        $user = $this->ion_auth->user($user_id)->row();
        xdebug($user);
    }

    function _register()
    {
        $email = $this->input->post('email', 1);
        $username = $email;
        $password = $this->input->post('password', 1);
        $data['fullname'] = $this->input->post('fullname', 1);
        if ( $this->ion_auth->register($username, $password, $email, $data) ) {
            return true;
        } else {

            $this->ion_auth->set_error_delimiters('<li>', '</li>');
            $this->form_validation->set_message('_register', 'Registration Error: <ul style="list-style: none;">' . $this->ion_auth->errors() . '</ul>');
            return false;
        }
    }

}
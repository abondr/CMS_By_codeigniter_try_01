<?php

class Login extends MY_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->view("includes/public_header");
        $this->load->view("login/login_form");
        $this->load->view("includes/public_footer");
    }

    public function auth_login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->helper('form');
            $this->load->view("includes/public_header");
            $this->load->view("login/login_form");
            $this->load->view("includes/public_footer");
        } else {
            echo "dipika";
        }
    }

}

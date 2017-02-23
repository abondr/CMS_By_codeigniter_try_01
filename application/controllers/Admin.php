<?php

class Admin extends MY_Controller{
    public function index(){
         $this->load->view("includes/public_header");
        $this->load->view("login/login_form");
        $this->load->view("includes/public_footer");
    }
}
<?php

class User extends CI_Controller {
    public function index(){
        $this->load->view("includes/public_header");
        $this->load->view("user/articles_list");
        $this->load->view("includes/public_footer");
    }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $this->load->view('user/login');
    }

    public function signup()
    {
        $this->load->view('user/signup');
    }

    public function reset_password()
    {
        $this->load->view('user/reset_password');
    }
}
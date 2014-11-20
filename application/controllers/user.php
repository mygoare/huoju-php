<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $data['content'] = "user/login";
        $this->load->view('template/container', $data);
    }

    public function signup()
    {
        $data['content'] = "user/signup";
        $this->load->view('template/container', $data);
    }

    public function reset_password()
    {
        $data['content'] = "user/reset_password";
        $this->load->view('template/container', $data);
    }

    public function profile()
    {
        $data['content'] = "user/profile";
        $this->load->view('template/container', $data);
    }

    public function settings()
    {
        $data['content'] = "user/settings";
        $this->load->view('template/container', $data);
    }

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function table()
    {
        $data['content'] = "event/list";
        $this->load->view('template/container', $data);
    }
}
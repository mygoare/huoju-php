<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Venue extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function table()
    {
        $data['content'] = "venue/list";
        $this->load->view('template/container', $data);
    }
}
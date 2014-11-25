<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Debug extends CI_Controller {
	public function index()
	{
		echo phpinfo();
	}

    // send email
    public function mail()
    {
        $this->load->library('mailgun');

        $re = $this->mailgun->welcome('mygoare@163.com');

        echo $re->http_response_code;
    }

    public function get_config()
    {
        echo $this->config->item('base_url');
    }

    public function testDb()
    {
        $this->load->database();
    }
}
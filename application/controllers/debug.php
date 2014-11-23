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
        var_dump($re);
    }
}
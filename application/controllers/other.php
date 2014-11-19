<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Other extends CI_Controller {
	public function about()
	{
		$data['content'] = "other/about";
		$this->load->view('template/container', $data);
	}

	public function faq()
	{
		$data['content'] = "other/faq";
		$this->load->view('template/container', $data);
	}

	public function terms()
	{
		$data['content'] = "other/terms";
		$this->load->view('template/container', $data);
	}
}
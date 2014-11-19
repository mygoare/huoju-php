<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Other extends CI_Controller {
	public function about()
	{
		$data['title'] = "about";
		$data['content'] = "other/about";
		$this->load->view('template/container', $data);
	}

	public function faq()
	{
		$this->load->view('other/faq');
	}

	public function terms()
	{
		$this->load->view('other/terms');
	}
}
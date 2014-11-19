<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Other extends CI_Controller {
	public function about()
	{
		$data['title'] = "about";
		$this->load->view('other/about', $data);
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
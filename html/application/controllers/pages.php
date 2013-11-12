<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'ПРАВОВЕДОФФ';
		$data['contact_us'] = $this->load->view('contact_us','',true);

		$this->load->view('header_mainpage', $data);
		$this->load->view('mainpage');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		$data['page_title'] = 'ПРАВОВЕДОФФ';
		$data['contact_us'] = $this->load->view('contact_us','',true);
		$data['our_benefits'] = $this->load->view('our_benefits','',true);

		$this->load->view('header', $data);
		$this->load->view($page_id);
		$this->load->view('footer');
	}
}

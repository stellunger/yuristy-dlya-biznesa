<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'ПРАВОВЕДОФФ';

		$this->load->view('header_mainpage', $data);
		$this->load->view('mainpage');
		$this->load->view('footer');
	}
}

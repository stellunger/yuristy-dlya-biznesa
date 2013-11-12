<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'Коммерческие споры, сопровождение бизнеса, проверка контрагентов, банкротство, купля-продажа бизнеса, снижение земельного налога | Юристы для бизнеса.рф';
		$data['contact_us'] = $this->load->view('contact_us','',true);

		$this->load->view('header_mainpage', $data);
		$this->load->view('mainpage');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		switch ($page_id)
		{
			case 'kommercheskie-spory':
				$data['page_title'] = "Коммерческие споры";
				break;

			case 'soprovogdenie-biznesa':
				$data['page_title'] = "Сопровождение бизнеса";
				break;

			case 'proverka-kontragentov':
				$data['page_title'] = "Проверка контрагентов";
				break;

			case 'bankrotstvo':
				$data['page_title'] = "Банкротство";
				break;

			case 'kuplya-prodaga-biznesa':
				$data['page_title'] = "Купля-продажа бизнеса";
				break;

			case 'snigenie-zemelnogo-naloga':
				$data['page_title'] = "Снижение земельного налога";
				break;

			case 'preimushestva':
				$data['page_title'] = "Наши преимущества";
				break;

			case 'contacts':
				$data['page_title'] = "Связаться с нами";
				break;

			default:
				$data['page_title'] = "";
				break;
		} 

		$data['page_title'] .= ' | Юристы для бизнеса.рф';

		$data['contact_us'] = $this->load->view('contact_us','',true);
		$data['our_benefits'] = $this->load->view('our_benefits','',true);

		$this->load->view('header', $data);
		$this->load->view($page_id);
		$this->load->view('footer');
	}
}

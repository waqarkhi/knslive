<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('setting');
	}

	public function index($page='home')
	{
		$data['menu'][] = ['title'=> 'Home', 'link'=>'/'];
		$data['menu'][] = ['title'=> 'About', 'link' => '/about'];

		$data['temp'] = $this->setting->temp('Basic',$page);
		$this->load->view('page', $data);
	}
}
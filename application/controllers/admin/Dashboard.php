<?php
class Dashboard extends CI_Controller
{
	protected $path = 'admin/dashboard/';
	function __construct()
	{
		parent::__construct();
		$this->load->model('setting');
		$this->setting->role('admin');
	}
	public function index()
	{
		$data['page'] = [
			'title' => 'Dashboard',
			'slug' => $this->path.'index'
		];
		$this->setting->admin_temp($data);
	}
}
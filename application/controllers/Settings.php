<?php
class Settings extends CI_Controller
{
	protected $path = 'settings/';
	function __construct()
	{
		parent::__construct();
		$this->load->model('setting');
		$this->setting->role('admin');
	}
	public function index()
	{
		$data['settings']= $this->setting->get();
		$data['page'] = ['title' => 'Settings','slug' => $this->path.'index'];
		$this->setting->admin_temp($data);
	}

	public function add()
	{
		if(@$_POST) {$this->add_setting();}
		$data['page'] = ['title' => 'Add Settings','slug' => $this->path.'add'];
		$this->setting->admin_temp($data);
	}

	public function edit($id)
	{
		if(@$_POST) { $this->update_setting();}
		$data['setting'] = $this->setting->get($id)[0];
		$data['page'] = ['title' => 'Edit Settings','slug' => $this->path.'edit'];
		$this->setting->admin_temp($data);
	}

	public function delete($id)
	{
		$this->setting->delete($id);
		redirect($this->path);
	}

	private function add_setting()
	{
		$data = [
			'name' => $_POST['name'],
			'body' => $_POST['body'],
		];
		$this->setting->add($data);
		redirect($this->path);
	}

	private function update_setting()
	{
		foreach ($_POST as $k => $v) { $data[$k]=$v; }
		$this->setting->update($data);
		redirect($this->path.'edit/'.$_POST['id']);
	}



}
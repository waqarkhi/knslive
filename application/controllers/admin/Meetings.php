<?php 
class Meetings extends CI_Controller
{
	protected $path = 'admin/meetings/';
	protected $tab = 'meetings';
	function __construct()
	{
		parent::__construct();
		$this->load->model('setting');
		$this->load->model('student');
		$this->load->model('meeting');
		$this->setting->role('admin');
	}

	public function index()
	{
		$data['page']= ['title'=>'Meetings', 'slug'=>$this->path.'index'];
		$data['meetings']=$this->meeting->list();
		$this->setting->admin_temp($data);
	}
	public function add()
	{
		if(@$_POST) {$this->meeting->add($this->path);}
		$data['classes'] = $this->student->list();
		$data['page']= ['title'=>'Add Meeting', 'slug'=>$this->path.'add'];
		$this->setting->admin_temp($data);
	}

	public function edit($id)
	{
		if(@$_POST) {$this->meeting->update($id,$this->path);}
		$data['classes'] = $this->student->list();
		$data['meeting'] = $this->meeting->info($id);
		$data['page']= ['title'=>'Edit Meeting', 'slug'=>$this->path.'edit'];
		$this->setting->admin_temp($data);
	}
}
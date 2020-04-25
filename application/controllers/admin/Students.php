<?php
class Students extends CI_Controller
{
	protected $path = 'admin/students/';
	protected $tab = 'students';
	function __construct()
	{
		parent::__construct();
		$this->load->model('setting');
		$this->load->model('student');
		$this->setting->role('admin');
	}

	public function index()
	{
		$data['page'] = ['title'=>'Students', 'slug'=>$this->path.'index'];
		if(@$_GET) {
			$data['list'] = $this->student->list($_GET['class']);
		} else {
			$data['list'] = $this->student->list();
		}
		$this->setting->admin_temp($data);
	}


	public function add()
	{
		if(@$_POST) {$this->student->add($this->path);
		} else {
			$data['page'] = ['title'=>'Add Student', 'slug'=>$this->path.'add'];
			$this->setting->admin_temp($data);
		}
	}

	public function edit($id)
	{
		if(@$_POST) {
			$this->student->update($id, $this->path);
		} else {
			$data['page'] = ['title'=>'Edit Student', 'slug'=>$this->path.'edit'];
			$data['student'] = $this->student->info($id);
			$this->setting->admin_temp($data);
		}
	}

	public function update()
	{
		$data = ['status'=>$_POST['status']];
		$this->db->where('id', $_POST['id']);
		$this->db->update($this->tab, $data);
		echo "success";
	}

	public function is_unique()
	{
		header('content-type:application/json');
		if(@$_GET) {
			foreach ($_GET as $k => $v) { $this->db->where($k,$v); }
			echo $this->db->get($this->tab)->num_rows();
		}
	}
}
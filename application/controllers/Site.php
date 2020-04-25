<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	protected $path = 'site/';
	function __construct()
	{
		parent::__construct();
		$this->load->model('setting');
		$this->load->model('student');
		$this->load->model('meeting');
	}

	public function index()
	{
		if(@$_SESSION['student']) { redirect('lectures'); }
		if(@$_POST) { $this->login();}
		$data['page'] = ['title'=>'Login','slug'=>$this->path.'login'];
		$this->setting->basic_temp($data);
	}

	public function admin()
	{
		if(@$_POST) { $this->admin_login();}
		$data['page'] = ['title'=>'Admin Login','slug'=>$this->path.'admin_login'];
		$this->setting->basic_temp($data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}


	public function lectures()
	{
			if(@$_SESSION['student']) {
				(@$_POST) ? $this->start() : $this->allow_access();
			} else {
				redirect('/');
			}
	}

	public function start()
	{
		if(@$_POST['id']) {
			$id=$_POST['id'];
			$data['meeting']=$this->meeting->info($id);
			$data['student']=$this->student->info($id);
			$this->load->view('site/start', $data);
		} else {
			redirect('/');
		}
	}

	public function access()
	{
		header('content-type:application/json');
		$data['token']=$this->setting->login_access();
		echo json_encode($data);
	}

	private function admin_login()
	{
		$this->db->where('username', $_POST['username']);
		$this->db->where('password', md5($_POST['password']));
		$res = $this->db->get('users');
		if($res->num_rows() != 0) {
			$std = $res->row_array();
			$_SESSION['id'] = $std['id'];
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('danger', 'Invalid Login');
			redirect('/admin');
		}
	}

	private function login()
	{
		$this->db->where('email', $_POST['email']);
		$this->db->where('password', $_POST['password']);
		$res = $this->db->get('students');
		if($res->num_rows() != 0) {
			$std = $res->row_array();
			$_SESSION['student'] = $std['id'];
			$this->setting->student_login($std['id']);
			redirect('lectures');
		} else {
			$this->session->set_flashdata('danger', 'Invalid Login');
			redirect('/');
		}
	}

	private function allow_access()
	{
		$std = $this->student->info($_SESSION['student']);
		$data['meeting'] = $this->meeting->by_class($std['class']);
		$data['student'] = $std;
		$data['page'] = ['title'=> 'Online Lectures','slug'=>$this->path.'lectures'];
		$this->setting->basic_temp($data);
	}

}

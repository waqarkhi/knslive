<?php

class Student extends CI_Model
{
	protected $tab = 'students';
	public function list($class=false)
	{
		if($class != false) {
			$this->db->where('class', $class);
			return $this->db->get($this->tab)->result_array();
		} else {
			$this->db->select('DISTINCT(class)');
			$this->db->group_by('class');
			$classes=$this->db->get($this->tab)->result_array();
			return $this->count($classes);
		}
	}

	public function count($classes)
	{
		$data = [];
		foreach ($classes as $c) {
			$this->db->where('class', $c['class']);
			$students = $this->db->get($this->tab)->num_rows();
			$data[] = [
				'class' => $c['class'],
				'count' => $students
			];
		}
		return $data;
	}

	public function info($id)
	{
		$this->db->where('id', $id);
		return $this->db->get($this->tab)->row_array();
	}

	public function add($redirect)
	{
		$data = [
			'fullname' => $_POST['fullname'],
			'phone' => $_POST['phone'],
			'email' => $_POST['email'],
			'password' => $_POST['password'],
			'class' => $_POST['class'],
			'status' => @$_POST['status']
		];
		$this->db->insert($this->tab, $data);
		redirect($redirect);
	}


	public function update($id,$redirect)
	{
		$data = [
			'fullname' => $_POST['fullname'],
			'phone' => $_POST['phone'],
			'password' => $_POST['password'],
			'class' => $_POST['class'],
			'status' => @$_POST['status']
		];
		$this->db->where('id', $id);
		$this->db->update($this->tab, $data);
		redirect($redirect);
	}
}
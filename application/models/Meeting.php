<?php 
class Meeting extends CI_Model
{
	protected $tab = 'meetings';
	public function list()
	{
		return $this->db->get($this->tab)->result_array();
	}

	public function info($id)
	{
		$this->db->where('id', $id);
		return $this->db->get($this->tab)->row_array();
	}

	public function by_class($class)
	{
		$this->db->where('class', $class);
		return $this->db->get($this->tab)->row_array();
	}

	public function add($red)
	{
		$data = [
			'class' => $_POST['class'],
			'meeting_id' => $_POST['meeting_id'],
			'password' => $_POST['password'],
			'description' => $_POST['description'],
			'api' => $_POST['api'],
			'secret' => $_POST['secret']
		];
		$this->db->insert($this->tab, $data);
		redirect($red);
	}


	public function update($id, $red)
	{
		$data = [
			'class' => $_POST['class'],
			'meeting_id' => $_POST['meeting_id'],
			'password' => $_POST['password'],
			'description' => $_POST['description'],
			'api' => $_POST['api'],
			'secret' => $_POST['secret']
		];

		$this->db->where('id', $id);
		$this->db->update($this->tab, $data);
		redirect($red);
	}

}
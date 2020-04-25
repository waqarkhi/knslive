<?php
class Setting extends CI_Model
{
	protected $tab = 'settings';
	public function admin_temp($data)
	{
		$head = $this->get_by_name('head');
		$head = str_replace('[seo_desc]', '', $head);
		$head = str_replace('[page_title]', $data['page']['title'], $head);

		$data['head'] = $head;
		$data['header'] = $this->get_by_name('header');
		$data['sidebar'] = $this->get_by_name('sidebar');
		$data['topbar'] = $this->get_by_name('topbar');
		$data['footer'] = $this->get_by_name('footer');
		$this->load->view('layout/admin',$data);
	}

	public function basic_temp($data)
	{
		$head = $this->get_by_name('head');
		$head = str_replace('[seo_desc]', 'KnS Online | Technology Partner TSB Education', $head);
		$head = str_replace('[page_title]', $data['page']['title'], $head);

		$data['head'] = $head;
		$data['footer'] = $this->get_by_name('footer');
		$this->load->view('layout/basic',$data);
	}

	public function get_by_name($name)
	{
		$this->db->where('name', $name);
		$body = $this->db->get($this->tab)->row_array()['body'];
		$body = str_replace('[base_url]', base_url(), $body);
		if(@$_SESSION['id']) {
			$user = $this->loguser();
			$body = str_replace('[logged_name]', $user['fullname'], $body);
		}
		return $body;
	}
	public function loguser()
	{
		$this->db->where('id', $_SESSION['id']);
		return $this->db->get('users')->row_array();
	}
	public function get($id=false)
	{
		if ($id != false) {$this->db->where('id',$id);}
		return $this->db->get($this->tab)->result_array();
	}
	public function delete($id) { $this->db->where('id', $id); return $this->db->delete($this->tab);}
	public function add($data){return $this->db->insert($this->tab, $data);}
	public function update($data){$this->db->where('id', $data['id']);unset($data['id']);return $this->db->update($this->tab, $data);}
	public function role($role)
	{
		if(@$_SESSION['id']){
			$this->db->where('id', $_SESSION['id']);
			$user = $this->db->get('users')->row_array();
			if($user['role'] != $role) {redirect('/');}
		} else {
			redirect('/');
		}
	}

	public function student_login($id)
	{
		$time = time();
		$data = ['login'=>base64_encode($time)];
		$this->db->where('id', $id);
		$this->db->update('students', $data);
		return true;
	}

	public function login_access()
	{
		$this->db->where('id',$_SESSION['student']);
		return $this->db->get('students')->row_array()['login'];
	}
}
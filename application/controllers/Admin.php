<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'controllers/Base.php');

class Admin extends Base {

	public function index()	{
		if ($this->admin) {
			$this->load_header('Dashboard', true);
			$this->load->view('admin/sidebar', array('com' => 'index', 'sub' => null));
			$this->load->view('admin/topbar');
			$this->load->view('admin/index');
			$this->load_footer(true);
		} else
			redirect('admin/signin');
	}

	public function signin() {
		if ($this->admin)
			redirect('admin/index');

		$messages = array();

		if ($this->post_exist()) {
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$reme = $this->input->post('remember');
			$messages['username'] = $user;
			$messages['password'] = $pass;
			$messages['remember'] = $reme;      //on
			$this->load->model('Admin_model');
			$data = $this->Admin_model->get_by_name($user);
			if ($data) {
				if ($data['Password'] == md5($pass)) {
					$this->session->set_userdata('admin', $data['ID']);
					redirect('admin/index');
				} else {
					$messages['reason'] = 'password';
				}
			} else {
				$messages['reason'] = 'nouser';
			}
		}

		$this->load->view('admin/signin', $messages);
	}

}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'controllers/Base.php');

class Admin extends Base {

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

	public function index()	{
		if ($this->admin) {
			$this->load_header('Dashboard', true);
			$this->load->view('admin/sidebar', array('com' => 'index', 'sub' => null));
			$this->load->view('admin/topbar', array('title' => 'Dashboard'));
			$this->load->view('admin/index');
			$this->load_footer(true, 'index');
		} else
			redirect('admin/signin');
	}

	public function user($com = 'list') {
		if ($this->admin) {
			if ($com == 'list')
				$title = 'Lista de usuarios';
			if ($com == 'create')
				$title = 'Crear nuevo usuario';

			$this->load_header($title, true);
			$this->load->view('admin/sidebar', array('com' => 'user', 'sub' => $com));
			$this->load->view('admin/topbar', array('title' => $title));
			$this->load->view('admin/index');
			$this->load_footer(true, 'user_' . $com);
		} else
			redirect('admin/signin');
	}

	public function customer($com = 'search') {
		if ($this->admin) {
			if ($com == 'search')
				$title = 'Buscar cliente';
			if ($com == 'create')
				$title = 'Crear cliente';
			if ($com == 'map')
				$title = 'Clientes en el mapa';

			$this->load_header($title, true);
			$this->load->view('admin/sidebar', array('com' => 'customer', 'sub' => $com));
			$this->load->view('admin/topbar', array('title' => $title));
			$this->load->view('admin/index');
			$this->load_footer(true, 'customer_' . $com);
		} else
			redirect('admin/signin');
	}

	public function zone($com = 'list') {
		if ($this->admin) {
			if ($com == 'list')
				$title = 'Lista de zonas';
			if ($com == 'create')
				$title = 'Crear zonas';
			if ($com == 'assign')
				$title = 'Asignar zonas';
			if ($com == 'optimize')
				$title = 'Optimización de rutas';

			$this->load_header($title, true);
			$this->load->view('admin/sidebar', array('com' => 'zone', 'sub' => $com));
			$this->load->view('admin/topbar', array('title' => $title));
			$this->load->view('admin/index');
			$this->load_footer(true, 'zone_' . $com);
		} else
			redirect('admin/signin');
	}

	public function task($com = 'list') {
		if ($this->admin) {
			if ($com == 'list')
				$title = 'Lista de tareas';
			if ($com == 'create')
				$title = 'Crear tareas';

			$this->load_header($title, true);
			$this->load->view('admin/sidebar', array('com' => 'task', 'sub' => $com));
			$this->load->view('admin/topbar', array('title' => $title));
			$this->load->view('admin/index');
			$this->load_footer(true, 'task_' . $com);
		} else
			redirect('admin/signin');
	}
}
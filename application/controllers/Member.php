<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base.php';

class Member extends Base {

	/**
	 * Login Module
	 */
	public function login() {
		if ($this->login) {
			redirect('member');
		}

		$messages = array();

		if ($this->post_exist()) {
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$reme = $this->input->post('remember');
			$messages['username'] = $user;
			$messages['password'] = $pass;
			$messages['remember'] = $reme;      //on
			$this->load->model('User_model');
			$data = $this->User_model->get_by_name($user);
			if ($data) {
				if ($data['Pass'] == md5($pass)) {
					$this->session->set_userdata('user', $data['ID']);
					redirect('member');
				} else {
					$messages['reason'] = 'password';
				}
			} else {
				$data = $this->User_model->get_by_email($user);
				if ($data) {
					if ($data['Pass'] == md5($pass)) {
						$this->session->set_userdata('user', $data['ID']);
						redirect('member');
					} else {
						$messages['reason'] = 'password';
					}
				} else {
					$messages['reason'] = 'nouser';
				}
			}
		}

		$this->load->view('member/login', $messages);
	}

	/**
	 * Logout Module
	 */
	public function signout() {
		$this->session->unset_userdata('user');
		redirect('front');
	}

	/**
	 * Index Page
	 */
	public function index()	{
		if ($this->login) {
			$data = array();
			$this->load->model('User_model');
			$user = $this->User_model->get_by_id($this->user->getId());
			$this->load_header(array('title' => 'Dashboard'));
			$this->load->view('member/topbar', array('com' => 'index', 'sub' => null, 'user' => $user));
			$this->load->view('member/index');
			$this->load->view('member/offset');
			$this->load_footer(array('name' => 'index'));
		} else {
			redirect('member/login');
		}
	}

	/**
	 * Task Management Page
	 * @param string $com
	 * @throws Exception
	 */
	public function task($com = 'create') {
		if ($this->login) {
			$data = array();
			$this->load->model('User_model');
			$user = $this->User_model->get_by_id($this->user->getId());
			$hparams = array();
			$fparams = array();

			if ($com === 'create') {
				$hparams['sweetalert'] = 'on';
				$fparams['sweetalert'] = 'on';
				$hparams['select2'] = 'on';
				$fparams['select2'] = 'on';
				$hparams['title'] = 'Crear una nueva tarea';
				$data['users'] = $this->User_model->get_normal_users($this->user->getId());
				$data['admin'] = $this->user->getId();
			}

			if ($com === 'mine') {
				$hparams['title'] = 'Tareas, creadas por mi';
				$hparams['datatable'] = 'on';
				$fparams['datatable'] = 'on';
			}

			if ($com === 'todo') {
				$hparams['title'] = 'Tareas, deben ser hechas por mi';
				$hparams['datatable'] = 'on';
				$fparams['datatable'] = 'on';
				$hparams['sweetalert'] = 'on';
				$fparams['sweetalert'] = 'on';
			}

			$fparams['name'] = 'task_' . $com;

			$this->load_header($hparams);
			$this->load->view('member/topbar', array('com' => 'task', 'sub' => $com, 'user' => $user));
			$this->load->view('member/task_' . $com, $data);
			$this->load->view('member/offset');
			$this->load_footer($fparams);
		} else {
			redirect('member/login');
		}
	}

	/**
	 * Request Management Page
	 * @param string $com
	 * @throws Exception
	 */
	public function request($com = 'submit') {
		if ($this->login) {
			$data = array();
			$this->load->model('User_model');
			$user = $this->User_model->get_by_id($this->user->getId());
			$hparams = array();
			$fparams = array();

			if ($com === 'submit') {
				$hparams['title'] = 'Crear una nueva solicitud';
				$hparams['datatable'] = 'on';
				$fparams['datatable'] = 'on';
				$hparams['summernote'] = 'on';
				$fparams['summernote'] = 'on';
				$hparams['sweetalert'] = 'on';
				$fparams['sweetalert'] = 'on';
			}

			if ($com === 'accepted') {
				$hparams['title'] = 'Solicitudes aceptadas';
			}

			if ($com === 'rejected') {
				$hparams['title'] = 'Solicitudes rechazadas';
			}

			$fparams['name'] = 'request_' . $com;

			$this->load_header($hparams);
			$this->load->view('member/topbar', array('com' => 'request', 'sub' => $com, 'user' => $user));
			$this->load->view('member/request_' . $com, $data);
			$this->load->view('member/offset');
			$this->load_footer($fparams);
		} else {
			redirect('member/login');
		}
	}
}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base.php';

class Admin extends Base {

	/**
	 * Login Module
	 */
	public function signin() {
		if ($this->admin) {
			redirect('admin/index');
		}

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

	/**
	 * Logout Module
	 */
	public function logout() {
		$this->session->unset_userdata('admin');
		redirect('admin');
	}

	/**
	 * Index Page
	 */
	public function index()	{
		if ($this->admin) {
			$this->load_header(array('title' => 'Dashboard'), true);
			$this->load->view('admin/sidebar', array('com' => 'index', 'sub' => null));
			$this->load->view('admin/topbar', array('title' => 'Dashboard'));
			$this->load->view('admin/index');
			$this->load_footer(array('name' => 'index'), true);
		} else {
			redirect('admin/signin');
		}
	}

	/**
	 * User Management Page
	 * @param string $com
	 * @throws Exception
	 */
	public function user($com = 'list') {
		if ($this->admin) {
			$title = '';
			$data = array();
			$hparams = array();
			$fparams = array();

			if ($this->post_exist()) {
				if ($com === 'create') {
					$email = $this->input->post('email');

					$this->load->model('User_model');
					$user = $this->User_model->get_by_email($email);

					if ($user) {
						$message = 'Este correo electrónico ya está registrado.';
					} else {
						$params = array(
							'Email' => $email,
							'Created_At' => date("Y-m-d H:i:s")
						);
						$id = $this->User_model->add_user($params);

						$zone = new DateTimeZone('America/Santo_Domingo');
						$now = new DateTime('now', $zone);
						$token = md5($now->format('Y-m-d H:i:s')) . md5($id) . md5($email) . md5('empty');

						$this->load->model('Token_model');
						$params = array('Token' => $token, 'User' => $id);
						$this->Token_model->add_token($params);

						$action = base_url() . 'front/first/' . $token;

						if ($this->invite($email, $action)) {
							$message = 'Invitación enviada.';
						} else {
							$message = 'No se puede enviar la invitación. Por favor, inténtelo de nuevo más tarde.';
						}
					}
				}
				$data['message'] = $message;
			}

			if ($com === 'list') {
				$hparams['title'] = 'Lista de usuarios';
				$hparams['datatable'] = 'on';
				$fparams['datatable'] = 'on';
			}

			if ($com === 'create') {
				$hparams['title'] = 'Crear nuevo usuario';
			}
			
			$fparams['name'] = 'user_' . $com;

			$this->load_header($hparams, true);
			$this->load->view('admin/sidebar', array('com' => 'user', 'sub' => $com));
			$this->load->view('admin/topbar', array('title' => $title));
			$this->load->view('admin/user_' . $com, $data);
			$this->load_footer($fparams, true);
		} else {
			redirect('admin/signin');
		}
	}

	/**
	 * Customer Management Page
	 * @param string $com
	 */
	public function customer($com = 'search') {
		if ($this->admin) {
			$title = '';
			$hparams = array();
			$fparams = array();

			$this->load->model('Customer_model');

			if ($com === 'search') {
				$title = 'Buscar cliente';
			}

			if ($com === 'create') {
				$title = 'Crear cliente';
			}

			if ($com === 'map') {
				$title = 'Clientes en el mapa';
			}

			$hparams['title'] = $title;
			$fparams['name'] = 'customer_' . $com;

			$this->load_header($hparams, true);
			$this->load->view('admin/sidebar', array('com' => 'customer', 'sub' => $com));
			$this->load->view('admin/topbar', array('title' => $title));
			$this->load->view('admin/customer_' . $com);
			$this->load_footer($fparams, true);
		} else {
			redirect('admin/signin');
		}
	}

	/**
	 * Zone Management Page
	 * @param string $com
	 */
	public function zone($com = 'list') {
		if ($this->admin) {
			$title = '';
			$hparams = array();
			$fparams = array();

			if ($com === 'list') {
				$title = 'Lista de zonas';
			}

			if ($com === 'create') {
				$title = 'Crear zonas';
			}

			if ($com === 'assign') {
				$title = 'Asignar zonas';
			}

			if ($com === 'optimize') {
				$title = 'Optimización de rutas';
			}

			$hparams['title'] = $title;
			$fparams['name'] = 'zone_' . $com;

			$this->load_header($hparams, true);
			$this->load->view('admin/sidebar', array('com' => 'zone', 'sub' => $com));
			$this->load->view('admin/topbar', array('title' => $title));
			$this->load->view('admin/zone_' . $com);
			$this->load_footer($fparams, true);
		} else {
			redirect('admin/signin');
		}
	}

	/**
	 * Task Management Page
	 * @param string $com
	 */
	public function task($com = 'list') {
		if ($this->admin) {
			$title = '';
			$hparams = array();
			$fparams = array();

			if ($com === 'list') {
				$title = 'Lista de tareas';
			}

			if ($com === 'create') {
				$title = 'Crear tareas';
			}

			$hparams['title'] = $title;
			$fparams['name'] = 'task_' . $com;

			$this->load_header($hparams, true);
			$this->load->view('admin/sidebar', array('com' => 'task', 'sub' => $com));
			$this->load->view('admin/topbar', array('title' => $title));
			$this->load->view('admin/task_' . $com);
			$this->load_footer($fparams, true);
		} else {
			redirect('admin/signin');
		}
	}

	/**
	 * Send Emails
	 * @param $email
	 * @param $action
	 * @return mixed
	 */
	private function invite($email, $action) {
		$this->config->load('app');

		$data = array();
		$data['appname'] = $this->config->item('name');
		$data['company'] = $this->config->item('company');
		$data['email'] = $this->config->item('email');
		$data['sender'] = 'admin';

		$data['action'] = $action;

		$this->email->initialize();
		$this->email->from($this->config->item('email'), $this->config->item('name'));
		$this->email->reply_to($this->config->item('email'), $this->config->item('name'));
		$this->email->to($email);
		$this->email->subject('Invitation for ' . $this->config->item('name'));
		$this->email->message($this->load->view('email/user_invitation-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/user_invitation-txt', $data, TRUE));

		return $this->email->send();
	}
}
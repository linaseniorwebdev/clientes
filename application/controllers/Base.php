<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/User.php';

class Base extends CI_Controller {

	public $user, $login, $admin;

	/**
	 * Default constructor
	 */
	public function __construct() {
		parent::__construct();

		if ($this->session->user) {
			$this->load->model('User_model');
			$user = $this->User_model->get_by_id($this->session->user);
			$this->user = User::init($user);
			$this->login = true;
		} else {
			$this->user = new User();
			$this->login = false;
		}

		if ($this->session->admin) {
			$this->admin = $this->session->admin;
		}
	}

	/**
	 * Load header file, with title
	 * @param array $params
	 * @param null $admin
	 */
	public function load_header($params = array(), $admin = null) {
		if ($admin) {
			$this->load->view('admin/header', $params);
		} else {
			$this->load->view('member/header', $params);
		}
	}

	/**
	 * Load footer file
	 * @param array $params
	 * @param null $admin
	 */
	public function load_footer($params = array(), $admin = null) {
		if ($admin) {
			$this->load->view('admin/footer', $params);
		} else {
			$this->load->view('member/footer', $params);
		}
	}

	/**
	 * Check if post data exist
	 */
	public function post_exist() {
		return isset($_POST) && count($_POST) > 0;
	}

	/**
	 * Check if get data exist
	 */
	public function get_exist() {
		return isset($_GET) && count($_GET) > 0;
	}

	/**
	 * Set output header as HTTP 400
	 */
	public function bad_request() {
		$this->output->set_status_header('400', 'Bad Request');
	}

	/**
	 * Set output header as HTTP 500
	 */
	public function server_error() {
		$this->output->set_status_header('500', 'Internal Server Error');
	}
}

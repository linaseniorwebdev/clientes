<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'core/User.php');

class Base extends CI_Controller {

	public $user, $login, $admin;

	/**
	 * Default constructor
	 */
	public function __construct() {
		parent::__construct();

		if ($this->session->user) {
			$this->load->model('Users');
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
	 */
	public function load_header($title, $admin = null) {
		if ($admin)
			$this->load->view('admin/header', array('title' => $title));
		else
			$this->load->view('front/header', array('title' => $title));
	}

	/**
	 * Load footer file
	 */
	public function load_footer($admin = null, $name = null) {
		if ($admin) {
			if ($name)
				$this->load->view('admin/footer', array('name' => $name));
			else
				$this->load->view('admin/footer');
		} else
			$this->load->view('front/footer');
	}

	/**
	 * Check if post data exist
	 */
	public function post_exist() {
		if (isset($_POST) && count($_POST) > 0)
			return true;
		return false;
	}

	/**
	 * Check if get data exist
	 */
	public function get_exist() {
		if (isset($_GET) && count($_GET) > 0)
			return true;
		return false;
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

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'controllers/Base.php');

class Front extends Base {

	public function index() {
		echo 'Index Page';
	}

	public function first($token = null) {
		if ($token === null) {
			redirect('front');
		}

		if ($this->post_exist()) {
			$this->load->model('User_model');

			$this->load->model('Token_model');
			$data = $this->Token_model->get_by_token($token);

			$params = array();
			$params['username'] = $this->input->post('username');
			$params['password'] = md5($this->input->post('password'));
			$params['firstname'] = $this->input->post('firstname');
			$params['lastname'] = $this->input->post('lastname');
			$params['last_ip'] = $this->input->post('ip');
			$params['status'] = 2;

			$this->User_model->update_user($data['user_id'], $params);

			$this->Token_model->delete_token($token);

			$this->session->unset_userdata('user');

			redirect('front');
		} else {
			$this->load->model('Token_model');
			$data = $this->Token_model->get_by_token($token);
			if ($data) {
				$user = $data['User'];
				$this->load->model('User_model');
				$user = $this->User_model->get_by_id($user);

				$this->load_header('Primera página');
				$this->load->view('front/first', array('user' => $user, 'token' => $token));
				$this->load_footer(array('name' => 'first'));
			} else {
				$this->load->view('404');
			}
		}
	}
}
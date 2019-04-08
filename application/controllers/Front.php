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

		$this->load->model('Token_model');

		if ($this->post_exist()) {
			$this->load->model('User_model');

			$data = $this->Token_model->get_by_token($token);

			$params = array();
			$params['User'] = $this->input->post('User');
			$params['Pass'] = md5($this->input->post('Pass'));
			$params['Last_IP'] = $this->input->post('IP');
			$params['Status'] = 1;

			$this->User_model->update_user($data['User'], $params);

			$this->Token_model->delete_token($token);

			$this->session->unset_userdata('user');

			redirect('front');
		} else {
			$data = $this->Token_model->get_by_token($token);
			if ($data) {
				$user = $data['User'];
				$this->load->model('User_model');
				$user = $this->User_model->get_by_id($user);

				$this->load_header(array('title' => 'Primera página', 'sweetalert' => 'on'));
				$this->load->view('front/first', array('user' => $user, 'token' => $token));
				$this->load_footer(array('name' => 'first', 'sweetalert' => 'on'));
			} else {
				$this->load->view('404');
			}
		}
	}
}
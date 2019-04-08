<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base.php';

class Api extends Base {

	/**
	 * User processing module
	 * @param string $com
	 */
	public function user($com = 'list') {
		$this->load->model('User_model');
		if ($com === 'list') {
			$data = array();
			$status = array(0 => 'No aplicado', 1 => 'Normal', 2 => 'Suspendido');

			$userData = $this->User_model->getRows($_POST);

			foreach ($userData as $user) {
				$created = date( 'Y-m-d', strtotime($user->Created_At));
				$data[] = array($user->ID, $user->User, $user->Email, $user->Last_IP, $status[$user->Status], $created, null);
			}

			$output = array(
				'draw' => $_POST['draw'],
				'recordsTotal' => $this->User_model->countAll(),
				'recordsFiltered' => $this->User_model->countFiltered($_POST),
				'data' => $data,
			);

			echo json_encode($output);
		} elseif ($com === 'update') {
			$params = array();

			$id = $this->input->post('ID');
			if ($id) {
				// Just skip this section
			} else {
				$id = $this->user->getId();
			}

			foreach ($_POST as $key => $value) {
				if ($key == 'id') continue;
				$params[$key] = $this->input->post($key);
			}

			$this->User_model->update_user($id, $params);
		} elseif ($com === 'check') {
			$id = $this->input->post('ID');
			if ($id) {
				// Just skip this section
			} else {
				$id = $this->user->getId();
			}
			$name = $this->input->post('Name');
			$user = $this->User_model->get_by_name($name);
			if ($user) {
				echo json_encode(array('reply' => 'exist'));
			} else {
				echo json_encode(array('reply' => 'safe'));
			}
		}
	}
}

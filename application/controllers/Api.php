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
			$name = $this->input->post('Name');
			$user = $this->User_model->get_by_name($name);
			if ($user) {
				echo json_encode(array('reply' => 'exist'));
			} else {
				echo json_encode(array('reply' => 'safe'));
			}
		}
	}

	/**
	 * Customer processing module
	 * @param string $com
	 */
	public function customer($com = 'list') {
		$this->load->model('Customer_model');
		if ($com === 'add') {
			$fields = $this->Customer_model->get_table_fields();
			$total = count($fields);
			$params = array('Customer_Status' => 'Inactivo', 'Credit_Status' => 'Inactivo');
			for ($i = 0; $i < $total; $i++) {
				if ($this->input->post($fields[$i]) != FALSE) {
					$params[$fields[$i]] = $this->input->post($fields[$i]);
				}
			}
			$this->Customer_model->add_customer($params);
			redirect('admin/customer/create');
		} elseif ($com === 'list') {
			$data = array();

			$customerData = $this->Customer_model->getRows($_POST);

			foreach ($customerData as $customer) {
				$data[] = array(
					$customer->ID,
					$customer->Code,
					$customer->Name,
					$customer->Address,
					'(' . $customer->Latitude . ', ' . $customer->Longitude . ')',
					$customer->Customer_Open_Date,
					$customer->Customer_Status,
					$customer->Business_Type,
					$customer->Outlet_Classification,
					$customer->Customer_Area,
					$customer->Sector,
					$customer->Contact_Person,
					$customer->Contact_No,
					$customer->Credit_Status,
					$customer->Credit_Limit,
					$customer->Credit_Term,
					$customer->KeyAccReg,
					$customer->KeyAccGrp,
					$customer->Cust_Disc,
					$customer->RNC_Cedula,
					$customer->Customer_Indicator,
					null,
					$customer->Latitude,
					$customer->Longitude
				);
			}

			$output = array(
				'draw' => $_POST['draw'],
				'recordsTotal' => $this->Customer_model->countAll(),
				'recordsFiltered' => $this->Customer_model->countFiltered($_POST),
				'data' => $data,
			);

			echo json_encode($output);
		} elseif ($com === 'update') {
			$fields = $this->Customer_model->get_table_fields();
			$total = count($fields);

			$params = array();

			for ($i = 0; $i < $total; $i++) {
				if ($this->input->post($fields[$i]) != FALSE) {
					$params[$fields[$i]] = $this->input->post($fields[$i]);
				}
			}

			$customer_code = $this->input->post('Code');

			$this->Customer_model->update_customer($customer_code, $params);

			redirect('admin/customer/search');
		} elseif ($com === 'locations') {
			$result = array('status' => 'fail');

			try {
				$data = $this->Customer_model->get_locations();

				$result['status'] = 'success';
				$result['data'] = $data;
			} catch (Exception $exc) {
				$result['error'] = '500';
				$result['description'] = $exc->getTraceAsString();
			}

			echo json_encode($result);
		}
	}

	/**
	 * Task processing module
	 * @param string $com
	 */
	public function task($com = 'create') {
		$this->load->model('Task_model');
		if ($com === 'create') {
			if ($this->login === true) {
				$Creator = $this->user->getName();
			} else {
				$Creator = '[' . $this->admin . ']';
			}
			$params = array(
				'Creator'       => $Creator,
				'Subject'       => $this->input->post('Subject'),
				'Details'       => $this->input->post('Details'),
				'Priority'      => $this->input->post('Priority'),
				'Created_At'    => date('Y-m-d'),
				'Assigned'      => $this->input->post('Assigned'),
				'Status'        => 1
			);
			$this->Task_model->add_task($params);
		} elseif ($com === 'list') {
			$this->load->model('Admin_model');
			$this->load->model('User_model');

			$data = array();

			$taskData = $this->Task_model->getRows($_POST);

			foreach ($taskData as $task) {
				$Creator = $task->Creator;
				if (strpos($Creator, '[') === 0) {
					$Admin = $this->Admin_model->get_by_id(substr($Creator, 1, -1));
					$Creator = $Admin['Admin'];
				} else {
					$User = $this->User_model->get_by_id($Creator);
					$Creator = $User['First'] . ' ' . $User['Last'];
				}
				$Assigned = $task->Assigned;
				$Users = explode(',', $Assigned);
				$Assigned = array();
				foreach ($Users as $User) {
					$Data = $this->User_model->get_by_id($User);
					$Assigned[] = $Data['First'] . ' ' . $Data['Last'];
				}
				$Assigned = implode(', ', $Assigned);
				$data[] = array(
					$task->ID,
					$Creator,
					$task->Subject,
					$task->Priority,
					$task->Created_At,
					$task->Ended_At,
					$task->Status,
					$task->Progress,
					$Assigned,
					null,
					$task->Details,
					$task->Remark
				);
			}

			$output = array(
				'draw' => $_POST['draw'],
				'recordsTotal' => $this->Task_model->countAll(),
				'recordsFiltered' => $this->Task_model->countFiltered($_POST),
				'data' => $data,
			);

			echo json_encode($output);
		}
	}
}

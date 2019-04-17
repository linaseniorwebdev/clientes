<?php

class User_model extends CI_Model {

	private $table, $column_order, $column_search, $order;

	/**
	 * Construct
	 */
	public function __construct() {
		parent::__construct();

		$this->table = 'users';
		$this->column_order = array(null, 'ID', 'User', 'Email', 'Last_IP', 'Status', 'Created_At');
		$this->column_search = array('User', 'Email', 'Last_IP');
		$this->order = array('ID' => 'asc');
	}

	/**
	 * Get data
	 * @param $postData
	 * @return mixed
	 */
	public function getRows($postData) {
		$this->_get_datatables_query($postData);
		if ($postData['length'] != -1) {
			$this->db->limit($postData['length'], $postData['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * Count all records
	 * @return mixed
	 */
	public function countAll() {
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	/**
	 * Count filtered records
	 * @param $postData
	 * @return mixed
	 */
	public function countFiltered($postData) {
		$this->_get_datatables_query($postData);
		$query = $this->db->get();
		return $query->num_rows();
	}

	/**
	 * Generate query strings
	 * @param $postData
	 */
	public function _get_datatables_query($postData) {
		$this->db->from($this->table);
		$i = 0;
		foreach($this->column_search as $item) {
			if($postData['search']['value']) {
				if ($i == 0) {
					$this->db->group_start();
					$this->db->like($item, $postData['search']['value']);
				} else {
					$this->db->or_like($item, $postData['search']['value']);
				}

				if (count($this->column_search) - 1 == $i) {
					$this->db->group_end();
				}
			}
			$i++;
		}

		if(isset($postData['order'])) {
			$this->db->order_by($this->column_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
		} else if(isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	/**
	 * Get all users
	 * @return mixed
	 */
	public function get_all_users() {
		$this->db->order_by('ID', 'asc');
		return $this->db->get('users')->result_array();
	}

	/**
	 * Get all normal users
	 * @param null $user
	 * @return mixed
	 */
	public function get_normal_users($user = null) {
		$this->db->order_by('ID', 'asc');
		if ($user) {
			$result = $this->db->get_where('users', array('Status' => '1', 'ID  != ' => $user))->result_array();
		} else {
			$result = $this->db->get_where('users', array('Status' => '1'))->result_array();
		}
		return $result;
	}

	/**
	 * Function to add new user
	 * @param $params
	 * @return mixed
	 */
	public function add_user($params) {
		$this->db->insert('users', $params);
		return $this->db->insert_id();
	}

	/**
	 * Function to update user
	 * @param $user
	 * @param $params
	 * @return mixed
	 */
	public function update_user($user, $params) {
		$this->db->where('ID', $user);
		return $this->db->update('users', $params);
	}

	/**
	 * Function to delete user
	 * @param $user
	 * @return mixed
	 */
	public function delete_user($user) {
		return $this->db->delete('users', array('ID' => $user));
	}

	/**
	 * Get all field names
	 * @return mixed
	 */
	public function get_table_fields() {
		return $this->db->list_fields('users');
	}

	/**
	 * Get user by email
	 * @param $email
	 * @return mixed
	 */
	public function get_by_email($email) {
		return $this->db->get_where('users', array('Email' => $email))->row_array();
	}

	/**
	 * Get user by name
	 * @param $name
	 * @return mixed
	 */
	public function get_by_name($name) {
		return $this->db->get_where('users', array('User' => $name))->row_array();
	}

	/**
	 * Get user by id
	 * @param $user
	 * @return mixed
	 */
	public function get_by_id($user) {
		return $this->db->get_where('users', array('ID' => $user))->row_array();
	}
}

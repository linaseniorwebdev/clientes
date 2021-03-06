<?php

class Request_model extends CI_Model {

	private $table, $column_order, $column_search, $order;

	/**
	 * Construct
	 */
	public function __construct() {
		parent::__construct();

		$this->table = 'requests';
		$this->column_order = array(null, 'ID');
		$this->column_search = array('Content');
		$this->order = array('ID' => 'asc');
	}

	/**
	 * Get data
	 * @param $postData
	 * @param null $type
	 * @return mixed
	 */
	public function getRows($postData, $type = null) {
		$this->_get_datatables_query($postData);
		if ($type) {
			if ($type === 'accepted') {
				$this->db->where('Status', 1);
			} else {
				$this->db->like('Status', 2);
			}
		} else {
			$this->db->like('Status', 0);
		}
		if ($postData['length'] != -1) {
			$this->db->limit($postData['length'], $postData['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * Count all records
	 * @param null $type
	 * @return mixed
	 */
	public function countAll($type = null) {
		$this->db->from($this->table);
		if ($type) {
			if ($type === 'accepted') {
				$this->db->where('Status', 1);
			} else {
				$this->db->like('Status', 2);
			}
		} else {
			$this->db->like('Status', 0);
		}
		return $this->db->count_all_results();
	}

	/**
	 * Count filtered records
	 * @param $postData
	 * @param null $type
	 * @return mixed
	 */
	public function countFiltered($postData, $type = null) {
		$this->_get_datatables_query($postData);
		if ($type) {
			if ($type === 'accepted') {
				$this->db->where('Status', 1);
			} else {
				$this->db->like('Status', 2);
			}
		} else {
			$this->db->like('Status', 0);
		}
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
	 * Get all tasks
	 * @return mixed
	 */
	public function get_all_tasks() {
		$this->db->order_by('ID', 'asc');
		return $this->db->get('tasks')->result_array();
	}

	/**
	 * Function to add new task
	 * @param $params
	 * @return mixed
	 */
	public function add_task($params) {
		$this->db->insert('tasks', $params);
		return $this->db->insert_id();
	}

	/**
	 * Function to update task
	 * @param $task
	 * @param $params
	 * @return mixed
	 */
	public function update_task($task, $params) {
		$this->db->where('ID', $task);
		return $this->db->update('tasks', $params);
	}

	/**
	 * Function to delete task
	 * @param $task
	 * @return mixed
	 */
	public function delete_task($task) {
		return $this->db->delete('tasks', array('ID' => $task));
	}

	/**
	 * Get all field names
	 * @return mixed
	 */
	public function get_table_fields() {
		return $this->db->list_fields('tasks');
	}

	/**
	 * Get task by id
	 * @param $task
	 * @return mixed
	 */
	public function get_by_id($task) {
		return $this->db->get_where('tasks', array('ID' => $task))->row_array();
	}
}

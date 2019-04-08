<?php

class Customer_model extends CI_Model {

	private $table, $column_order, $column_search, $order;

	/**
	 * Construct
	 */
	public function __construct() {
		parent::__construct();

		$this->table = 'customers';
		$this->column_order = array(null, 'ID', 'Code', 'Name', 'Outlet_Classification', 'Business_Type', 'Customer_Open_Date', 'Customer_Status', 'Customer_Area', 'Sector', 'Contact_Person', 'Contact_No', 'Address', 'Latitude', 'Longitude', 'Credit_Status', 'Credit_Limit', 'Credit_Term', 'KeyAccReg', 'KeyAccGrp', 'Cust_Disc', 'RNC_Cedula', 'Customer_Indicator');
		$this->column_search = array('Code', 'Name', 'Outlet_Classification', 'Business_Type', 'Customer_Open_Date', 'Customer_Status', 'Customer_Area', 'Sector', 'Contact_Person', 'Contact_No', 'Address', 'Latitude', 'Longitude', 'Credit_Status', 'Credit_Limit', 'Credit_Term', 'KeyAccReg', 'KeyAccGrp', 'Cust_Disc', 'RNC_Cedula', 'Customer_Indicator');
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
	 * Get all customers
	 * @return mixed
	 */
	public function get_all_customers() {
		$this->db->order_by('ID', 'asc');
		return $this->db->get('customers')->result_array();
	}

	/**
	 * Function to add new customer
	 * @param $params
	 * @return mixed
	 */
	public function add_customer($params) {
		$this->db->insert('customers', $params);
		return $this->db->insert_id();
	}

	/**
	 * Function to update customer
	 * @param $customer_code
	 * @param $params
	 * @return mixed
	 */
	public function update_customer($customer_code, $params) {
		$this->db->where('Code', $customer_code);
		return $this->db->update('customers', $params);
	}

	/**
	 * Function to delete customer
	 * @param $customer_code
	 * @return mixed
	 */
	public function delete_customer($customer_code) {
		return $this->db->delete('customers', array('Code' => $customer_code));
	}

	/**
	 * Get customer by customers' code
	 * @param $customer_code
	 * @return mixed
	 */
	public function get_by_code($customer_code) {
		return $this->db->get_where('customers', array('Code' => $customer_code))->row_array();
	}

	/**
	 * Get all field names
	 * @return mixed
	 */
	public function get_table_fields() {
		return $this->db->list_fields('customers');
	}

	/**
	 * Get min, max values of latitude, longitude
	 * @return mixed
	 */
	public function get_locations() {
		return $this->db->query('SELECT Latitude, Longitude, Address, Name, Code FROM customers')->result_array();
	}

	/**
	 * Get positioned customers
	 * @return mixed
	 */
	public function get_positioned() {
		$this->db->order_by('ID', 'asc');
		return $this->db->query('SELECT * FROM customers WHERE Latitude IS NOT NULL AND Longitude IS NOT NULL')->result_array();
	}

	/**
	 * Get customers registered in last 7 days
	 * @return mixed
	 */
	public function get_customers_last7() {
		$this->db->order_by('ID', 'asc');
		return $this->db->query('SELECT * FROM customers WHERE Customer_Open_Date >= DATE(NOW()) - INTERVAL 7 DAY')->result_array();
	}

	/**
	 * Get customers positioned in last 7 days
	 * @return mixed
	 */
	public function get_positioned_last7() {
		$this->db->order_by('ID', 'asc');
		return $this->db->query('SELECT * FROM customers WHERE Latitude IS NOT NULL AND Longitude IS NOT NULL AND Customer_Open_Date >= DATE(NOW()) - INTERVAL 7 DAY')->result_array();
	}

	/**
	 * Get last code
	 */
	public function get_last_code() {
		return $this->db->query('SELECT MAX(CONVERT(SUBSTRING(`Code`, 4), UNSIGNED INTEGER)) AS last_code FROM customers;')->row_array();
	}
}

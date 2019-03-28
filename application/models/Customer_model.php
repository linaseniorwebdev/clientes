<?php

class Customer_model extends CI_Model {

	// Get all customers
	public function get_all_customers() {
		$this->db->order_by('ID', 'asc');
		return $this->db->get('customers')->result_array();
	}

	// Function to add new customer
	public function add_customer($params) {
		$this->db->insert('customers', $params);
		return $this->db->insert_id();
	}

	// Function to update customer
	public function update_customer($customer_code, $params) {
		$this->db->where('Code', $customer_code);
		return $this->db->update('customers', $params);
	}

	// Function to delete customer
	public function delete_customer($customer_code) {
		return $this->db->delete('customers', array('Code' => $customer_code));
	}

	// Get customer by customers' code
	public function get_by_code($customer_code) {
		return $this->db->get_where('customers', array('Code' => $customer_code))->row_array();
	}

	// Get all field names
	public function get_table_fields() {
		return $this->db->list_fields('customers');
	}

	// Get min, max values of latitude, longitude
	public function get_locations() {
		return $this->db->query('SELECT Latitude, Longitude, Address, Name, Code FROM customers')->result_array();
	}

	// Get positioned customers
	public function get_positioned() {
		$this->db->order_by('ID', 'asc');
		return $this->db->query('SELECT * FROM customers WHERE Latitude IS NOT NULL AND Longitude IS NOT NULL')->result_array();
	}

	// Get customers registered in last 7 days
	public function get_customers_last7() {
		$this->db->order_by('ID', 'asc');
		return $this->db->query('SELECT * FROM customers WHERE Customer_Open_Date >= DATE(NOW()) - INTERVAL 7 DAY')->result_array();
	}

	// Get customers positioned in last 7 days
	public function get_positioned_last7() {
		$this->db->order_by('ID', 'asc');
		return $this->db->query('SELECT * FROM customers WHERE Latitude IS NOT NULL AND Longitude IS NOT NULL AND Customer_Open_Date >= DATE(NOW()) - INTERVAL 7 DAY')->result_array();
	}
}

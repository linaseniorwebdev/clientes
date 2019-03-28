<?php

class User_model extends CI_Model {

	// Get all users
	public function get_all_users() {
		$this->db->order_by('ID', 'asc');
		return $this->db->get('users')->result_array();
	}

	// Function to add new user
	public function add_user($params) {
		$this->db->insert('users', $params);
		return $this->db->insert_id();
	}

	// Function to update user
	public function update_user($user, $params) {
		$this->db->where('ID', $user);
		return $this->db->update('users', $params);
	}

	// Function to delete user
	public function delete_user($user) {
		return $this->db->delete('users', array('ID' => $user));
	}

	// Get all field names
	public function get_table_fields() {
		return $this->db->list_fields('users');
	}

	// Get user by email
	public function get_by_email($email) {
		return $this->db->get_where('users', array('Email' => $email))->row_array();
	}

	// Get user by id
	public function get_by_id($user) {
		return $this->db->get_where('users', array('ID' => $user))->row_array();
	}
}

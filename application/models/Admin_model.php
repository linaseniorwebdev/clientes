<?php

class Admin_model extends CI_Model {

	// Get Administrator by ID
	function get_by_id($id = 1) {
		return $this->db->get_where('admin', array('ID' => $id))->row_array();
	}

	// Get Administrator by Name
	function get_by_name($name) {
		return $this->db->get_where('admin', array('Admin' => $name))->row_array();
	}
}

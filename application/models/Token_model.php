<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Token_model extends CI_Model {

	public function get_all_tokens() {
		$this->db->order_by('ID', 'desc');
		return $this->db->get('Tokens')->result_array();
	}

	public function add_token($params) {
		$this->db->insert('Tokens', $params);
		return $this->db->insert_id();
	}

	public function delete_token($token) {
		return $this->db->delete('Tokens', array('token' => $token));
	}

	public function get_by_token($token) {
		return $this->db->get_where('Tokens', array('token' => $token))->row_array();
	}
}
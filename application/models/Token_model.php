<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Token_model extends CI_Model {

	/**
	 * Function to get all tokens
	 * @return mixed
	 */
	public function get_all_tokens() {
		$this->db->order_by('ID', 'desc');
		return $this->db->get('tokens')->result_array();
	}

	/**
	 * Function to add a token
	 * @param $params
	 * @return mixed
	 */
	public function add_token($params) {
		$this->db->insert('tokens', $params);
		return $this->db->insert_id();
	}

	/**
	 * Function to delete a token
	 * @param $token
	 * @return mixed
	 */
	public function delete_token($token) {
		return $this->db->delete('tokens', array('Token' => $token));
	}

	/**
	 * Function to fetch data by token
	 * @param $token
	 * @return mixed
	 */
	public function get_by_token($token) {
		return $this->db->get_where('tokens', array('Token' => $token))->row_array();
	}
}
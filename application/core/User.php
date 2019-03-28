<?php

class User {
	private $id;		// User ID
	private $name;		// Username
	private $email;     // Email Address
	private $ip;        // User's login IP

	public function __construct() {
		// Empty constructor
	}

	public static function init(array $arr) {
		$instance = new self();
		$instance->id = $arr['ID'];
		$instance->name = $arr['User'];
		$instance->email = $arr['Email'];
		$instance->ip = $arr['Last_IP'];
		return $instance;
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getIp() {
		return $this->ip;
	}
}
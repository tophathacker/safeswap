<?php

class Model {
// basic model class always starts a db object for use in any model
	function __construct() {
		$this->db = new Database();
	}

}
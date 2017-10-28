<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 
// Class : Base_model
// Default class to be connect with
//
// Method :	- get_settings() -> read HTTP HOST, search in tables and return the array of settings
//			-
//
// Called by: - home class
//

class Base_model extends CI_Model {

	public function __construct()
	{
		$this->load->helper('url');
	}
	
	public function get_settings()
	{
		return $_SERVER['HTTP_HOST'];
	}
}
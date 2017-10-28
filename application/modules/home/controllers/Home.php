<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 
// Class : Home
// Default class to be connect with
//
// Method :	- index() -> default method
//			-
//

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Base_model', 'base');
	}

	public function index()
	{
		echo "OK -> " . $this->base->get_settings();
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 
// Class : Error
// Digunakan untuk error trapping & error messaging
//
// Method :	- code_404() -> not found message used by CI system (see: routes config)
//			-
//

class Errors extends CI_Controller {
	
	public function code_404()
	{
		echo "404";
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function index(){
		$this->load->view('index');
	}

	function driyamedia(){
		$this->load->view('coming_soon');
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
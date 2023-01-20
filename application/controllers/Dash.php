<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('sts')!=1){
			$this->session->set_flashdata('flash', 'Login First Please');
			redirect(base_url('login'));
		}
	}

	function index(){
		$this->load->view('dashboard/dashboard');
	}

	function driyamedia(){
		$this->load->view('coming_soon');
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
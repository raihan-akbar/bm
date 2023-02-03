<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mc');
    date_default_timezone_set("Asia/Jakarta");
	}
	function index(){
		$this->load->view('index');
	}

	function article(){
		$data['article_lists'] = $this->Mc->article_lists()->result();
		$this->load->view('article_lists', $data);
	}

	function driyamedia(){
		$this->load->view('coming_soon');
	}
	
	function login(){
		if ($this->session->userdata('sts')==1){
			redirect(base_url('dash'));
		}
		$this->load->view('login');
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
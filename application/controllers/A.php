<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class A extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mc');
    date_default_timezone_set("Asia/Jakarta");
	}
	
	function index(){
		$this->load->view('404');
	}

	function content($token_article=null){
		if ($token_article != null) {
			$data['article_value'] = $this->Mc->article_value($token_article)->result();
			$this->load->view('article_pages', $data);

		}else{
			redirect(base_url('article'));
		}

	}

}

/* End of file A.php */
/* Location: ./application/controllers/A.php */
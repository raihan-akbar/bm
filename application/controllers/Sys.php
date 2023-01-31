<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class Sys extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Mc');
    date_default_timezone_set("Asia/Jakarta");
	}

	function auth(){
		$email = $this->input->post('email');	
		$password = $this->input->post('password');

		if ($email == null) {
			$this->session->set_flashdata('flash', 'Email or Password cannot be empty!');
			redirect(base_url('login'));
			}
		else if ($password == null) {
			$this->session->set_flashdata('flash', 'Email or Password cannot be empty!');
			redirect(base_url('login'));
		}
		else{
			$this->user_checker($email,$password);
		}
	}

	private function user_checker($email,$password){
		$where = array('email' => $email);
		$count = $this->Mc->get('user', $where)->num_rows();
		if ($count == 1) {
    	$info = $this->Mc->get('user', $where)->result();
			foreach ($info as $i) {}
			if (password_verify($password, $i->password)) {
				$data_session = array(
            'token' => $i->token,
            'sts' => 1
        );
        $this->session->set_userdata($data_session);
        redirect(base_url('dash'),$data);
			}else{
				$this->session->set_flashdata('flash', 'Incorrect Password, Please Try Again');
				redirect(base_url('login'));
			}
		}else{
			$this->session->set_flashdata('flash', 'Incorrect Email, Please Try Again');
			redirect(base_url('login'));
		}
	}

}

/* End of file Sys.php */
/* Location: ./application/controllers/Sys.php */
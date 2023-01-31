<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mc extends CI_Model {
	function get($table,$where){
		return $this->db->get_where($table,$where);
	}
	function add($data,$table){
		$this->db->insert($table,$data);
	}
	function del($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function upd($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function user_info(){
		$token = $this->session->userdata('token');
		return $this->db->query("SELECT * FROM user WHERE token='$token' ");
			
	}


}

/* End of file Mc.php */
/* Location: ./application/models/Mc.php */
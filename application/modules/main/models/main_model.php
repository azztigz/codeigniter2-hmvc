<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}	

	function getUsers($offset = null, $limit = null){

		$this->db->select('users.user_id');
		$this->db->select('users.user_email');
		$this->db->select("CONCAT(users.user_fname,' ',users.user_lname) as name", FALSE);
		$this->db->select('users.user_fname');
		$this->db->select('users.user_lname');
		$this->db->select('users.user_phone');
		$this->db->select('users.user_address');

		$res = $this->db->get('users', $limit, $offset);
		
		return $res;
	}

	function saveUser($data){
		$this->db->insert('users', $data);
	}	

	function getUser($id){
		$this->db->where('users.user_idPK', $id);
		$res = $this->db->get('users'); 
		return $res->row();
	}

	function updateUser($data, $id){
		$this->db->where('user_idPK', $id);
		$this->db->update('users', $data); 
	}	

	function removeUser($id){
		$this->db->delete('users', array('user_idPK' => $id));
	}

}

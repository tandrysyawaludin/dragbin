<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
 
	function create($data){
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}
	
	function update($new_data, $id) {
	    $this->db->update('users', $new_data, array('id' => $id));
		return $this->db->affected_rows();
	}

	function get_by_auth($email, $password) {
	    $where = array(
			'email' => $email,
			'password' => sha1($password),
			'email_verified' => true
		);
		$data = $this->db->get_where('users', $where);
		$data_result = array();
		
		if ($this->db->affected_rows() > 0) {
    		$data_result = array(
    		    'user_id' => $data->row()->id,
    		    'user_name' => $data->row()->name,
    		    'user_photo' => $data->row()->photo,
    	    );
		}
		
		return $data_result;
	}

	function get_by($param) {
		$query = $this->db->get_where('users', $param);
		return $query->row_array();
	}
	
	function verify_email($email) {
		$new_data = array("email_verified"=> 1);
		$this->db->where("email", $email);
		$this->db->update("users", $new_data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
 
	function create($data){
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	function get_by_auth($email, $password) {
	    $where = array(
			'email' => $email,
			'password' => sha1($password),
			'email_confirmed' => true
		);
		$data = $this->db->get_where('users', $where);
		$data_result = array();
		
		if ($this->db->affected_rows() > 0) {
    		$data_result = array(
    		    'user_id' => $data->row()->id,
    		    'package_id' => $data->row()->package_id,
    		    'departement_id' => $data->row()->departement_id,
    		    'access_type' => $data->row()->access_type,
    	    );
		}
		
		return $data_result;
	}

	function get_by_id($params) {
		$data = $this->db->get_where('users', $params);
		$data = $data->result_array();
		return $data;
	}
	
	function verify_email($email) {
		$new_data = array("email_verified"=> 1);
		$this->db->where("email", $email);
		$this->db->update("users", $new_data);
	}
}

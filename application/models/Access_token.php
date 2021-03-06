<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access_token extends CI_Model{
 
	function create($data){
		$this->db->insert('access_token', $data);
		return $this->db->insert_id();
	}

	function get_by_user_id($user_id) {
	    $params = array(
			'user_id' => $user_id,
			'is_active' => true
		);
		$data = $this->db->get_where('access_token', $params);
		$data = $data->result_array();
		return $data;
	}
	
	function deactive($user_id) {
	    $this->db->set('updated_at', 'NOW()', FALSE);
	    $this->db->set('is_active', false);
	    $this->db->where('user_id', $user_id);
	    $this->db->update('access_token');
		return $this->db->affected_rows();
	}
}

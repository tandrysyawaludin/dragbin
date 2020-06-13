<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Model{
 
	function create($data){
		$this->db->insert('deliveries', $data);
		return $this->db->insert_id();
	}
	
	function get_by($param) {
		return $this->db->get_where('deliveries', $param)->row_array();
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Model{
 
	function create($data){
		$this->db->insert('payments', $data);
		return $this->db->insert_id();
	}
}

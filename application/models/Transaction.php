<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Model {
 
	function create($data){
		$this->db->insert('transactions', $data);
		return $this->db->insert_id();
	}
	
	function update($new_data, $id) {
	    $this->db->update('transactions', $new_data, array('id' => $id));
		return $this->db->affected_rows();
	}

    function get_transactions_by_status_and_order_by($params) {
	    $this->db->select('
	        transactions.id as id,
	        transactions.total_pay as total_pay,
	        transactions.description as description,
	        transactions.status as status,
	        transactions.updated_at as updated_at
	    ');
        if (isset($params["seller_id"])) {
            $this->db->select('users.name as buyer_name');
	        $this->db->join('users', 'users.id = transactions.buyer_id');
            $this->db->where('transactions.seller_id', $params['seller_id']);
        }
        else {
            $this->db->select('users.name as seller_name');
	        $this->db->join('users', 'users.id = transactions.seller_id');
            $this->db->where('transactions.buyer_id', $params['buyer_id']);
        }
        $this->db->where('transactions.status', $params['status']);
        $this->db->order_by("transactions.{$params['column']}", $params['sort']);
        $data = $this->db->get('transactions', 10, $params['next_offset'])->result_array();
		return $data;
	}
	
	function get_transaction_by_id($params) {
	    $this->db->select('
	        transactions.id,
	        transactions.total_pay,
	        transactions.description,
	        transactions.status,
	        transactions.updated_at
	    ');
        if (isset($params["seller_id"])) {
            $this->db->select('users.name as buyer_name');
	        $this->db->join('users', 'users.id = transactions.buyer_id');
            $this->db->where('transactions.seller_id', $params['seller_id']);
        }
        else {
            $this->db->select('users.name as seller_name');
	        $this->db->join('users', 'users.id = transactions.seller_id');
            $this->db->where('transactions.buyer_id', $params['buyer_id']);
        }
	    $this->db->where('transactions.id', $params['transaction_id']);
        $data = $this->db->get('transactions', 1)->row();
		return $data;
	}
}

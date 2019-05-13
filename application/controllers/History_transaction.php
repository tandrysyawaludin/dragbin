<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_Transaction extends MY_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('transaction');
		$this->load->helper('url');
	}
	
	function index() {
	    $page = $this->input->get('page', TRUE);
	    
		if ($this->verify_signedin()) {
		    $transactions = $this->show_sell_transactions_by_status_and_order_by('created', $page);
		    $data = array(
		        'transactions' => $transactions,
		        'next_page' => $page+1,
		        'current_page' => $page
		    );
		    $this->load->view('transaction_page', $data);
		}
		else {		
			redirect('signin');		
		}		
	}
	
	function filter_transaction() {
	    $transaction_status = $this->input->get('ts', TRUE);
	    $page = $this->input->get('page', TRUE);
	    
		if ($this->verify_signedin()) {
		    $transactions = $this->show_sell_transactions_by_status_and_order_by($transaction_status, $page);
		    $data = array(
		        'transactions' => $transactions,
		        'next_page' => $page+1,
		        'current_page' => $page
		    );
		    $this->load->view('transaction_page', $data);
		}
		else {		
			redirect('signin');		
		}
	}
	
	function show_sell_transactions_by_status_and_order_by($status, $page) {
	    $param = array(
	        "user_id" => $this->session->user_id,
	        "status" => $status,
	        "column" => 'updated_at',
	        "sort" => 'desc',
	        "next_offset" => 10*$page
        );
	    return $this->transaction->get_sell_transactions_by_status_and_order_by($param);
	}
	
	function create_transaction() {
	    $this->load->view('create_transaction_page');
	}
}

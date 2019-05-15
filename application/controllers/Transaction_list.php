<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_List extends MY_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('transaction');
		$this->load->helper('url');
	}
	
	function index() {
	    $page = $this->input->get('page', TRUE);
	    $transaction_status = 'offered';
	    
		if ($this->verify_signedin()) {
		    $transactions = $this->show_sell_transactions_by_status_and_order_by($transaction_status, $page);
		    $data = array(
		        'transactions' => $transactions,
		        'next_page' => $page+1,
		        'current_page' => $page,
		        'transaction_status' => $transaction_status
		    );
		    $this->load->view('transaction_list_page', $data);
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
		        'current_page' => $page,
		        'transaction_status' => $transaction_status
		    );
		    $this->load->view('transaction_list_page', $data);
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
	
	function create_offer() {
	    $partner_code = $this->input->get('pc', TRUE);
	    $data = array('partner_code' => $partner_code);
	    $this->load->view('create_offer_page', $data);
	}
	
	function post_new_offer() {
	    $data = array(
            'partner_code' => $this->input->post('partner_code'),
            'total_pay' => $this->input->post('total_pay'),
            'description' => $this->input->post('description'),
            'courier_name' => $this->input->post('courier_name'),
            'courier_phone_number' => $this->input->post('courier_phone_number'),
            'seller_id' => $this->session->user_id
        );
        
        $data_session = array(
            'status' => 'failed',
            'message' => 'Please check your input'
        );
        
		if ($this->transaction->create($data) > 0) {
		    $data_session = array(
                'status' => 'success',
                'message' => 'Offer has been created'
            );
		}

        $this->session->set_userdata($data_session);
        redirect('transaction_list');
	}
}

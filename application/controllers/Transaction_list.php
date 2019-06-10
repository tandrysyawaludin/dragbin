<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_List extends MY_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('transaction');
        $this->load->model('user');
		$this->load->helper('url');
	}
	
	protected function middleware() {
        return array('user_auth');
    }
	
	function index() {
	    $page = $this->input->get('page', TRUE);
	    $transaction_status = 'offered';
	    $transaction_target = 'to_me';
	    $transactions = $this->show_transactions_by_status_and_order_by($transaction_target, $transaction_status, $page);
	    $data = array(
	        'transactions' => $transactions,
	        'next_page' => $page+1,
	        'current_page' => $page,
	        'transaction_status' => $transaction_status,
	        'transaction_target' => $transaction_target,
	        'currency' => 'Rp'
	    );
	    $this->load->view('transaction_list_page', $data);	
	}
	
	function filter_transaction() {
	    $transaction_status = $this->input->get('ts', TRUE);
	    $transaction_target = $this->input->get('tt', TRUE);
	    $page = $this->input->get('page', TRUE);
	    $transactions = $this->show_transactions_by_status_and_order_by($transaction_target, $transaction_status, $page);
	    $data = array(
	        'transactions' => $transactions,
	        'next_page' => $page+1,
	        'current_page' => $page,
	        'transaction_status' => $transaction_status,
	        'transaction_target' => $transaction_target,
	        'currency' => 'Rp'
	    );
	    $this->load->view('transaction_list_page', $data);
	}
	
	function show_transactions_by_status_and_order_by($transaction_target, $transaction_status, $page) {
	    $param = array(
	        "status" => $transaction_status,
	        "column" => 'updated_at',
	        "sort" => 'desc',
	        "next_offset" => 10*$page
        );
        
        if ($transaction_target == 'from_me') {
            $param["seller_id"] = $this->session->user_id;
        }
        else {
            $param["buyer_id"] = $this->session->user_id;
        }
        
	    return $this->transaction->get_transactions_by_status_and_order_by($param);
	}
	
	function show_detail_transaction() {
	    $params['transaction_id'] = $this->input->get('id', TRUE);
	    
	    if ($this->input->get('tt', TRUE) == 'from_me') {
            $params["seller_id"] = $this->session->user_id;
        }
        else {
            $params["buyer_id"] = $this->session->user_id;
        }
        
	    $data = array('transaction' => $this->transaction->get_transaction_by_id($params));
	    $this->load->view('transaction_detail_page', $data);
	}
	
	function create_offer() {
	    $partner_code = $this->input->get('pc', TRUE);
	    $data = array('partner_code' => $partner_code);
	    $this->load->view('create_offer_page', $data);
	}
	
	function create_acceptance_offering() {
	    $updated_transaction = array('status' => 'accepted');
	    $transaction_id = $this->input->post('transaction_id');
	    $this->transaction->update($updated_transaction, $transaction_id);
	    redirect('transaction_list/show_detail_transaction?id='.$transaction_id.'&tt=from_me');
	}
	
	function post_new_offer() {
	    $user_id = $this->user->verify_partner_code($this->input->post('partner_code'));
	    
	    if ($user_id > 0 && $user_id !== $this->session->user_id) {
    	    $data = array(
                'seller_id' => $user_id,
                'total_pay' => $this->input->post('total_pay'),
                'description' => $this->input->post('description'),
                'buyer_id' => $this->session->user_id
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
	    else {
	        $data_session = array(
                'status' => 'failed',
                'message' => 'Partner Code is not be accessed'
            );
            
            $this->session->set_userdata($data_session);
            redirect('transaction_list');
	    }
	}
}

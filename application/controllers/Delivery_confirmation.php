<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_confirmation extends MY_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('delivery');
        $this->load->model('transaction');
	}
	
	protected function middleware() {
        return array('user_auth|only:index');
    }
	
	function index() {
	    $data = array(
            'transaction_id' => $this->input->post('transaction_id')
        );
        
	    $this->load->view('delivery_confirmation_page', $data);
	}
	
	function create_delivery_confirmation() {
	    $transaction_id = $this->input->post('transaction_id');
		$delivery_photo = $this->upload_delivery_photo($this, $transaction_id);
	    
	    if (sizeof($delivery_photo) > 0) {
    	    $data = array(
    			'transaction_id' => $transaction_id,
    			'courier_name' => $this->input->post('courier_name'),
    			'courier_phone_number' => $this->input->post('courier_phone_number'),
    			'other_detail' => $this->input->post('other_detail'),
    			'delivery_photo' => $delivery_photo
    		);
    		$updated_transaction = array('status' => 'delivered');
    		    
    		if ($this->delivery->create($data) && $this->transaction->update($updated_transaction, $transaction_id)) {
    		    redirect('transaction_list/show_detail_transaction?id='.$transaction_id.'&tt=from_me');
    		}
	    }
	    else {
	        $data_session = array(
                'status' => 'failed',
                'message' => 'Please check your input'
            );
            
            $this->session->set_userdata($data_session);
            
            redirect('delivery_confirmation');
	    }
	}
	
	function upload_delivery_photo($delivery_photo, $transaction_id) {
        $config['upload_path'] = './delivery_photo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5000;
        $config['file_name'] = $transaction_id;
        $this->load->library('upload', $config);
        
        if ($delivery_photo->upload->do_upload('delivery_photo')) {
            return $this->upload->data()["file_name"];
        }
        
        return "";
	}
	
	function show_delivery_detail() {
	    $param = array('transaction_id' => $this->input->post('transaction_id'));
	    $data = array('delivery' => $this->delivery->get_by($param));
	    $this->load->view('delivery_detail_page', $data);
	}
}

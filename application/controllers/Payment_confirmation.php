<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_confirmation extends MY_Controller {
  
  function __construct() {
    parent::__construct();
    $this->load->model('payment');
    $this->load->model('transaction');
  }
  
  protected function middleware() {
    return array('user_auth|only:index');
  }
  
  function index() {
    $data = array(
      'transaction_id' => $this->input->post('transaction_id'),
      'destination_account_number' => array('BCA' => '3469797921', 'BRI' => '12388979879')
    );
    
    $this->load->view('payment_confirmation_page', $data);
  }
  
  function create_payment_confirmation() {
    $transaction_id = $this->input->post('transaction_id');
    $payment_slip = $this->upload_payment_slip($this, $transaction_id);
    
    if (sizeof($payment_slip) > 0) {
      $data = array(
        'transaction_id' => $transaction_id,
        'total_payment' => $this->input->post('total_payment'),
        'source_account_number' => $this->input->post('source_account_number'),
        'destination_account_number' => $this->input->post('destination_account_number'),
        'status' => $this->input->post('status'),
        'payment_slip' => $payment_slip
      );
      $updated_transaction = array('status' => 'paid');
      
      if ($this->payment->create($data) && $this->transaction->update($updated_transaction, $transaction_id)) {
        redirect('transaction_list/show_detail_transaction?id='.$transaction_id.'&tt=to_me');
      }
    }
    else {
      $data_session = array(
        'status' => 'failed',
        'message' => 'Please check your input'
      );
      
      $this->session->set_userdata($data_session);
      
      redirect('payment_confirmation');
    }
  }
  
  function upload_payment_slip($payment_slip, $transaction_id) {
    $config['upload_path'] = './payment_slip/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 5000;
    $config['file_name'] = $transaction_id;
    $this->load->library('upload', $config);
    
    if ($payment_slip->upload->do_upload('payment_slip')) {
      return $this->upload->data()["file_name"];
    }
    
    return "";
  }
}

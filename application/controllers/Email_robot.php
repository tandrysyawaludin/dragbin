<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_robot extends MY_Controller {
  
  function __construct() {
    parent::__construct();
  }
  
  protected function middleware() {
    return array('user_auth');
  }
  
  function index() {
    echo "hi";
  }
  
  function send_email($to, $from, $message, $header, $subject) {
    $this->load->library("email");
    $this->email->set_newline("\r\n");
    $this->email->from($from, $header);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send()) {
      echo "success";
    }
    else {
      show_error($this->email->print_debugger());
      // return false;
    }
  }
}

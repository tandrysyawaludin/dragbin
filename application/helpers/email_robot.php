<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function send_email($to, $from, $message, $header, $subject) {
    $this->load->library("email");
    $this->email->set_newline("\r\n");
    $this->email->from($from, $header);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send()) {
        echo "success";
        // return true;
    }
    else {
        // show_error($this->email->print_debugger());
        return false;
    }
}
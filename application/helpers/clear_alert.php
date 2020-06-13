<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function clear_alert($pure_string) {
  $this->session->unset_userdata('status');
  $this->session->unset_userdata('message');

  return
}
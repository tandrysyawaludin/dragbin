<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help_center extends MY_Controller {
  
  function __construct() {
    parent::__construct(); 
    $this->load->helper('url');
  }
  
  public function index() {
    $this->load->view('help_center_page');
  }
}

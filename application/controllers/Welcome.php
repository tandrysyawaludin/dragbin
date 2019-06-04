<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct() {
        parent::__construct(); 
		$this->load->helper('url');
	}
	
	protected function middleware() {
        return array('user_auth');
    }
	
	public function index() {
		$this->load->view('welcome_page');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	protected $signedin = false;
	
	function __construct(){
		parent::__construct();
		$this->load->model('access_token');
		$this->verify_signedin();
	}

	function verify_signedin() {
		$user_id = $this->session->userdata('user_id');
	    $access_token = $this->access_token->get_by_user_id($user_id);
		$signedin = $user_id > 0 && sizeof($access_token) > 0;
	}
}

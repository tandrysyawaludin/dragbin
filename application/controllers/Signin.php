<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends MY_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('user');
		$this->load->helper('url');
	}

	function index() {
		if ($this->signedin) {
		    redirect('home');
		}
		else {
			session_destroy();			
			$this->load->view('signin_page');			
		}		
	}

	function authenticate_user(){		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = $this->user->get_by_auth($email, $password);
		
		if (sizeof($data) > 0) {
			$data_session = array(
				'user_id' => $data["user_id"],
				'user_name' => $data["user_name"],
				'user_photo' => $data["user_photo"],
				'message' => 'Signin Success',
				'status' => 'success',
			);
			$this->session->set_userdata($data_session);
			redirect('home');
		} else {
			$data_session = array(
				'message' => 'Signin Failed, please re-check your data',
				'status' => 'failed',
			);

			$this->session->set_userdata($data_session);
			redirect('signin');
		}
	}

	function revoke_auth_authentication() {
		session_destroy();
		redirect('/');
	}
	
}

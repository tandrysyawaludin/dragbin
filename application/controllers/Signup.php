<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends MY_Controller {

	function __construct() {
		parent::__construct();		
		$this->load->model('user');
		$this->load->model('post');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
	}
	
	protected function middleware() {
        return array('user_auth|only:index');
    }

	function index() {
		$this->load->view('signup_page');
	}
	
	function verify_email() {
        $code_confirmation = $this->input->get('vt', TRUE);
        $res_decode = base64_decode($code_confirmation);
        $this->user->verify_email($res_decode);
        $data_session = array(
            'status' => 'success',
            'message' => 'Success to verify email, please Sign In.'
        );
        
        $this->session->set_userdata($data_session);
        redirect('signin');
    }
	
	function create_user() {
	    $valid_data = $this->check_params_create_user();
	    
	    if(!is_null($valid_data)) {
	        $this->post_new_user($valid_data);
	    }
	    
        $data_session = array(
            'status' => 'failed',
            'message' => 'Please check your input'
        );
        $this->session->set_userdata($data_session);
        redirect('signup');
	}

	private function check_params_create_user() {
		$email = strtolower($this->input->post('email'));
		$password = $this->input->post('password');
		$phone_number = $this->input->post('phone_number');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$map_link = $this->input->post('map_link');
		$whatsapp = $this->input->post('whatsapp');
		$facebook = $this->input->post('facebook');
		
        $data = array(
            'email' => $email,
            'password' => sha1($password),
            'phone_number' => $phone_number,
            'name' => $name,
            'address' => $address,
            'map_link' => $email,
            'whatsapp' => $whatsapp,
            'facebook' => $facebook
        );
        
        if (isset($email) && isset($password) && isset($phone_number) && isset($name) && isset($address)) {
            return $data;
        }
        return null;
	}
	
	private function post_new_user($data) {
		$user_id = $this->user->create($data);
		
		if ($user_id > 0) {
			$this->send_verification_email($data['email']);
			$this->create_default_post($user_id);
			
			$data_session = array(
				'status' => 'success',
				'message' => 'Success to Sign Up, please check your inbox to activate account and then  Sign In'
			);

			$this->session->set_userdata($data_session);
			redirect('signin');
		}
		else {
			$data_session = array(
				'status' => 'failed',
				'message' => 'Email has already been taken.'
			);
			$this->session->set_userdata($data_session);	
			redirect('signup');			
		}
	}
	
	private function create_default_post($user_id) {
        $data = array(
            'user_id' => $user_id
        );
        
        $this->post->create($data);
    }
	
	private function send_verification_email_gmail($user_email) {
        $config = Array(
            'protocol' => "smtp",
            'smtp_host' => "smtp.gmail.com",
            'smtp_port' => "587",
            'smtp_user' => "hidragbin@gmail.com",
            'smtp_pass' => "dragbin123",
            'mailtype' => "html",
            'charset' => "utf-8",
            'wordwrap' => TRUE,
            'smtp_crypto' => "tls",
            'smtp_timeout' => "5"
        );
    
        $message = 'Please access this link to verify your email<br/><a href="https://dragbin.com/index.php/signup/verify_email?vt='.base64_encode($user_email).'">https://dragbin.com/index.php/signup/verify_email?vt='.base64_encode($user_email).'</a>';
        $this->load->library("email");
        $this->email->set_newline("\r\n");
        $this->email->from("hidragbin@gmail.com");
        $this->email->to($user_email);
        $this->email->subject("dragbin: Verify your email");
        $this->email->message($message);
        if($this->email->send()) {
            return true;
        }
        else {
            // show_error($this->email->print_debugger());
            return false;
        }
    }
    
    private function send_verification_email($user_email) {
        $message = 'Please access this link to verify your email https://dragbin.com/index.php/signup/verify_email?vt='.base64_encode($user_email);
        $this->load->library("email");
        $this->email->set_newline("\r\n");
        $this->email->from("hi@dragbin.com", "Hi Dragbin");
        $this->email->to($user_email);
        $this->email->subject("dragbin: Verify your email");
        $this->email->message($message);
        if($this->email->send()) {
            return true;
        }
        else {
            // show_error($this->email->print_debugger());
            return false;
        }
    }
}

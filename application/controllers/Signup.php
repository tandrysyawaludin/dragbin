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
		if ($this->user->create($data) > 0) {
			$this->send_mail($data['email']);
			
			$data_session = array(
				'status' => 'success',
				'message' => 'Success to Sign Up, please Sign In.'
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
	
	private function send_mail($user_email) {
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
        $this->load->library("email", $config);
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
}

        // Enable it if upload photo is available 		
        // Configuration for uploading photo
        // $config['upload_path'] = './user_img/';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size'] = 5000;
        // $config['file_name'] = strstr($email, '@', true);
        // $this->load->library('upload', $config);
        
        // if ($this->upload->do_upload('photo')) {
        // $data = array(
        // 'email' => $email,
        // 'password' => sha1($password),
        // 'phone_number' => phone_number,
        // 'name' => name,
        // 'address' => $address,
        // 'map_link' => $email,
        // 'photo' => $this->upload->data()["file_name"],
        // 'whatsapp' => $whatsapp,
        // 'facebook' => $facebook
        // );
        
        // if ($this->send_mail($email)) {
        // $this->post_new_user($data);
        // }
        // else {
        // $data_session = array(
        // 'status' => 'failed',
        // 'message' => 'Failed to send email verification, please try again or try with another email.'
        // );
        // $this->session->set_userdata($data_session);	
        // redirect('signup');
        // }
        // }
        // else {
        // $data_session = array(
        // 'status' => 'failed',
        // 'message' => $this->upload->display_errors()
        // );
        // $this->session->set_userdata($data_session);
        // redirect('signup');
        // }

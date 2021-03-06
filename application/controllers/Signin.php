<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends MY_Controller {
  
  function __construct(){
    parent::__construct();		
    $this->load->model('user');
    $this->load->model('access_token');
    $this->load->helper('url');
    $this->load->helper('encrypt_decrypt');
  }
  
  protected function middleware() {
    return array('user_auth|except:authenticate_user');
  }
  
  function index() {
    $this->session->unset_userdata('status');
    $this->session->unset_userdata('message');
    $this->load->view('signin_page');	
  }
  
  function authenticate_user(){		
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $data = $this->user->get_by_auth($email, $password);
    
    if (sizeof($data) > 0) {
      $this->set_access_token($data);
      $data_session = array(
        'user_id' => $data["user_id"],
        'user_name' => $data["user_name"],
        'user_partner_code' => $data["user_partner_code"],
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
  
  function set_access_token($data) {
    $data = array(
      'token' => encrypt(serialize($data)),
      'user_id' => $data["user_id"],
      'user_agent' => $_SERVER['HTTP_USER_AGENT']
    );
    $this->access_token->create($data);
  }
  
  function revoke_auth_authentication() {
    $user_id = $this->session->userdata('user_id');
    $this->access_token->deactive($user_id);
    session_destroy();
    redirect('/');
  }
  
}

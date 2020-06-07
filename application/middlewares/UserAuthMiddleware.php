<?php

class UserAuthMiddleware {
  protected $controller;
  protected $ci;
  
  public function __construct($controller, $ci) {
    $this->controller = $controller;
    $this->ci = $ci;
  }
  
  public function run(){
    $ci =&get_instance();
    $ci->load->model('access_token');
    $ci->load->helper('url');
    $user_id = $ci->session->userdata('user_id');
    $access_token = $ci->access_token->get_by_user_id($user_id);
    $before_login_route = array("signin", "", "signup");
    
    if ($user_id > 0 && sizeof($access_token) > 0 && in_array(uri_string(), $before_login_route)) {
      redirect('home');
      exit();
    }
    else if ($user_id <= 0 && sizeof($access_token) <= 0 && !in_array(uri_string(), $before_login_route)) {
      redirect('signin');
      exit();
    }
  }
}
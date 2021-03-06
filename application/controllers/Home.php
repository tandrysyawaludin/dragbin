<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
  
  function __construct() {
    parent::__construct();
    $this->load->model('post');
    $this->load->helper('url');
  }
  
  protected function middleware() {
    return array('user_auth');
  }
  
  function index() {
    if (empty($this->session->user_partner_code)) {
      redirect('user-post');
    }
    else {
      $page = $this->input->get('page', TRUE);
      $address = $this->input->get('address', TRUE);
      $posts = $this->show_posts_order_by_updated_at($page, trim(urldecode($address)," "));
      $prev_link = base_url()."index.php/home?page=".($page - 1);
      $next_link = base_url()."index.php/home?page=".($page + 1);

      if(sizeof($address) > 0) {
        $prev_link = $prev_link."&address=".$address;
        $next_link = $next_link."&address=".$address;
      }

      $data = array(
        'address' => $address,
        'curr_user_id' => $this->session->user_id,
        'posts' => $posts,
        // 'next_page' => $page+1,
        // 'current_page' => $page,
        'prev_link' => $page > 0 ? $prev_link : false,
        'next_link' => count($posts) < 10 ? false : $next_link
      );
      $this->load->view('home_page', $data);	
    }
  }
  
  function show_posts_order_by_updated_at($page, $address) {
    if(empty($address)) {
      $param = array(
        "column" => 'updated_at',
        "sort" => 'desc',
        "next_offset" => 10*$page
      );
      return $this->post->get_active_posts_order_by($param);
    }
    else {
      $param = array(
        "column" => 'updated_at',
        "sort" => 'desc',
        "next_offset" => 10*$page,
        "address" => $address
      );
      return $this->post->get_active_posts_by_address_order_by($param);
    }
  }
}

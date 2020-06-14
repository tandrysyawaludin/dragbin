<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_post extends MY_Controller {
  
  function __construct() {
    parent::__construct();
    $this->load->model('user');
    $this->load->model('post');
  }
  
  protected function middleware() {
    return array('user_auth');
  }
  
  function index() {
    $this->session->unset_userdata('status');
    $this->session->unset_userdata('message');
    $post = $this->show_user_post();
    $categories = $this->show_post_categories();
    
    $data = array(
      'post' => $post,
      'unchecked_categories' => array_diff($categories, explode(',', $post['categories']))
    );
    $this->load->view('show_post_page', $data);
  }
  
  function show_user_post() {
    $param = array('user_id' => $this->session->user_id);
    return $this->post->get_by($param);
  }
  
  function show_post_categories() {
    return $this->post->get_categories();
  }
  
  function edit_post() {	
    $param = array('user_id' => $this->session->user_id);	
    $categories = $this->post->get_categories();	
    $post = $this->post->get_by($param);	
    $data = array(	
      'post' => $post,	
      'unchecked_categories' => array_diff($categories, explode(',', $post['categories']))	
    );
    $this->load->view('edit_post_page', $data);
  }
  
  function save_updated_post() {
    $data = array(
      'weight' => $this->input->post('weight'),
      'description' => $this->input->post('description'),
      'categories' => implode("," ,$this->input->post('categories')),
      'is_active' => $this->input->post('is_active'),
      'pickup_date' => $this->input->post('pickup_date'),
      'pickup_time' => $this->input->post('pickup_time')
    );
    
    $data_session = array(
      'status' => 'failed',
      'message' => 'Please check your input'
    );
    
    if ($this->post->update($data, $this->session->user_id)) {
      $data_session = array(
        'status' => 'success',
        'message' => 'Post\'s data has been updated'
      );
    }
    
    $this->session->set_userdata($data_session);
    redirect('user-post');
  }
}

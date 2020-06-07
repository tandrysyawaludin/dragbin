<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {
  
  function __construct() {
    parent::__construct();
    $this->load->model('user');
    $this->load->model('post');
  }
  
  protected function middleware() {
    return array('user_auth');
  }
  
  function index() {
    $user = $this->show_user_profile();
    
    $data = array(
      'user' => $user,
      'post' => $post,
      'unchecked_categories' => array_diff($categories, explode(',', $post['categories']))
    );
    
    $this->load->view('profile_page', $data);
  }
  
  function show_user_profile() {
    $param = array('id' => $this->session->user_id);
    return $this->user->get_by($param);
  }
  
  function show_phone_number() {
    $user_id = base64_decode($this->input->get('code', TRUE));
    $data = array('phone_number' => $this->user->get_phone_number($user_id));
    $this->load->view('show_phone_number_page', $data);
  }
  
  function edit_profile() {
    $param = array('id' => $this->session->user_id);
    $data = array('user' => $this->user->get_by($param));
    $this->load->view('edit_profile_page', $data);
  }
  
  function save_updated_profile() {
    $photo = $this->upload_photo($this, $email);
    
    $data = array(
      'email' => strtolower($this->input->post('email')),
      'phone_number' => $this->input->post('phone_number'),
      'name' => $this->input->post('name'),
      'address' => $this->input->post('address'),
      'map_link' => $this->input->post('map_link'),
      'whatsapp' => $this->input->post('whatsapp'),
      'photo' => $photo
    );
    
    if($photo !== 'failed') {
      $this->user->update($data, $this->session->user_id);
      $param = array('id' => $this->session->user_id);
      $data = array('user' => $this->user->get_by($param));
      $this->load->view('edit_profile_page', $data);
      redirect('profile');
    }
    else {
      $data_session = array(
        'status' => 'failed',
        'message' => 'Lengkapi data yang penting'.($photo === 'failed' ? ' dan Perhatikan maks. ukuran foto 5MB' : '')
      );
      
      $this->session->set_userdata($data_session);
      redirect('profile/edit_profile');
    }
    
    
  }
  
  
  function upload_photo($photo, $email) {
    $config['upload_path'] = './user_img/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 5000;
    $config['file_name'] = strstr($email, '@', true);
    $config['encrypt_name'] = TRUE;
    $config['create_thumb']= FALSE;
    $config['maintain_ratio']= FALSE;
    $config['image_library']='gd2';
    $config['quality']= '10%';
    $this->load->library('upload', $config);
    
    if ($photo->upload->do_upload('photo')) {
      return $this->upload->data()["file_name"];
    }
    
    return "failed";
  }
  
  function request_partner_via_email() {
    $message = "Akun [".$this->input->post('user_id').", ".$this->input->post('user_name')."] ingin mendaftar sebagai partner";
    if($this->send_email("hi@dragbin.com", $this->input->post('email'), $message, "User Request", "Request to be Partner")) {
      echo "success";
      $this->send_email($this->input->post('email'), "hi@dragbin.com", $message, "[Copy] User Request", "[Copy] Request to be Partner");
    }
    else {
      show_error($this->email->print_debugger());
      // return false;
    }
  }
  
  function send_email($to, $from, $message, $header, $subject) {
    $this->load->library("email");
    $this->email->set_newline("\r\n");
    $this->email->from($from, $header);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);
    if($this->email->send()) {
      return true;
    }
    else {
      // show_error($this->email->print_debugger());
      return false;
    }
  }
  
  function send_verification_email() {
    $message = 'Please access this link to verify your email https://dragbin.com/index.php/signup/verify_email?vt='.base64_encode($this->input->post('user_email'));
      $this->load->library("email");
      $this->email->set_newline("\r\n");
      $this->email->from("hi@dragbin.com", "Hi Dragbin");
      $this->email->to($this->input->post('user_email'));
      $this->email->subject("dragbin: Verify your email");
      $this->email->message($message);
      $this->email->send();
      redirect('profile');
    }
    
    private function check_params_update_user() {
      $email = strtolower($this->input->post('email'));
      $password = $this->input->post('password');
      $phone_number = $this->input->post('phone_number');
      $name = $this->input->post('name');
      $address = $this->input->post('address');
      $map_link = $this->input->post('map_link');
      $whatsapp = $this->input->post('whatsapp');
      
      $data = array(
        'email' => $email,
        'password' => sha1($password),
        'phone_number' => $phone_number,
        'name' => $name,
        'address' => $address,
        'map_link' => $email,
        'whatsapp' => $whatsapp
      );
      
      return $data;
    }
  }
  
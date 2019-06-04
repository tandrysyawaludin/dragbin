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
        $post = $this->show_user_post();
        $categories = $this->show_post_categories();
        $data = array(
            'user' => $user,
            'post' => $post,
            'unchecked_categories' => array_diff($categories, explode(',', $post['categories']))
        );
        $this->load->view('profile_page', $data);
	}
	
	function create_default_post($partner_code) {
	    if(isset($partnert_code)) {
            $data = array(
                'user_id' => $this->session->user_id,
            );
            
            $this->post->create($data);   
	    }
    }
    
	function show_user_profile() {
	    $param = array('id' => $this->session->user_id);
	    return $this->user->get_by($param);
	}
	
	function show_user_post() {
	    $param = array('user_id' => $this->session->user_id);
	    return $this->post->get_by($param);
	}
	
	function show_post_categories() {
	    return $this->post->get_categories();
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
	
	function edit_post() {
	    $param = array('user_id' => $this->session->user_id);
	    $categories = $this->show_post_categories();
	    $post = $this->post->get_by($param);
	    $data = array(
	        'post' => $post,
	        'unchecked_categories' => array_diff($categories, explode(',', $post['categories']))
	    );
	    $this->load->view('edit_post_page', $data);
	}
	
	function save_updated_profile() {
	    $photo = $this->upload_photo($this, $email);
		
		$valid_data = array(
            'email' => strtolower($this->input->post('email')),
            'phone_number' => $this->input->post('phone_number'),
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'map_link' => $this->input->post('map_link'),
            'whatsapp' => $this->input->post('whatsapp'),
            'facebook' => $this->input->post('facebook'),
        );
		
		if(!is_null($valid_data)) {
		    $this->create_default_post($this->input->post('facebook'));
		    $this->user->update($valid_data, $this->session->user_id);
    	    $param = array('id' => $this->session->user_id);
    	    $data = array('user' => $this->user->get_by($param));
    	    $this->load->view('edit_profile_page', $data);
		}
		
		$data_session = array(
            'status' => 'failed',
            'message' => 'Please check your input'
        );
        $this->session->set_userdata($data_session);
        redirect('profile');

	}
	
	function save_updated_post() {
		$data = array(
            'description' => $this->input->post('description'),
            'categories' => implode("," ,$this->input->post('categories')),
            'is_active' => $this->input->post('is_active')
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
        redirect('profile');

	}
	
	function upload_photo($photo, $email) {
        $config['upload_path'] = './user_img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5000;
        $config['file_name'] = strstr($email, '@', true);
        $this->load->library('upload', $config);
        
        if ($photo->upload->do_upload('photo')) {
            return $this->upload->data()["file_name"];
        }
        
        return "";
	}
	
	private function check_params_update_user() {
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
        
        return $data;
	}
}

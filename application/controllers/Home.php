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
	    $page = $this->input->get('page', TRUE);
	    $address = $this->input->get('address', TRUE);
	    $posts = $this->show_posts_order_by_updated_at($page, trim(urldecode($address)," "));
	    $data = array(
	        'curr_user_id' => $this->session->user_id,
	        'posts' => $posts,
	        'next_page' => $page+1,
	        'current_page' => $page
	    );
	    $this->load->view('home_page', $data);	
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
            $this->post->get_active_posts_by_address_order_by($param);
        }
	}
}

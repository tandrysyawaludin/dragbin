<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model{
 
	function create($data){
		$this->db->insert('posts', $data);
		return $this->db->insert_id();
	}
	
	function update($new_data, $user_id) {
	    $this->db->set('updated_at', 'NOW()', FALSE);
	    $this->db->set($new_data);
	    $this->db->where('user_id', $user_id);
	    $this->db->update('posts');
		return $this->db->affected_rows();
	}

	function get_by($param) {
	    $this->db->select('transactions.status as status');
        $this->db->join('transactions', 'posts.id = transactions.post_id');
        $query = $this->db->get_where('posts', $param);
		$data = $query->row_array();
		
		if (empty($data)) {
            $query = $this->db->get_where('posts', $param);
		    $data = $query->row_array(); 
		}
		
		return $data;
	}
	
	function get_categories() {
	    $type = $this->db->query( "SHOW COLUMNS FROM posts WHERE Field = 'categories'" )->row(0)->Type;
        preg_match("/^set\(\'(.*)\'\)$/", $type, $matches);
        return explode("','", $matches[1]);
	}
	
	function get_active_posts_order_by($params) {
	    $select_data = '
	        posts.categories as post_categories,
	        posts.id as post_id,
	        posts.description as post_description,
	        posts.created_at as post_created_at,
	        users.name as user_name,
	        users.address as user_address,
	        users.map_link as user_map_link,
	        users.photo as user_photo,
	        users.id as user_id
	    ';
	    $this->db->select($select_data);
        $this->db->join('users', 'users.id = posts.user_id');
        $this->db->join('transactions', 'users.id = transactions.buyer_id', 'right');
        $this->db->where('transactions.buyer_id !=', $this->session->user_id);
        $this->db->where('posts.is_active', TRUE);
        $this->db->order_by("posts.{$params['column']}", $params['sort']);
        $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
		
		if (empty($data)) {
		    $this->db->select($select_data);
            $this->db->join('users', 'users.id = posts.user_id');
            $this->db->where('posts.is_active', TRUE);
            $this->db->order_by("posts.{$params['column']}", $params['sort']);
            $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
		}
		
		return $data;
	}
	
	function get_active_posts_by_address_order_by($params) {
	    $select_data = '
	        posts.categories as post_categories,
	        posts.id as post_id,
	        posts.description as post_description,
	        posts.created_at as post_created_at,
	        users.name as user_name,
	        users.address as user_address,
	        users.map_link as user_map_link,
	        users.photo as user_photo,
	        users.id as user_id
	    ';
	    $this->db->select($select_data);
        $this->db->join('users', 'users.id = posts.user_id');
        $this->db->join('transactions', 'users.id = transactions.buyer_id');
        $this->db->where('transactions.buyer_id !=', $this->session->user_id);
        $this->db->where('posts.is_active', TRUE);
        $this->db->where('MATCH (users.address) AGAINST ("'.$params['address'].'")', NULL);
        $this->db->order_by("posts.{$params['column']}", $params['sort']);
        $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
		
		if (empty($data)) {
		    $this->db->select($select_data);
            $this->db->join('users', 'users.id = posts.user_id');
            $this->db->where('posts.is_active', TRUE);
            $this->db->where('MATCH (users.address) AGAINST ("'.$params['address'].'")', NULL);
            $this->db->order_by("posts.{$params['column']}", $params['sort']);
            $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
		}
		
		return $data;
	}
}

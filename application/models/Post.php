<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model{
  
  protected $select_data = '
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
    $this->db->select('posts.description as description');
    $this->db->select('posts.id as id');
    $this->db->select('posts.weight as weight');
    $this->db->select('posts.pickup_date as pickup_date');
    $this->db->select('posts.pickup_time as pickup_time');
    $this->db->select('posts.categories as categories');
    $this->db->select('posts.is_active as is_active');
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
  
  function check_availability_my_transactions() {
    return$this->db->where(['buyer_id'=>$this->session->user_id])->from("transactions")->count_all_results() > 0 ? 'available' : 'not available';
  }
  
  function get_active_posts_order_by($params) {
    if ($this->check_availability_my_transactions() === 'available') {
      $this->db->select($this->select_data);
      $this->db->join('users', 'users.id = posts.user_id');
      $this->db->join('transactions', 'users.id = transactions.buyer_id', 'right');
      $this->db->where('transactions.buyer_id !=', $this->session->user_id);
      $this->db->where('posts.is_active', TRUE);
      $this->db->order_by("posts.{$params['column']}", $params['sort']);
      $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
    }
    else {  
      $this->db->select($this->select_data);
      $this->db->join('users', 'users.id = posts.user_id');
      $this->db->where('posts.is_active', TRUE);
      $this->db->order_by("posts.{$params['column']}", $params['sort']);
      $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
    }
    
    return $data;
  }
  
  function get_active_posts_by_address_order_by($params) {
    if ($this->check_availability_my_transactions() === 'available') {
      $this->db->select($this->select_data);
      $this->db->join('users', 'users.id = posts.user_id');
      $this->db->join('transactions', 'users.id = transactions.buyer_id');
      $this->db->where('transactions.buyer_id !=', $this->session->user_id);
      $this->db->where('posts.is_active', TRUE);
      $this->db->where('MATCH (users.address) AGAINST ("+'.$params['address'].'*" IN BOOLEAN MODE)');
      $this->db->order_by("posts.{$params['column']}", $params['sort']);
      $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
    }
    else {  
      $this->db->select($this->select_data);
      $this->db->join('users', 'users.id = posts.user_id');
      $this->db->where('posts.is_active', TRUE);
      $this->db->where('MATCH (users.address) AGAINST ("+'.$params['address'].'*" IN BOOLEAN MODE)');
      $this->db->order_by("posts.{$params['column']}", $params['sort']);
      $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
    }
    
    return $data;
  }
}

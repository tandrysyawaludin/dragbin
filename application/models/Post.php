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
		$query = $this->db->get_where('posts', $param);
		return $query->row_array();
	}
	
	function get_categories() {
	    $type = $this->db->query( "SHOW COLUMNS FROM posts WHERE Field = 'categories'" )->row(0)->Type;
        preg_match("/^set\(\'(.*)\'\)$/", $type, $matches);
        return explode("','", $matches[1]);
	}
	
	function get_active_posts_order_by($params) {
	    $this->db->select('
	        posts.categories as post_categories,
	        posts.description as post_description,
	        posts.count_view as post_count_vew,
	        posts.created_at as post_created_at,
	        users.name as user_name,
	        users.address as user_address,
	        users.map_link as user_map_link,
	        users.whatsapp as user_whatsapp,
	        users.facebook as user_facebook,
	        users.phone_number as user_phone_number,
	        users.photo as user_photo,
	        users.partner_code as user_partner_code,
	        users.id as user_id
	    ');
        $this->db->join('users', 'users.id = posts.user_id');
        $this->db->where('is_active', TRUE);
        $this->db->order_by("posts.{$params['column']}", $params['sort']);
        $data = $this->db->get('posts', 10, $params['next_offset'])->result_array();
		return $data;
	}
}

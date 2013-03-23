<?php
class Posts_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function get_posts($slug = FALSE) {
        if($slug === FALSE) {
            $query = $this->db->get('post');
            return $query->result_array();
        }
    
        $query = $this->db->get_where('post', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function set_posts() {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('author'), 'dash', TRUE).time();
        
        $data = array(
        'author' => $this->input->post('author'),
        'slug' => $slug,
        'text' => $this->input->post('text')
        );
        
        return $this->db->insert('post', $data);
    }
}
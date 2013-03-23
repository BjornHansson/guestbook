<?php
class Posts extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('posts_model');
    }
    
    public function index() {
        $data['posts'] = $this->posts_model->get_posts();
        $data['title'] = 'Guestbook';
        
        $this->load->view('layout/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('layout/footer');
    }
    
    public function view($slug) {
        $data['posts_item'] = $this->posts_model->get_posts($slug);
        if (empty($data['posts_item'])) {
            show_404();
        }
    
        $data['title'] = $data['posts_item']['author'];
    
        $this->load->view('layout/header', $data);
        $this->load->view('posts/view', $data);
        $this->load->view('layout/footer');
    }
    
    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Create a new post';
        
        $this->form_validation->set_rules('author', 'Author', 'required|htmlspecialchars');
        $this->form_validation->set_rules('text', 'Text', 'required|min_length[3]|max_length[700]|htmlspecialchars');
        
        if($this->form_validation->run() === FALSE) {
            $this->load->view('layout/header', $data);  
            $this->load->view('posts/create');
            $this->load->view('layout/footer');
        }
        else {
            $this->posts_model->set_posts();
            redirect('posts', 'location');
        }
    }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function view($page = 'home') {
        if(!file_exists('application/views/pages/'.$page.'.php')) {
            show_404();
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('layout/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('layout/footer', $data);
    }
}
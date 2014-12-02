<?php
class Category extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
      $this->load->model('category_m');
      $data['categories'] = $this->category_m->get();
      $this->load->view('admin/category', $data);

    }


    
}
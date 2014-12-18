<?php
class Loadin extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        
    }

    public function index() {
      
      //loadin form
      $this->load->view('admin/loadin/index');


    }


}
<?php
class Products extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('products_m');
    }

    public function index() {
      
      // Set up the form
    $rules = $this->products_m->rules_admin;
    $this->form_validation->set_rules($rules);
          if ($this->form_validation->run() == TRUE) {
            $data = array(
              'product_code' => $this->input->post('prod_code'),
               'product_name' => $this->input->post('prod_name'),
                'product_desc' => $this->input->post('prod_desc'),

              );
            $this->products_m->save($data);
            $this->session->set_flashdata('result', 'Product Successfully Added');
            redirect('admin/category','refresh');
          }
            $data['products'] = $this->products_m->get();
            $this->load->view('admin/products/index', $data);

          
    }

    public function delete($id){
      if($id){
        $this->category_m->delete($id);
        redirect('admin/category');
      }

    }

    public function edit($id){
      // if id does not exist therefore redirect to the page.
      $this->data['id'] = $this->products_m->get($id);
      if(count($this->data['id']) == 1){
        // var_dump($this->data['id']);

         // Set up the form
    $rules = $this->products_m->rules_admin;
    $this->form_validation->set_rules($rules);
          if ($this->form_validation->run() == TRUE) {
            $data = array(
              'product_code' => $this->input->post('prod_code'),
               'product_name' => $this->input->post('prod_name'),
                'product_desc' => $this->input->post('prod_desc'),
              );
            $this->products_m->save($data,$id);
            $this->session->set_flashdata('result', 'Product Successfully Updated');
            redirect('admin/category');
          }
         $this->load->view('admin/category/edit',$this->data['id']);
      }
    else{
        redirect('admin/category');
    }

    }

}
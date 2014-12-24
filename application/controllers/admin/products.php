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
              'product_id' => $this->input->post('product_id'),
               'serial_no' => $this->input->post('serial_no'),
              );
            $this->products_m->save($data);
            $this->session->set_flashdata('result', 'Cylinder Successfully Added');
            redirect('admin/products','refresh');
          }
            $data['products'] = $this->products_m->get();
            $this->load->view('admin/products/index', $data);

          
    }

    public function product_add_bulk($param1 = ''){

      if ($param1 == 'import_excel')
    {
      move_uploaded_file($_FILES['productfile']['tmp_name'], 'uploads/product_import.xlsx');
      // Importing excel sheet for bulk product uploads

      include 'simplexlsx.class.php';
      
      $xlsx = new SimpleXLSX('uploads/product_import.xlsx');
      
      list($num_cols, $num_rows) = $xlsx->dimension();
      $f = 0;
      foreach( $xlsx->rows() as $r ) 
      {
        // Ignore the inital name row of excel file
        if ($f == 0)
        {
          $f++;
          continue;
        }
        for( $i=0; $i < $num_cols; $i++ )
        {
          if ($i == 0)  $data['serial_no']         = $r[$i];
        }
        $data['product_id'] = $this->input->post('product_id');
        $data['status'] = 'Inactive';
        
        $this->products_m->save($data);
        //print_r($data);
      }
      $this->session->set_flashdata('result', 'Cylinders Successfully Added');
      redirect('admin/products','refresh');
    }
   // $page_data['page_name']  = 'product_bulk_add';
    //$this->load->view('backend/index', $page_data);
  }

    public function delete($id){
      if($id){
        $this->products_m->delete($id);
         $this->session->set_flashdata('result', 'Removed Successfully');
        redirect('admin/products');
      }

    }

    public function edit($id){
      // if id does not exist therefore redirect to the page.
      $this->data['id'] = $this->products_m->get($id);
      if(count($this->data['id']) == 1){
        //var_dump($this->data['id']);

         // Set up the form
    $rules = $this->products_m->rules_admin;
    $this->form_validation->set_rules($rules);
          if ($this->form_validation->run() == TRUE) {
            $data = array(
              'product_id' => $this->input->post('product_id'),
               'serial_no' => $this->input->post('serial_no'),
              );
            $this->products_m->save($data,$id);
            $this->session->set_flashdata('result', 'Product Successfully Updated');
            redirect('admin/products');
          }
         $this->load->view('admin/products/edit',$this->data['id']);
      }
    else{
        redirect('admin/products');
    }

    }

}
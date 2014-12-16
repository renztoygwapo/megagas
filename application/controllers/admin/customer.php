<?php
class Customer extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('customer_m');
    }

    public function index() {
      

      // Set up the form
    $rules = $this->customer_m->rules_admin;
    $this->form_validation->set_rules($rules);
          if ($this->form_validation->run() == TRUE) {
            $data = array(
              'customer_name' => $this->input->post('customer_name'),
               'address' => $this->input->post('address'),
               'area_no' => $this->input->post('area_no'),
               'contact_no' => $this->input->post('contact_no'),
              );
            $this->customer_m->save($data);
            $this->session->set_flashdata('customer', 'Customer Successfully Added');
            redirect('admin/customer','refresh');
          }
            $data['customers'] = $this->customer_m->get();
            $this->load->view('admin/customer/index', $data);
          
    }

    public function delete($id){
      if($id){
        $this->customer_m->delete($id);
        $this->session->set_flashdata('customer', 'Removed Successfully');
        redirect('admin/customer');
      }

    }

    public function edit($id){
      // if id does not exist therefore redirect to the page.
      $this->data['id'] = $this->customer_m->get($id);
      if(count($this->data['id']) == 1){
        // var_dump($this->data['id']);

         // Set up the form
    $rules = $this->customer_m->rules_admin;
    $this->form_validation->set_rules($rules);
          if ($this->form_validation->run() == TRUE) {
            $data = array(
              'customer_name' => $this->input->post('customer_name'),
               'address' => $this->input->post('address'),
                'area_no' => $this->input->post('area_no'),
                'contact_no' => $this->input->post('contact_no'),
              );
            $this->customer_m->save($data,$id);
            $this->session->set_flashdata('customer', 'Customer Successfully Updated');
            redirect('admin/customer');
          }
         $this->load->view('admin/customer/edit',$this->data['id']);
      }
    else{
        redirect('admin/customer');
    }

    }

}
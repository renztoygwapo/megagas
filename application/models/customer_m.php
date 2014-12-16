<?php
class Customer_m extends MY_Model
{
	
	protected $_table_name = 'customer';
	protected $_order_by = 'area_no';

      public $rules_admin = array(
    'customer_name' => array(
      'field' => 'customer_name', 
      'label' => 'Area No', 
      'rules' => 'trim|required|xss_clean'
        ), 
      'address' => array(
      'field' => 'address', 
      'label' => 'Location', 
      'rules' => 'trim|required|xss_clean'
    ), 

         'area_no' => array(
      'field' => 'area_no', 
      'label' => 'Area', 
      'rules' => 'trim|required|xss_clean'
    ), 
            'contact_no' => array(
      'field' => 'contact_no', 
      'label' => 'Contact Number', 
      'rules' => 'trim|required|xss_clean'
    ), 
      
  );


}
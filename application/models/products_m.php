<?php
class Products_m extends MY_Model
{
	
	protected $_table_name = 'products';
	protected $_order_by = 'product_id';

      public $rules_admin = array(
    'serial_no' => array(
      'field' => 'serial_no', 
      'label' => 'Serial No', 
      'rules' => 'trim|required|xss_clean'
    ), 
      'price' => array(
      'field' => 'price', 
      'label' => 'Price', 
      'rules' => 'trim|required|xss_clean'
    ), 
      
  );


}
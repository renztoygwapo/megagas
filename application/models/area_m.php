<?php
class Area_m extends MY_Model
{
	
	protected $_table_name = 'area';
	protected $_order_by = 'area_no';

      public $rules_admin = array(
    'area_no' => array(
      'field' => 'area_no', 
      'label' => 'Area No', 
      'rules' => 'trim|required|xss_clean'
    ), 
      'location' => array(
      'field' => 'location', 
      'label' => 'Location', 
      'rules' => 'trim|required|xss_clean'
    ), 
      
  );


}
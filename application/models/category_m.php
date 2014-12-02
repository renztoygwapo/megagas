<?php
class Category_m extends MY_Model
{
	
	protected $_table_name = 'products';
	protected $_order_by = 'product_name';
	
	function __construct ()
	{
		parent::__construct();
	}

}
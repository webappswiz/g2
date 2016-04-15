<?php

defined( 'SYSPATH' ) OR die( 'No direct access allowed.' );

class Model_OrderProducts extends ORM {

	protected $_table_name = 'order_products';
	protected $_primary_key = 'id';
	protected $_belongs_to = array(
			'products' => array( 'model' => 'Products', 'foreign_key' => 'product_id' )
	);

}

// End Role Model
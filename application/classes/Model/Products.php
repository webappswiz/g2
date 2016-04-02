<?php

defined( 'SYSPATH' ) OR die( 'No direct access allowed.' );

class Model_Products extends ORM {

	protected $_table_name = 'products';
	protected $_primary_key = 'id';
	protected $_belongs_to = array(
			'category' => array( 'model' => 'Products', 'foreign_key' => 'product_cat' )
	);
}

// End Role Model
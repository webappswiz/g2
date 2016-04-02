<?php

defined( 'SYSPATH' ) OR die( 'No direct access allowed.' );

class Model_Categories extends ORM {

	protected $_table_name = 'categories';
	protected $_primary_key = 'id';
	protected $_has_many = array(
			'products' => array( 'model' => 'Products' ,'foreign_key' => 'product_cat'),
	);

}

// End Role Model
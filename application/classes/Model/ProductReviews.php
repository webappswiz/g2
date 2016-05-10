<?php

defined( 'SYSPATH' ) OR die( 'No direct access allowed.' );

class Model_ProductReviews extends ORM {

	protected $_table_name = 'product_reviews';
	protected $_primary_key = 'id';
	protected $_belongs_to = array(
			'product' => array( 'model' => 'Products', 'foreign_key' => 'product_id' )
	);
}

// End Role Model
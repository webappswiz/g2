<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Catalog extends Controller_Core {
	public function before() {
		parent::before();
		$this->set_title( __( 'Catalog' ) );
		$options = ORM::factory( 'Options', 1 );
		$status  = $options->status;
		if ( $status == 1 ) {
			$this->redirect( '/' );
		}
		$this->session = Session::instance();
	}

	public function action_index() {
		$this->categories =  ORM::factory('Categories')->find_all();
	}

	public function action_category() {
		$this->category = ORM::factory('Categories',(int) $this->request->param( 'id' ));
	}

	public function action_product() {
		$id = $this->request->param( 'id' );
		if($id==null){
			throw new Kohana_HTTP_Exception_404;
		}
		$this->product = ORM::factory('Products',(int)$this->request->param( 'id' ));
		$this->images = ORM::factory('ProductImages')->where('product_id','=',(int)$this->product->id)->and_where('img_type','=',1)->find_all();
		$this->aimages = ORM::factory('ProductImages')->where('product_id','=',(int)$this->product->id)->and_where('img_type','=',2)->find_all();
		if(isset($_REQUEST['product_review'])){
			$this->review();
		}
		$this->reviews = ORM::factory('ProductReviews')->where('product_id','=',(int)$this->product->id)->and_where('approved','=',1)->find_all();
	}

	protected function review(){
		if(isset($_REQUEST['product_id']) && isset($_REQUEST['customer_firstname']) && isset($_REQUEST['product_review']) && isset($_REQUEST['rating'])){
			$review = ORM::factory('ProductReviews');
			$review->firstname = $_REQUEST['customer_firstname'];
			$review->review = $_REQUEST['product_review'];
			$review->product_id = $_REQUEST['product_id'];
			$review->rating = $_REQUEST['rating'];
			$review->date = date('d.m.Y');
			$review->save();
		}
	}

}

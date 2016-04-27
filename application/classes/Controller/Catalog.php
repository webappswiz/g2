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
		$this->images = ORM::factory('ProductImages')->where('product_id','=',(int)$this->product->id)->find_all();
	}

}

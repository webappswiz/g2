<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Cart extends Controller_Core {
	public function before() {
		parent::before();
		$this->set_title( __( 'Cart' ) );
		$this->session = Session::instance();
	}

	public function action_index() {

	}

	public function action_add() {
		if(!isset($_REQUEST['product_id']) || !isset($_REQUEST['product_qty'])){
			throw new Kohana_HTTP_Exception_404;
		}
		$product_id = (int)Arr::get($_REQUEST,'product_id');
		$product_qty = (int)Arr::get($_REQUEST,'product_qty');
		$prod_id = ORM::factory('Products',$product_id);
		if(!$prod_id->loaded()){
			Flash::set( 'alert', __( 'Something went wrong. Please try again later.' ) );
			$this->redirect($this->request->referrer());
		}
		if(isset($_SESSION['cart'][$product_id])){
			$_SESSION['cart'][$product_id]++;
		} else {
			$_SESSION['cart'][$product_id] = $product_qty;
		}
		Flash::set( 'notice', __( 'Product has been added successfully' ) );

		$this->redirect($this->request->referrer());
	}

	public function action_delete(){

	}

}

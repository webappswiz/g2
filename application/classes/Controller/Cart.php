<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Cart extends Controller_Core {
	public function before() {
		parent::before();
		$this->set_title( __( 'Cart' ) );
		$options = ORM::factory( 'Options', 1 );
		$status  = $options->status;
		if ( $status == 1 ) {
			$this->redirect( '/' );
		}
		$this->session = Session::instance();
	}

	public function action_index() {
		$weight = 0;
		if ( isset( $_SESSION['cart'] ) ) {
			foreach ( $_SESSION['cart'] as $id => $qty ) {
				$product_info = ORM::factory( 'Products', $id );
				$weight += $product_info->weight;
			}
			$this->shipping = $this->shipping_calc( $weight );
		}
	}

	public function action_add() {
		if ( ! isset( $_REQUEST['product_id'] ) || ! isset( $_REQUEST['product_qty'] ) ) {
			throw new Kohana_HTTP_Exception_404;
		}
		$product_id  = (int) Arr::get( $_REQUEST, 'product_id' );
		$product_qty = (int) Arr::get( $_REQUEST, 'product_qty' );
		$prod_id     = ORM::factory( 'Products', $product_id );
		if ( ! $prod_id->loaded() ) {
			Flash::set( 'alert', __( 'Something went wrong. Please try again later.' ) );
			$this->redirect( $this->request->referrer() );
		}
		if ( $prod_id->status == 0 ) {
			Flash::set( 'alert', __( 'Something went wrong. Please try again later.' ) );
			$this->redirect( $this->request->referrer() );
		}
		if ( $prod_id->qty >= $product_qty ) {
			if ( isset( $_SESSION['cart'][ $product_id ] ) ) {
				if($prod_id->qty>=($product_qty+$_SESSION['cart'][ $product_id ]))
					$_SESSION['cart'][ $product_id ] ++;
			} else {

				$_SESSION['cart'][ $product_id ] = $product_qty;
			}
			Flash::set( 'cart_added', __( 'added' ) );
		} else {
			$prod_id->status = 0;
			$prod_id->save();
		}

		echo $prod_id->qty.' '.$_SESSION['cart'][ $product_id ];
		//$this->redirect( $this->request->referrer() );
	}

	public function action_delete() {
		$id = (int) $this->request->param( 'id' );
		if ( isset( $_SESSION['cart'][ $id ] ) ) {
			unset( $_SESSION['cart'][ $id ] );
			Flash::set( 'notice', __( 'Your cart has been successfully update' ) );
		} else {
			Flash::set( 'alert', __( 'Some internal error occurred.' ) );
		}
		$this->redirect( $this->request->referrer() );
	}


	public function action_checkout() {

		if ( ! $this->is_post() ) {
			$this->redirect( $this->request->referrer() );
		}
		$this->set_title( 'Order - Checkout' );
		if ( isset( $_GET['smart'] ) ) {
			Session::instance()->set( 'package', 'smart' );
		}
		if ( isset( $_GET['plus'] ) ) {
			Session::instance()->set( 'package', 'plus' );
		}
		if ( isset( $_POST['order_now'] ) ) {
			$this->redirect( 'order/step3' );
		}
	}

	public function action_update() {
		if ( ! $this->is_post() ) {
			return;
		}
		if ( ! isset( $_REQUEST['product_id'] ) || ! isset( $_REQUEST['product_qty'] ) ) {
			throw new Kohana_HTTP_Exception_404;
		}
		$product_id  = (int) Arr::get( $_REQUEST, 'product_id' );
		$product_qty = (int) Arr::get( $_REQUEST, 'product_qty' );
		$prod_id     = ORM::factory( 'Products', $product_id );
		if ( ! $prod_id->loaded() ) {
			return;
		}
		if ( isset( $_SESSION['cart'][ $product_id ] ) && $prod_id->qty >= $product_qty ) {
			$_SESSION['cart'][ $product_id ] = $product_qty;
		}
		echo '{"msg":1}';
		$this->render_nothing();
	}

	public static function shipping_calc( $weight ) {
		if ( $weight <= 2099 ) {
			$price = 1030;
		}
		if ( $weight >= 2100 && $weight <= 3099 ) {
			$price = 1160;
		}
		if ( $weight >= 3100 && $weight <= 5099 ) {
			$price = 1300;
		}
		if ( $weight >= 5100 && $weight <= 10099 ) {
			$price = 1420;
		}
		if ( $weight >= 10100 && $weight <= 15099 ) {
			$price = 1550;
		}
		if ( $weight >= 15100 && $weight <= 20099 ) {
			$price = 1740;
		}
		if ( $weight >= 20100 && $weight <= 25099 ) {
			$price = 1940;
		}
		if ( $weight >= 25100 && $weight <= 30099 ) {
			$price = 2260;
		}
		if ( $weight >= 30100 && $weight <= 40000 ) {
			$price = 2580;
		}

		return $price;
	}
}

<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Cart extends Controller_Core {
	public function before() {
		parent::before();
		$this->set_title( __( 'Cart' ) );
	}

	public function action_index() {

	}

}

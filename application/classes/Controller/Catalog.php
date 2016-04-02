<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Catalog extends Controller_Core {
	public function before() {
		parent::before();
		$this->set_title( __( 'Catalog' ) );
	}

	public function action_index() {

	}

	public function action_category() {

	}

}

<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Kutyusaink extends Controller_Core {

	public function before() {
		parent::before();
		$this->set_title( __( 'Kutyusaink' ) );
		$this->template->active_menu = 'kutyusaink';
	}

	public function action_index() {

	}

	public function action_fotok(){

	}

	public function action_video(){

	}

	public function action_doboz(){

	}

}

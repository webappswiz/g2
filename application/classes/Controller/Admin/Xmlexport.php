<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Xmlexport extends Controller_Admin {

	public function before() {
		parent::before();
		$this->template->active_menu = 'xmlexport';
	}

	public function action_index() {

	}
}
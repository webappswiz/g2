<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Admin_Reviews extends Controller_Admin {

	public function before() {
		parent::before();
		$this->template->active_menu = 'reviews';
	}

	public function action_index() {
		$this->reviews = ORM::factory('ProductReviews')->where('approved','=',0)->find_all();
	}

	public function action_approve() {
		$this->find_model();
		$this->model->approved = 1;
		$this->model->save();
		$this->redirect( '/admin/reviews/' );
	}

	public function action_delete(){
		$this->find_model();
		$this->model->delete();
		$this->redirect( '/admin/reviews/' );
	}

	protected function find_model() {
		$this->model = ORM::factory( 'ProductReviews', (int) $this->request->param( 'id' ) );
		if ( ! $this->model->loaded() ) {
			throw new Kohana_HTTP_Exception_404;
		}
	}

}

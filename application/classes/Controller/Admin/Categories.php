<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Admin_Categories extends Controller_Admin {

	public function before() {
		parent::before();
		$this->template->active_menu = 'categories';
	}

	public function action_index() {

	}

	public function action_add() {
		$this->set_filename( 'admin/categories/form' );
		$this->model = ORM::factory( 'Categories' );
		if ( ! $this->is_post() ) {
			return;
		}
		$this->update();
	}

	public function update() {
		$id = (int) Arr::get( $_REQUEST, 'id' );
		if ( $id ) {
			$this->model = ORM::factory( 'Categories', $id );
		} else {
			$this->model = ORM::factory( 'Categories' );
		}
		$this->model->cat_name   = $_REQUEST['cat_name'];
		$this->model->sort          = $_REQUEST['menu_order'];
		$this->model->save();
		$this->redirect( '/admin/categories/' );
	}

	public function action_edit() {
		$this->set_filename( 'admin/categories/form' );
		$this->find_model();
		if ( ! $this->is_post() ) {
			return;
		}
		$this->update();
	}

	protected function find_model() {
		$this->model = ORM::factory( 'Categories', (int) $this->request->param( 'id' ) );
		if ( ! $this->model->loaded() ) {
			throw new Kohana_HTTP_Exception_404;
		}
	}

}

<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Admin_Products extends Controller_Admin {

	public function before() {
		parent::before();
		$this->template->active_menu = 'products';
	}

	protected function find_model() {
		$this->model = ORM::factory( 'Products', (int) $this->request->param( 'id' ) );
		$this->categories = ORM::factory( 'Categories' )->find_all();
		if ( ! $this->model->loaded() ) {
			throw new Kohana_HTTP_Exception_404;
		}
	}

	public function action_index() {

	}

	public function action_edit() {
		$this->set_filename( 'admin/products/form' );
		$this->find_model();
		if ( ! $this->is_post() ) {
			return;
		}
		$this->update();
	}

	public function action_add() {
		$this->set_filename( 'admin/products/form' );
		$this->model = ORM::factory( 'Products' );
		$this->categories = ORM::factory( 'Categories' )->find_all();
		if ( ! $this->is_post() ) {
			return;
		}
		$this->update();
	}

	public function update() {
		$id = (int) Arr::get( $_REQUEST, 'id' );
		if ( $id ) {
			$this->model = ORM::factory( 'Products', $id );
		} else {
			$this->model = ORM::factory( 'Products' );
		}
		$this->model->product_name   = $_REQUEST['product_name'];
		$this->model->product_subtitle   = $_REQUEST['product_subtitle'];
		$this->model->price          = $_REQUEST['package_price'];
		$this->model->product_number = $_REQUEST['package_code'];
		$this->model->product_description    = $_REQUEST['product_description'];
		$this->model->product_about    = $_REQUEST['product_about'];
		$this->model->product_composition    = $_REQUEST['product_composition'];
		$this->model->product_cat = $_REQUEST['product_cat'];
		if ( isset( $_REQUEST['package_enabled'] ) ) {
			$this->model->status = 1;
		} else {
			$this->model->status = 0;
		}
		$this->model->save();
		$this->redirect( '/admin/products/' );
	}

}

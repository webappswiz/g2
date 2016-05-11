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
		$this->product_images = ORM::factory('ProductImages')->where('product_id','=',$this->model->id)->and_where('img_type','=',1)->find_all();
		$this->product_add_images = ORM::factory('ProductImages')->where('product_id','=',$this->model->id)->and_where('img_type','=',2)->find_all();
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
		$this->model = ORM::factory( 'Products' );
		$this->categories = ORM::factory( 'Categories' )->find_all();
		$this->set_filename( 'admin/products/form' );
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
		$this->model->sale_price          = $_REQUEST['package_sale_price'];
		$this->model->product_number = $_REQUEST['package_code'];
		$this->model->product_description    = $_REQUEST['product_description'];
		$this->model->product_about    = $_REQUEST['product_about'];
		$this->model->product_composition    = $_REQUEST['product_composition'];
		$this->model->product_cat = $_REQUEST['product_cat'];
		$this->model->product_size = json_encode($_REQUEST['product_size']);
		$this->model->product_age = $_REQUEST['dog_age'];
		$this->model->weight = $_REQUEST['package_weight'];
		$this->model->video_link = $_REQUEST['video_link'];
		if ( isset( $_REQUEST['package_enabled'] ) ) {
			$this->model->status = 1;
		} else {
			$this->model->status = 0;
		}
		if ( isset( $_REQUEST['package_onsale'] ) ) {
			$this->model->on_sale = 1;
		} else {
			$this->model->on_sale = 0;
		}
		if ( isset( $_REQUEST['package_new'] ) ) {
			$this->model->new = 1;
		} else {
			$this->model->new = 0;
		}
		$this->model->qty = $_REQUEST['product_qty'];
		$this->model->save();
		//$this->redirect( '/admin/products/' );
	}

	public function action_upload() {
		print_r($_REQUEST);
		if ( isset( $_FILES['files'] ) && !empty($_FILES['files']) && !empty($_REQUEST['product_id']) ) {
			$file_object = array();
			$file_object['name'] = $_FILES['files']['name']['0'];
			$file_object['type'] = $_FILES['files']['type']['0'];
			$file_object['tmp_name'] = $_FILES['files']['tmp_name']['0'];
			$file_object['error'] = $_FILES['files']['error']['0'];
			$file_object['size'] = $_FILES['files']['size']['0'];
			$filename = $this->_save_image( $file_object );
			$product_image = ORM::factory('ProductImages');
			if($filename){
				$product_image->product_id = (int) $_REQUEST['product_id'];
				$product_image->img_name = $filename;
				$product_image->img_type = ((int) $_REQUEST['upload_type']==1)?1:2;
				$product_image->save();
			} else {
				return false;
			}
		}
		$this->render_nothing();

	}

	protected function _save_image( $image ) {
		if (
				! Upload::valid( $image ) OR
				! Upload::not_empty( $image ) OR
				! Upload::type( $image, array( 'jpg', 'jpeg', 'png', 'gif' ) )
		) {
			return false;
		}

		$directory = DOCROOT . 'uploads/products/';

		if ( $file = Upload::save( $image, null, $directory ) ) {
			$filename = strtolower( Text::random( 'alnum', 25 ) ) . '.jpg';

			Image::factory( $file )
			     ->resize( 800, '', Image::AUTO )
			     ->save( $directory . $filename );

			// Delete the temporary file
			unlink( $file );

			return $filename;
		}

		return false;
	}

	public function action_del_img(){
		$this->img = ORM::factory( 'ProductImages', (int) $this->request->param( 'id' ) );
		if ( $this->img->loaded() ) {
			$this->img->delete();
		}
		$this->redirect( '/admin/products/' );
	}

}

<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

class Controller_Main extends Controller_Core {

	public function before() {
		parent::before();
		$this->set_title( 'Home' );
		$this->template->active_menu = 'home';
	}

	public function action_index() {

	}

	public function action_chg_lang() {
		$lang = $this->request->param( 'id' );
		if ( $lang == 'hu' ) {
			Cookie::set( 'lang', 'hu' );
			I18n::lang( 'hu' );
			if ( $this->current_user ) {
				$user = ORM::factory( 'User', $this->current_user->id );
				if ( $user->loaded() ) {
					$user->lang = 1;
					$user->save();
				}
			}
		} else {
			Cookie::set( 'lang', 'en' );
			I18n::lang( 'en' );
			if ( $this->current_user ) {
				$user = ORM::factory( 'User', $this->current_user->id );
				if ( $user->loaded() ) {
					$user->lang = 2;
					$user->save();
				}
			}
		}
		$this->redirect( $this->request->referrer() );

	}

	public function action_subscribe() {
		if ( ! $this->is_post() ) {
			return;
		}
		require_once DOCROOT . 'application/vendor/mailchimp-api/mailchimp.php';
		$email = Arr::get($_REQUEST,'email');
		$name = Arr::get($_REQUEST,'firstname');
		$result = $MailChimp->post("lists/$list_id/members", [
			'email_address' => $email,
			'merge_vars' => array('FNAME'=>$name),
			'status'        => 'subscribed',
		]);
		if($result['status']=='subscribed'){
			echo '{"msg":"success"}';
		} elseif($result['status']==400 && $result['title']=='Member Exists'){
			echo '{"msg":"exists"}';
		} else {

		}
		$this->render_nothing();
	}

}

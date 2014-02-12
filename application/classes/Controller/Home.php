<?php defined('SYSPATH') or die('No direct script');

class Controller_Home extends Controller_CMSTemplate {
	public function action_index()
	{
		if( Auth::instance()->logged_in( 'admin' ) )
		{
			$page = View::factory('template/home');
			$this->template->content = $page;
			$this->_title = "Strona główna";
		}
		else
		{
			HTTP::redirect( 'login/index' );
		}
	}	
}

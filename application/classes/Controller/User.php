<?php defined('SYSPATH') or die('No direct script');
class Controller_User extends Controller_CMSTemplate
{
	private function get_user_info( )
	{
		$results = DB::select('email','user_first_name','user_second_name')->from('users')->where('id','=', Auth::instance()->get_user()->pk() )->as_object()->execute();
		foreach( $results as $user_info )
		{
			$this->template->bind_global('user_first_name', $user_info->user_first_name);
			$this->template->bind_global('user_second_name', $user_info->user_second_name);
			$this->template->bind_global('email', $user_info->email);
		}
	}
	public function action_own_edit( )
	{
		if( Auth::instance()->logged_in( 'admin' ) )
		{
			$this->get_user_info( );
			$view = View::factory('template/own_edit');
			$this->template->content = $view;
			$this->_title = "Edycja profilu"; 
		}
		else
		{
			HTTP::redirect( 'login/index' );
		}
	}
	public function action_own_edit_profile( )
	{
		$this->template->content = View::factory( 'template/own_edit_profile' );	
	}
	public function action_update_own( )
	{
		if( Auth::instance()->logged_in( 'admin' ) )
		{
			$this->get_user_info( );
			$view = View::factory('template/own_edit');
			$this->template->content = $view; 
			$this->validation = Validation::factory( $_POST );
			$this->validation->rule('user_first_name', 'not_empty')
							 ->rule('user_second_name', 'not_empty')
							 ->rule('email', 'not_empty')
							 ->rule('email', 'email' );
			if( $this->validation->check() == TRUE )
			{
				/*if( DB::update( 'users' )->set( array( 'user_first_name' => $this->request->post( 'user_first_name' ), 'user_second_name' => $this->request->post( 'user_second_name' ), 'email' => $this->request->post( 'email' )))->where('id','=',Auth::instance( )->get_user( )->pk( ) )->execute())
				{
					Session::instance()->set( 'user_first_name', $this->request->post( 'user_first_name' ) );
					Session::instance()->set( 'user_second_name', $this->request->post( 'user_second_name' ) );
					Session::instance()->set( 'success_update','Operacje wykonano poprawnie' );
					HTTP::redirect('user/own_edit');
				}	
				else 
				{
					$errors = array( 'coś poszło nie tak' );
					$this->template->bind('errors_update', $errors);
				}
				try
				{
					//DB::update( 'users' )->set( array( 'user_first_name' => $this->request->post( 'user_first_name' ), 'user_second_name' => $this->request->post( 'user_second_name' ), 'email' => $this->request->post( 'email' )))->where('id','=',Auth::instance( )->get_user( )->pk( ) )->execute())
					Session::instance()->set( 'user_first_name', $this->request->post( 'user_first_name' ) );
					Session::instance()->set( 'user_second_name', $this->request->post( 'user_second_name' ) );
					Session::instance()->set( 'success_update','Operacje wykonano poprawnie' );
					HTTP::redirect('user/own_edit');
				}*/	
			}
			else 
			{
				$errors = $this->validation->errors( 'forms/user' );
				$this->template->bind_global('errors_update', $errors);
			}
		}
		else
		{
			HTTP::redirect( 'login/index' );	
		}
	}
	public function action_change_own_pass( )
	{
		if( Auth::instance()->logged_in( 'admin' ) )
		{
			$view = View::factory('template/own_edit');
			$this->template->content = $view; 
			if( $this->request->post('change_pass')  )
			{
				$this->get_user_info( );
				$this->auth = Auth::instance();
				$this->validation = Validation::factory( $_POST );
				$this->validation->rule('old_password', 'not_empty' )
								 ->rule('old_password', 'min_length', array( ':value', 8 ) )
								 ->rule('password', 'not_empty' )
								 ->rule('password', 'min_length', array( ':value', 8 ) )
								 ->rule('confirm_password', 'not_empty' )
								 ->rule('confirm_password', 'min_length', array( ':value', 8 ) )
								 ->rule('confirm_password', 'matches', array ( ':validation', ':field', 'password' ) );
				if( $this->validation->check( ) == TRUE )
				{
					if( $this->auth->check_password( $this->request->post( 'old_password' ) ) )
					{
						$new_hash_password = $this->auth->hash_password($this->request->post( 'password' ) );
						//DB::update('users')->set( array( 'password' => $new_hash_password ) )->where( 'id','=',Auth::instance( )->get_user( )->pk( ) );
						if( DB::update('users')->set( array( 'password' => $new_hash_password ) )->where( 'id','=',Auth::instance( )->get_user( )->pk( ) )->execute() )
						{
							Session::instance ()->set( 'success_change_password','Operacje wykonano poprawnie');
							HTTP::redirect('user/own_edit');
						}
						else
						{
							$errors = array('Niestety coś poszło nie tak');
						}
					}
					else 
					{
						$errors = array('Stare hasło sie nie zgadza.');
					}
				}
				else 
				{
					$errors = $this->validation->errors( 'forms/user' );
				}
				$this->template->bind_global('errors_change_password', $errors);
			}
		}
		else
		{
			HTTP::redirect( 'login/index' );
		}
	}
	public function action_add( )
	{
		if( Auth::instance()->logged_in( 'admin' ) )
		{
			$view = View::factory('template/user_add');
			$this->template->content = $view;
			$this->_title = "Dodwanie użytkownika";
		}
		else 
		{
			HTTP::redirect( 'login/index' );
		}
	}	
}
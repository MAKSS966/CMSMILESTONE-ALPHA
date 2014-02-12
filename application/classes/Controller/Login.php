<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_CMSTemplate {
        public $template= 'template/login_panel';
        protected $_title;
        protected $__JS__;
        protected $__CSS__;
        
        public function before(){
            parent::before();
            View::set_global('base',URL::base(TRUE, FALSE));     
            $this->_title	= 'Panel logowania';         
            $this->__JS__   = 'public/static/js/';
            $this->__CSS__	= 'public/static/css/';
        }
        
        public function after(){
            $_script = array(   
            );
                
            $_style = array(    
            	$this->__CSS__.'style.css'   
            );
            $this->template->title   = $this->_title;
            $this->template->style   = $_style; 
            $this->template->script  = $_script;   
            
            parent::after();
        }
        public function action_index( )
		{
			/*$newuser = ORM::factory('User');
			$newuser->username = 'rafal.kowalski';
			$newuser->password = 'QAZaleksy2';
			$newuser->email = 'test@op.pl';
			$newuser->save();
			$role = ORM::factory('Role')->where('name', '=', 'login')->find();
			$newuser->add('roles', $role);
			$role = ORM::factory('Role')->where('name', '=', 'ban')->find();
			$newuser->add('roles', $role);
			$role = ORM::factory('Role')->where('name', '=', 'user')->find();
			$newuser->add('roles', $role);
			$role = ORM::factory('Role')->where('name', '=', 'editor')->find();
			$newuser->add('roles', $role);
			$role = ORM::factory('Role')->where('name', '=', 'chief_editor')->find();
			$newuser->add('roles', $role);
			$role = ORM::factory('Role')->where('name', '=', 'engineer')->find();
			$newuser->add('roles', $role);
			$role = ORM::factory('Role')->where('name', '=', 'admin')->find();
			$newuser->add('roles', $role);
			$role = ORM::factory('Role')->where('name', '=', 'super_admin')->find();
			$newuser->add('roles', $role);*/
			if( Auth::instance()->logged_in('admin') )
			{
				$this->get_user_info( );
				HTTP::redirect('admin/home/index');
			}
			$this->template->bind('errors', $errors);
		}
		public function action_login( )
		{
			if( isset( $_POST['log_in'] ) )
			{
				if( Auth::instance()->logged_in('admin') )
				{
					$this->get_user_info( );
					HTTP::redirect('admin/home/index');
				}
				$user = ORM::factory('Login');
				$user->username = $this->request->post('username');
				$user->password = $this->request->post('password');
				echo $user->password;
				try
				{
					print_r($user->check( ));
					
					$logs = Auth::instance()->login($_POST['username'], $_POST['password']);
					if($logs)
					{
						if (Auth::instance()->logged_in('admin')) 
						{
							$this->get_user_info( );
							HTTP::redirect('admin/home/index');	
						}
						else 
						{
							$errors = array('Nie masz wystarczajacych uprawnenień');
						}
					}
					else
					{
						$errors = array('Podano błędny login i/lub hasło') ;
					}
				}
				catch( ORM_Validation_Exception $e )	
				{
					$errors = $e->errors('models');
				}
				$this->template->bind('errors', $errors);			
			}
		}
		public function action_logout( )
		{
			$this->template->bind('errors', $errors);
			Auth::instance()->logout();
		}
		public function get_user_info( )
		{
			$results = DB::select('user_first_name','user_second_name')->from('users')->where('id','=', Auth::instance()->get_user()->pk() )->as_object()->execute();
			$session = Session::instance();
			foreach( $results as $user_info )
			{
				$session->set('user_first_name', $user_info->user_first_name);
				$session->set('user_second_name', $user_info->user_second_name);		
			}
		}
} // End Welcome


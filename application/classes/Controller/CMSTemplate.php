<?php defined('SYSPATH') or die('No direct script');
class Controller_CMSTemplate extends Controller_Template
{
	public $template = 'template/site';
    protected $_title;
    protected $__JS__;
    protected $__CSS__;      
   	public function before()
   	{
   		parent::before();	
        View::set_global('base',URL::base(TRUE, FALSE));       
        $this->__JS__   = 'public/static/js/';
        $this->__CSS__	= 'public/static/css/';
		$this->template->langs=Kohana::$config->load('lang');
	}    
    public function after()
    {
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
	public function  __construct(Request $request, Response $response) {
        parent::__construct($request, $response);
		if( !empty( $_COOKIE['cms_lang'] ) )
		{
			if( isset( $_POST['cms_lang'] ) )
			{
        		I18n::lang($_POST['cms_lang']);
				setcookie( 'cms_lang', $_POST['cms_lang'], time()+(60*60*24*30) );
				HTTP::redirect( $_SERVER['REQUEST_URI'] );
			}
		}
		else 
		{
			I18n::lang('pl-pl');
			setcookie( 'cms_lang', 'pl-pl', time()+(60*60*24*30) );
		}
	}
}

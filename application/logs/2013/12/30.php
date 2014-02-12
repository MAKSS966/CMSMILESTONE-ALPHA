<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-30 04:14:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-30 04:14:34 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:20
2013-12-30 04:14:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-30 04:14:36 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:20
2013-12-30 04:37:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 63 ] in file:line
2013-12-30 04:37:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 04:38:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$requesst ~ APPPATH/classes/Controller/User.php [ 63 ] in /var/www/application/classes/Controller/User.php:63
2013-12-30 04:38:11 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 63, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_update_own()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:63
2013-12-30 04:39:53 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-30 04:39:53 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 20, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:20
2013-12-30 04:56:21 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically ~ APPPATH/views/template/menu.php [ 13 ] in /var/www/application/views/template/menu.php:13
2013-12-30 04:56:21 --- DEBUG: #0 /var/www/application/views/template/menu.php(13): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/applic...', 13, Array)
#1 /var/www/application/views/template/menu.php(13): Kohana_Request::uri()
#2 /var/www/application/views/template/own_edit.php(7): require_once('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#5 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /var/www/application/classes/Controller/User.php(28): Kohana_Controller_Template->after()
#7 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/application/views/template/menu.php:13
2013-12-30 05:04:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:04:25 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:04:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:04:26 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:04:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:04:26 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:04:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:04:26 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:06:34 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:06:34 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:06:36 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:06:36 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:07:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: script ~ APPPATH/views/template/header.php [ 8 ] in /var/www/application/views/template/header.php:8
2013-12-30 05:07:55 --- DEBUG: #0 /var/www/application/views/template/header.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 8, Array)
#1 /var/www/application/views/template/own_edit.php(5): require_once('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#7 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#8 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#9 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#10 /var/www/application/classes/Controller/User.php(15): Kohana_Controller_Template->before()
#11 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/application/views/template/header.php:8
2013-12-30 05:07:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:07:55 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /var/www/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /var/www/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#11 /var/www/application/classes/Controller/User.php(15): Kohana_Controller_Template->before()
#12 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#15 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:07:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: user_first_name
	
		APPPATH/views/template/own_edit.php [ 34 ]
		29 			&lt;div class="form_ocp"&gt;
30 				&lt;?php echo Form::open( 'user/update_own' ); ?&gt;
31 					&lt;fieldset&gt;
32 						&lt;div&gt;
33 							&lt;label for="user_first_name"&gt;Imię:&lt;/label&gt;
34 							&lt;input type="text" name="user_first_name" id="user_first_name" value="&lt;?php echo $user_first_name; ?&gt;" /&gt;
35 						&lt;/div&gt;
36 						&lt;div&gt;
37 							&lt;label for="user_second_name"&gt;Nazwisko:&lt;/label&gt;
38 							&lt;input type="text" name="user_second_name" id="user_second_name" value="&lt;?php echo $user_second_name; ?&gt;" /&gt;
39 						&lt;/div&gt;
		
					
				
					
													APPPATH/views/template/own_edit.php [ 34 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(35) "Undefined variable: user_first_name"
						
											
							2
							string(48) "/var/www/application/views/template/own_edit.php"
						
											
							3
							integer 34
						
											
							4
							array(3) (
    "kohana_view_filename" => string(48) "/var/www/application/views/template/own_edit.php"
    "kohana_view_data" => array(0) 
    "base" => string(11) "http://mvc/"
)
						
										
				
													29 			&lt;div class="form_ocp"&gt;
30 				&lt;?php echo Form::open( 'user/update_own' ); ?&gt;
31 					&lt;fieldset&gt;
32 						&lt;div&gt;
33 							&lt;label for="user_first_name"&gt;Imię:&lt;/label&gt;
34 							&lt;input type="text" name="user_first_name" id="user_first_name" value="&lt;?php echo $user_first_name; ?&gt;" /&gt;
35 						&lt;/div&gt;
36 						&lt;div&gt;
37 							&lt;label for="user_second_name"&gt;Nazwisko:&lt;/label&gt;
38 							&lt;input type="text" name="user_second_name" id="user_second_name" value="&lt;?php echo $user_second_name; ?&gt;" /&gt;
39 						&lt;/div&gt;

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(48) "/var/www/application/views/template/own_edit.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(48) "/var/www/application/views/template/own_edit.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 }

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(48) "/var/www/application/views/template/own_edit.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(48) "/var/www/application/views/template/own_edit.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(48) "/var/www/application/views/template/own_edit.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(48) "/var/www/application/views/template/own_edit.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(48) "/var/www/application/views/template/own_edit.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													SYSPATH/classes/Kohana/Controller/Template.php [ 33 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(48) "/var/www/application/views/template/own_edit.php"
    protected _data => array(0) 
}
						
										
				
													28 		parent::before();
29 
30 		if ($this-&gt;auto_render === TRUE)
31 		{
32 			// Load the template
33 			$this-&gt;template = View::factory($this-&gt;template);
34 		}
35 	}
36 
37 	/**
38 	 * Assigns the template [View] as the request response.

							
								
				
					
													APPPATH/classes/Controller/User.php [ 15 ]
											
					&raquo;
					Kohana_Controller_Template->before()
				
													10     	parent::before();
11         View::set_global('base',URL::base(TRUE, FALSE));     
12         $this-&gt;_title	= 'Edycja profilu';         
13         $this-&gt;__JS__   = 'public/static/js/';
14         $this-&gt;__CSS__	= 'public/static/css/';
15 		parent::before();
16 	}    
17     public function after()
18     {
19 		$_script = array(   
20 		);

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 69 ]
											
					&raquo;
					Controller_User->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_User(7) {
    public template => object View(2) {
        protected _file => string(48) "/var/www/application/views/template/own_edit.php"
        protected _data => array(0) 
    }
    protected _title => string(14) "Edycja profilu"
    protected __JS__ => string(17) "public/static/js/"
    protected __CSS__ => string(18) "public/static/css/"
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => string(21) "http://mvc/home/index"
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(5) "login"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "User"
        protected _action => string(3) "add"
        protected _uri => string(8) "user/add"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(1) (
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => string(8) "HTTP/1.1"
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => string(21) "http://mvc/home/index"
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "login"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "User"
    protected _action => string(3) "add"
    protected _uri => string(8) "user/add"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => string(8) "HTTP/1.1"
}
						
										
				
													109 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 986 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => string(21) "http://mvc/home/index"
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "login"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "User"
    protected _action => string(3) "add"
    protected _uri => string(8) "user/add"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													981 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
982 				':uri' =&gt; $this-&gt;_uri,
983 			));
984 		}
985 
986 		return $this-&gt;_client-&gt;execute($this);
987 	}
988 
989 	/**
990 	 * Returns whether this request is the initial request Kohana received.
991 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (110)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/HTTP.php
				
								
					SYSPATH/classes/Kohana/HTTP.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Cookie.php
				
								
					SYSPATH/classes/Kohana/Cookie.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/User.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					SYSPATH/classes/URL.php
				
								
					SYSPATH/classes/Kohana/URL.php
				
								
					APPPATH/views/template/own_edit.php
				
								
					APPPATH/views/template/header.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
								
					APPPATH/views/template/head.php
				
								
					SYSPATH/classes/Session.php
				
								
					SYSPATH/classes/Kohana/Session.php
				
								
					SYSPATH/config/session.php
				
								
					MODPATH/database/config/session.php
				
								
					SYSPATH/classes/Config/Group.php
				
								
					SYSPATH/classes/Kohana/Config/Group.php
				
								
					SYSPATH/classes/Session/Native.php
				
								
					SYSPATH/classes/Kohana/Session/Native.php
				
								
					APPPATH/classes/Model/User.php
				
								
					APPPATH/classes/Model/Auth/User.php
				
								
					MODPATH/orm/classes/ORM.php
				
								
					MODPATH/orm/classes/Kohana/ORM.php
				
								
					SYSPATH/classes/Model.php
				
								
					SYSPATH/classes/Kohana/Model.php
				
								
					SYSPATH/classes/Inflector.php
				
								
					SYSPATH/classes/Kohana/Inflector.php
				
								
					SYSPATH/config/inflector.php
				
								
					MODPATH/database/classes/Database.php
				
								
					MODPATH/database/classes/Kohana/Database.php
				
								
					MODPATH/database/config/database.php
				
								
					APPPATH/config/database.php
				
								
					MODPATH/database/classes/Database/MySQL.php
				
								
					MODPATH/database/classes/Kohana/Database/MySQL.php
				
								
					MODPATH/database/classes/Database/MySQL/Result.php
				
								
					MODPATH/database/classes/Kohana/Database/MySQL/Result.php
				
								
					MODPATH/database/classes/Database/Result.php
				
								
					MODPATH/database/classes/Kohana/Database/Result.php
				
								
					MODPATH/database/classes/DB.php
				
								
					MODPATH/database/classes/Kohana/DB.php
				
								
					MODPATH/database/classes/Database/Query/Builder/Select.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder/Select.php
				
								
					MODPATH/database/classes/Database/Query/Builder/Where.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder/Where.php
				
								
					MODPATH/database/classes/Database/Query/Builder.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder.php
				
								
					MODPATH/database/classes/Database/Query.php
				
								
					MODPATH/database/classes/Kohana/Database/Query.php
				
								
					APPPATH/views/template/menu.php
				
								
					SYSPATH/classes/Form.php
				
								
					SYSPATH/classes/Kohana/Form.php
				
								
					SYSPATH/classes/HTML.php
				
								
					SYSPATH/classes/Kohana/HTML.php
				
							
		
				Loaded extensions (49)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					session
				
								
					posix
				
								
					Reflection
				
								
					standard
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					Phar
				
								
					exif
				
								
					sysvmsg
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					zip
				
								
					apache2handler
				
								
					PDO
				
								
					gd
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					mcrypt
				
								
					mhash
				
							
		
						$_SESSION
		
			
								
					last_active
					integer 1388401596
				
								
					auth_user
					object Model_User(34) {
    protected _table_name => string(5) "users"
    protected _has_many => array(2) (
        "user_tokens" => array(4) (
            "foreign_key" => string(7) "user_id"
            "through" => NULL
            "far_key" => string(13) "user_token_id"
            "model" => string(10) "User_Token"
        )
        "roles" => array(4) (
            "foreign_key" => string(7) "user_id"
            "through" => string(11) "roles_users"
            "far_key" => string(7) "role_id"
            "model" => string(4) "Role"
        )
    )
    protected _has_one => array(0) 
    protected _belongs_to => array(0) 
    protected _load_with => array(0) 
    protected _validation => NULL
    protected _object => array(10) (
        "id" => string(2) "28"
        "email" => string(24) "rafalkowalski2@gmail.com"
        "username" => string(14) "rafal.kowalski"
        "password" => string(64) "3a8c9b1a6dfe5af81cad38b95ed0f5d22692a85b58a28ccb305b663e5912308b"
        "user_first_name" => string(6) "Rafał"
        "user_second_name" => string(8) "Kowalski"
        "salt_pass" => string(0) ""
        "secure_code" => NULL
        "logins" => string(2) "67"
        "last_login" => string(10) "1388398388"
    )
    protected _changed => array(0) 
    protected _original_values => array(10) (
        "id" => string(2) "28"
        "email" => string(24) "rafalkowalski2@gmail.com"
        "username" => string(14) "rafal.kowalski"
        "password" => string(64) "3a8c9b1a6dfe5af81cad38b95ed0f5d22692a85b58a28ccb305b663e5912308b"
        "user_first_name" => string(6) "Rafał"
        "user_second_name" => string(8) "Kowalski"
        "salt_pass" => string(0) ""
        "secure_code" => NULL
        "logins" => string(2) "67"
        "last_login" => string(10) "1388398388"
    )
    protected _related => array(0) 
    protected _valid => bool TRUE
    protected _loaded => bool TRUE
    protected _saved => bool TRUE
    protected _sorting => NULL
    protected _foreign_key_suffix => string(3) "_id"
    protected _object_name => string(4) "user"
    protected _object_plural => string(5) "users"
    protected _table_columns => array(10) (
        "id" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(2) "id"
            "column_default" => NULL
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 1
            "display" => string(2) "11"
            "comment" => string(0) ""
            "extra" => string(14) "auto_increment"
            "key" => string(3) "PRI"
            "privileges" => string(31) "select,insert,update,references"
        )
        "email" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(5) "email"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 2
            "character_maximum_length" => string(3) "254"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(3) "UNI"
            "privileges" => string(31) "select,insert,update,references"
        )
        "username" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(8) "username"
            "column_default" => string(0) ""
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 3
            "character_maximum_length" => string(2) "32"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(3) "UNI"
            "privileges" => string(31) "select,insert,update,references"
        )
        "password" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(8) "password"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 4
            "character_maximum_length" => string(2) "80"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(31) "select,insert,update,references"
        )
        "user_first_name" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(15) "user_first_name"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool TRUE
            "ordinal_position" => integer 5
            "character_maximum_length" => string(2) "64"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(31) "select,insert,update,references"
        )
        "user_second_name" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(16) "user_second_name"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool TRUE
            "ordinal_position" => integer 6
            "character_maximum_length" => string(2) "64"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(31) "select,insert,update,references"
        )
        "salt_pass" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(9) "salt_pass"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 7
            "character_maximum_length" => string(2) "30"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(31) "select,insert,update,references"
        )
        "secure_code" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(11) "secure_code"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool TRUE
            "ordinal_position" => integer 8
            "character_maximum_length" => string(2) "30"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(31) "select,insert,update,references"
        )
        "logins" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(6) "logins"
            "column_default" => string(1) "0"
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 9
            "display" => string(2) "10"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(31) "select,insert,update,references"
        )
        "last_login" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(10) "last_login"
            "column_default" => NULL
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool TRUE
            "ordinal_position" => integer 10
            "display" => string(2) "10"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(31) "select,insert,update,references"
        )
    )
    protected _updated_column => NULL
    protected _created_column => NULL
    protected _serialize_columns => array(0) 
    protected _primary_key => string(2) "id"
    protected _primary_key_value => string(2) "28"
    protected _table_names_plural => bool TRUE
    protected _reload_on_wakeup => bool TRUE
    protected _db => object Database_MySQL(6) {
        protected _connection_id => string(40) "f9d0971021adfd3b0d1e49a9a35d379800143fb3"
        protected _identifier => string(1) "`"
        public last_query => string(411) "SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.&nbsp;&hellip;"
        protected _instance => string(7) "default"
        protected _connection => resource(mysql link)
        protected _config => array(5) (
            "type" => string(5) "MySQL"
            "connection" => array(3) (
                "hostname" => string(9) "127.0.0.1"
                "database" => string(14) "serwis-e-watch"
                "persistent" => bool FALSE
            )
            "table_prefix" => string(0) ""
            "charset" => string(4) "utf8"
            "caching" => bool FALSE
        )
    }
    protected _db_group => NULL
    protected _db_applied => array(0) 
    protected _db_pending => array(0) 
    protected _db_reset => bool TRUE
    protected _db_builder => NULL
    protected _with_applied => array(0) 
    protected _cast_data => array(0) 
    protected _errors_filename => string(4) "user"
}
				
								
					user_first_name
					string(6) "Rafał"
				
								
					user_second_name
					string(8) "Kowalski"
				
							
		
												$_COOKIE
		
			
								
					session
					string(32) "51c4ce2a048d5f26a1f1b702e53349da"
				
							
		
						$_SERVER
		
			
								
					REDIRECT_STATUS
					string(3) "200"
				
								
					HTTP_HOST
					string(3) "mvc"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					HTTP_ACCEPT
					string(74) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(108) "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36"
				
								
					HTTP_REFERER
					string(21) "http://mvc/home/index"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(44) "pl-PL,pl;q=0.8,en-US;q=0.6,en;q=0.4,fr;q=0.2"
				
								
					HTTP_COOKIE
					string(40) "session=51c4ce2a048d5f26a1f1b702e53349da"
				
								
					PATH
					string(28) "/usr/local/bin:/usr/bin:/bin"
				
								
					SERVER_SIGNATURE
					string(64) "&lt;address&gt;Apache/2.2.22 (Ubuntu) Server at mvc Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(22) "Apache/2.2.22 (Ubuntu)"
				
								
					SERVER_NAME
					string(3) "mvc"
				
								
					SERVER_ADDR
					string(11) "192.168.0.6"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(11) "192.168.0.5"
				
								
					DOCUMENT_ROOT
					string(8) "/var/www"
				
								
					SERVER_ADMIN
					string(19) "webmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(18) "/var/www/index.php"
				
								
					REMOTE_PORT
					string(5) "52216"
				
								
					REDIRECT_URL
					string(9) "/user/add"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(9) "/user/add"
				
								
					SCRIPT_NAME
					string(10) "/index.php"
				
								
					PATH_INFO
					string(9) "/user/add"
				
								
					PATH_TRANSLATED
					string(32) "redirect:/index.php/user/add/add"
				
								
					PHP_SELF
					string(19) "/index.php/user/add"
				
								
					REQUEST_TIME_FLOAT
					float 1388401675,489
				
								
					REQUEST_TIME
					integer 1388401675
				
								
					argv
					array(0) 
				
								
					argc
					integer 0
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:07:55 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory(Object(View))
#3 /var/www/application/classes/Controller/User.php(15): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:08:18 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:18 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:19 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:19 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:19 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:19 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:19 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:19 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:19 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:19 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:08:24 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:08:41 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:41 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:41 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:41 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:42 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:42 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:42 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:42 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:42 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:42 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/User.php [ 23 ] in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:08:43 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 23, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:23
2013-12-30 05:10:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/user_add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:52 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/user_a...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/user_a...', NULL)
#2 /var/www/application/classes/Controller/User.php(138): Kohana_View::factory('template/user_a...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/user_add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:53 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/user_a...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/user_a...', NULL)
#2 /var/www/application/classes/Controller/User.php(138): Kohana_View::factory('template/user_a...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/user_add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/user_a...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/user_a...', NULL)
#2 /var/www/application/classes/Controller/User.php(138): Kohana_View::factory('template/user_a...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/user_add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/user_a...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/user_a...', NULL)
#2 /var/www/application/classes/Controller/User.php(138): Kohana_View::factory('template/user_a...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/user_add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/user_a...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/user_a...', NULL)
#2 /var/www/application/classes/Controller/User.php(138): Kohana_View::factory('template/user_a...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/user_add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/user_a...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/user_a...', NULL)
#2 /var/www/application/classes/Controller/User.php(138): Kohana_View::factory('template/user_a...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/user_add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:54 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/user_a...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/user_a...', NULL)
#2 /var/www/application/classes/Controller/User.php(138): Kohana_View::factory('template/user_a...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/user_add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:10:55 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/user_a...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/user_a...', NULL)
#2 /var/www/application/classes/Controller/User.php(138): Kohana_View::factory('template/user_a...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:12:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:37 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:38 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:38 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:39 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:39 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:12:39 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:13:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:04 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:05 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:05 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:05 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:06 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:07 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:07 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:08 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:08 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:08 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:08 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:09 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:10 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/application/classes/Controller/User.php(14): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:13:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:13:30 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/User.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_User->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:22:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:22:30 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('home')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('home', NULL)
#2 /var/www/application/classes/Controller/Home.php(8): Kohana_View::factory('home')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-30 05:24:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:48 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/template/site.php(7): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/MyTemplate.php(26): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_MyTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:49 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/template/site.php(7): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/MyTemplate.php(26): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_MyTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:50 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/template/site.php(7): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/MyTemplate.php(26): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_MyTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:50 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/template/site.php(7): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/MyTemplate.php(26): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_MyTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:51 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/template/site.php(7): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/MyTemplate.php(26): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_MyTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:24:51 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/template/site.php(7): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/MyTemplate.php(26): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_MyTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:25:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 34 ] in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:25:10 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 34, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/template/site.php(7): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/MyTemplate.php(26): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_MyTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/own_edit.php:34
2013-12-30 05:31:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting identifier (T_STRING) ~ APPPATH/classes/Controller/User.php [ 123 ] in file:line
2013-12-30 05:31:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 05:40:50 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-30 05:40:50 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/User.php(119): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-30 05:41:34 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-30 05:41:34 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/User.php(119): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
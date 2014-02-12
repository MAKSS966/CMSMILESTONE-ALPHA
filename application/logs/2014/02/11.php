<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-11 07:57:56 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 07:57:56 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(6): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 07:58:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-11 07:58:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 08:04:21 --- EMERGENCY: ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /var/www/application/bootstrap.php:75) ~ APPPATH/classes/Controller/CMSTemplate.php [ 42 ] in file:line
2014-02-11 08:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Cannot modify h...', '/var/www/applic...', 42, Array)
#1 /var/www/application/classes/Controller/CMSTemplate.php(42): setcookie('cms_lang', 'pl-pl', 1394719461)
#2 [internal function]: Controller_CMSTemplate->__construct(Object(Request), Object(Response))
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in file:line
2014-02-11 08:05:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-11 08:05:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 11:10:00 --- EMERGENCY: ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /var/www/application/bootstrap.php:75) ~ APPPATH/classes/Controller/CMSTemplate.php [ 42 ] in file:line
2014-02-11 11:10:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Cannot modify h...', '/var/www/applic...', 42, Array)
#1 /var/www/application/classes/Controller/CMSTemplate.php(42): setcookie('cms_lang', 'pl-pl', 1394730600)
#2 [internal function]: Controller_CMSTemplate->__construct(Object(Request), Object(Response))
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in file:line
2014-02-11 12:43:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-11 12:43:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting catch (T_CATCH) ~ APPPATH/classes/Controller/User.php [ 62 ] in file:line
2014-02-11 12:44:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting catch (T_CATCH) ~ APPPATH/classes/Controller/User.php [ 62 ] in file:line
2014-02-11 12:44:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting catch (T_CATCH) ~ APPPATH/classes/Controller/User.php [ 62 ] in file:line
2014-02-11 12:44:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting catch (T_CATCH) ~ APPPATH/classes/Controller/User.php [ 62 ] in file:line
2014-02-11 12:44:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting catch (T_CATCH) ~ APPPATH/classes/Controller/User.php [ 62 ] in file:line
2014-02-11 12:44:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_MyTemplate' not found ~ APPPATH/classes/Controller/User.php [ 3 ] in file:line
2014-02-11 12:44:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_MyTemplate' not found ~ APPPATH/classes/Controller/User.php [ 3 ] in file:line
2014-02-11 12:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_MyTemplate' not found ~ APPPATH/classes/Controller/User.php [ 3 ] in file:line
2014-02-11 12:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:44:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_MyTemplate' not found ~ APPPATH/classes/Controller/User.php [ 3 ] in file:line
2014-02-11 12:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 12:45:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-11 12:45:33 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-11 12:45:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-11 12:45:34 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-11 12:45:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-11 12:45:34 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-11 12:45:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-11 12:45:34 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-11 12:45:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-11 12:45:35 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-11 12:47:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/own_edit_prifle could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-02-11 12:47:10 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/own_ed...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/own_ed...', NULL)
#2 /var/www/application/classes/Controller/User.php(30): Kohana_View::factory('template/own_ed...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_own_edit_profile()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-02-11 12:47:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/own_edit_prifle could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-02-11 12:47:32 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/own_ed...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/own_ed...', NULL)
#2 /var/www/application/classes/Controller/User.php(30): Kohana_View::factory('template/own_ed...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_own_edit_profile()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-02-11 12:47:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/own_edit_prifle could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-02-11 12:47:32 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/own_ed...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/own_ed...', NULL)
#2 /var/www/application/classes/Controller/User.php(30): Kohana_View::factory('template/own_ed...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_own_edit_profile()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-02-11 13:53:07 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 13:53:07 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/application/views/template/head.php(9): Kohana_Session::instance()
#3 /var/www/application/views/template/site.php(4): require_once('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#5 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#6 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#7 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#8 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 14:23:55 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 14:23:55 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/application/views/template/head.php(9): Kohana_Session::instance()
#3 /var/www/application/views/template/site.php(4): require_once('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#5 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#6 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#7 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#8 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 14:28:59 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 14:28:59 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/application/views/template/head.php(9): Kohana_Session::instance()
#3 /var/www/application/views/template/site.php(4): require_once('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#5 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#6 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#7 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#8 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 14:43:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 14:43:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 14:43:22 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 14:43:22 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/application/views/template/head.php(9): Kohana_Session::instance()
#3 /var/www/application/views/template/site.php(4): require_once('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#5 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#6 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#7 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#8 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-11 14:43:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 14:43:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 14:43:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 14:43:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 14:43:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 14:43:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-11 14:43:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '__' (T_STRING), expecting ',' or ';' ~ APPPATH/views/template/own_edit_profile.php [ 18 ] in file:line
2014-02-11 14:43:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
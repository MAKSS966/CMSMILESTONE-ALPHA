<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-28 06:05:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-28 06:05:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:05:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/template/login_panel.php [ 7 ] in /var/www/application/views/template/login_panel.php:7
2013-12-28 06:05:35 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 7, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:7
2013-12-28 06:05:58 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in /var/www/application/classes/Controller/Login.php on line 44 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1563 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1563
2013-12-28 06:05:58 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1563): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/module...', 1563, Array)
#1 /var/www/application/classes/Controller/Login.php(44): Kohana_ORM->add(Object(Model_Role))
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1563
2013-12-28 06:17:53 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'signup_id' in 'field list' [ INSERT INTO `roles_users` (`signup_id`, `role_id`) VALUES (NULL, 1), (NULL, 2) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-28 06:17:53 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Login.php(44): Kohana_ORM->add('roles', Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-28 06:20:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-28 06:20:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:20:26 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'signup_id' in 'field list' [ INSERT INTO `roles_users` (`signup_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-28 06:20:26 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Login.php(44): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-28 06:21:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'signup_id' in 'field list' [ INSERT INTO `roles_users` (`signup_id`, `role_id`) VALUES (24, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-28 06:21:06 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Login.php(45): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2013-12-28 06:37:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Default' not found ~ APPPATH/classes/Controller/Login.php [ 3 ] in file:line
2013-12-28 06:37:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:38:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Default' not found ~ APPPATH/classes/Controller/Login.php [ 3 ] in file:line
2013-12-28 06:38:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:38:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Default' not found ~ APPPATH/classes/Controller/Login.php [ 3 ] in file:line
2013-12-28 06:38:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:38:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Default' not found ~ APPPATH/classes/Controller/Login.php [ 3 ] in file:line
2013-12-28 06:38:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:38:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Default' not found ~ APPPATH/classes/Controller/Login.php [ 3 ] in file:line
2013-12-28 06:38:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:38:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Default' not found ~ APPPATH/classes/Controller/Login.php [ 3 ] in file:line
2013-12-28 06:38:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:40:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Login.php [ 44 ] in file:line
2013-12-28 06:40:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:51:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: role ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1567
2013-12-28 06:51:55 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/module...', 1567, Array)
#1 /var/www/application/classes/Controller/Login.php(43): Kohana_ORM->add('role', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1567
2013-12-28 06:53:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Logim' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-28 06:53:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:53:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Logi' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-12-28 06:53:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 06:59:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Login.php [ 53 ] in file:line
2013-12-28 06:59:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:02:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/views/template/login_panel.php [ 48 ] in /var/www/application/views/template/login_panel.php:48
2013-12-28 07:02:26 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:48
2013-12-28 07:02:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/views/template/login_panel.php [ 48 ] in /var/www/application/views/template/login_panel.php:48
2013-12-28 07:02:29 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:48
2013-12-28 07:02:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/views/template/login_panel.php [ 48 ] in /var/www/application/views/template/login_panel.php:48
2013-12-28 07:02:32 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:48
2013-12-28 07:04:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Home.php [ 8 ] in file:line
2013-12-28 07:04:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:04:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Home.php [ 8 ] in file:line
2013-12-28 07:04:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:04:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Home.php [ 8 ] in file:line
2013-12-28 07:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:04:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-28 07:04:37 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-28 07:07:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Home.php [ 35 ] in file:line
2013-12-28 07:07:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:07:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Home.php [ 35 ] in file:line
2013-12-28 07:07:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:09:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/template/login_panel.php [ 7 ] in /var/www/application/views/template/login_panel.php:7
2013-12-28 07:09:28 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 7, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:7
2013-12-28 07:09:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/template/login_panel.php [ 7 ] in /var/www/application/views/template/login_panel.php:7
2013-12-28 07:09:34 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 7, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:7
2013-12-28 07:14:11 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:14:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:14:38 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:14:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:14:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:15:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:15:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:15:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:15:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:15:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:15:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:15:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:15:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:15:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:15:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:15:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:16:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Secure.php [ 39 ] in file:line
2013-12-28 07:16:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:16:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Secure.php [ 39 ] in file:line
2013-12-28 07:16:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:16:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:16:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:16:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:16:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:16:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:16:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:16:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:16:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:16:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:16:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:16:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-12-28 07:16:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:24:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Default' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2013-12-28 07:24:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:24:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH/classes/Controller/Home.php [ 38 ] in file:line
2013-12-28 07:24:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:24:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH/classes/Controller/Home.php [ 38 ] in file:line
2013-12-28 07:24:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:24:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH/classes/Controller/Home.php [ 38 ] in file:line
2013-12-28 07:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:24:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH/classes/Controller/Home.php [ 38 ] in file:line
2013-12-28 07:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:24:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH/classes/Controller/Home.php [ 38 ] in file:line
2013-12-28 07:24:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:30:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/Controller/Login.php [ 63 ] in /var/www/application/classes/Controller/Login.php:63
2013-12-28 07:30:16 --- DEBUG: #0 /var/www/application/classes/Controller/Login.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 63, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Login.php:63
2013-12-28 07:30:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/Controller/Login.php [ 63 ] in /var/www/application/classes/Controller/Login.php:63
2013-12-28 07:30:30 --- DEBUG: #0 /var/www/application/classes/Controller/Login.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 63, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Login.php:63
2013-12-28 07:31:29 --- EMERGENCY: Exception [ 0 ]: Podano błędny login i/lub hasło ~ APPPATH/classes/Controller/Login.php [ 58 ] in /var/www/system/classes/Kohana/Controller.php:84
2013-12-28 07:31:29 --- DEBUG: #0 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#3 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/index.php(118): Kohana_Request->execute()
#6 {main} in /var/www/system/classes/Kohana/Controller.php:84
2013-12-28 07:31:40 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 07:31:40 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Login.php(38): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 07:31:49 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, none given, called in /var/www/application/classes/Controller/Login.php on line 58 and defined ~ MODPATH/orm/classes/Kohana/ORM/Validation/Exception.php [ 34 ] in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2013-12-28 07:31:49 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 34, Array)
#1 /var/www/application/classes/Controller/Login.php(58): Kohana_ORM_Validation_Exception->__construct('Podano b????dny...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2013-12-28 07:33:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/login_panel.php [ 14 ] in /var/www/application/views/template/login_panel.php:14
2013-12-28 07:33:07 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(14): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 14, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:14
2013-12-28 07:34:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Login.php [ 58 ] in file:line
2013-12-28 07:34:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 07:38:54 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 07:38:54 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Login.php(38): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 07:39:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/template/login_panel.php [ 7 ] in /var/www/application/views/template/login_panel.php:7
2013-12-28 07:39:17 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 7, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:7
2013-12-28 07:44:49 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 07:44:49 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Login.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 07:48:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/template/login_panel.php [ 8 ] in /var/www/application/views/template/login_panel.php:8
2013-12-28 07:48:53 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 8, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:8
2013-12-28 07:48:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/template/login_panel.php [ 8 ] in /var/www/application/views/template/login_panel.php:8
2013-12-28 07:48:58 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 8, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:8
2013-12-28 07:49:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/template/login_panel.php [ 8 ] in /var/www/application/views/template/login_panel.php:8
2013-12-28 07:49:01 --- DEBUG: #0 /var/www/application/views/template/login_panel.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 8, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/Login.php(28): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_Login->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/login_panel.php:8
2013-12-28 08:51:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/Login.php [ 46 ] in file:line
2013-12-28 08:51:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 08:52:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user_first_name ~ APPPATH/classes/Controller/Login.php [ 88 ] in /var/www/application/classes/Controller/Login.php:88
2013-12-28 08:52:13 --- DEBUG: #0 /var/www/application/classes/Controller/Login.php(88): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 88, Array)
#1 /var/www/application/classes/Controller/Login.php(59): Controller_Login->get_user_info()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Login.php:88
2013-12-28 08:53:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method stdClass::set() ~ APPPATH/classes/Controller/Login.php [ 90 ] in file:line
2013-12-28 08:53:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 09:00:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '" title="' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/template/head.php [ 8 ] in file:line
2013-12-28 09:00:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 09:26:20 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 09:26:20 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 09:42:55 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 09:42:55 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 10:16:37 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 10:16:37 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 10:17:27 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 10:17:27 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 10:57:55 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 10:57:55 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 12:40:17 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 12:40:17 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 13:03:30 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 13:03:30 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 13:09:59 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 13:09:59 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 14:51:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/own_edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2013-12-28 14:51:09 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/own_ed...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/own_ed...', NULL)
#2 /var/www/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template/own_ed...')
#3 /var/www/application/classes/Controller/User.php(10): Kohana_Controller_Template->before()
#4 /var/www/system/classes/Kohana/Controller.php(69): Controller_User->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/View.php:137
2013-12-28 15:46:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '&&' (T_BOOLEAN_AND) ~ APPPATH/classes/Controller/User.php [ 42 ] in file:line
2013-12-28 15:46:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 15:46:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'AND' (T_LOGICAL_AND) ~ APPPATH/classes/Controller/User.php [ 42 ] in file:line
2013-12-28 15:46:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 15:46:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'unset' (T_UNSET), expecting ')' ~ APPPATH/classes/Controller/User.php [ 45 ] in file:line
2013-12-28 15:46:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 15:47:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'unset' (T_UNSET), expecting ')' ~ APPPATH/classes/Controller/User.php [ 45 ] in file:line
2013-12-28 15:47:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 15:47:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'unset' (T_UNSET), expecting ')' ~ APPPATH/classes/Controller/User.php [ 45 ] in file:line
2013-12-28 15:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 15:59:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY) ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2013-12-28 15:59:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 16:00:39 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-12-28 16:00:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(48): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-28 16:01:24 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-12-28 16:01:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(48): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-28 16:01:48 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-12-28 16:01:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(48): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-28 16:01:49 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-12-28 16:01:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(48): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-28 16:01:50 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, first array member is not a valid class name or object ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-12-28 16:01:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(48): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-12-28 16:13:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/User.php [ 50 ] in file:line
2013-12-28 16:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 16:14:13 --- EMERGENCY: ReflectionException [ 0 ]: Function min_lenght() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /var/www/system/classes/Kohana/Validation.php:396
2013-12-28 16:14:13 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('min_lenght')
#1 /var/www/application/classes/Controller/User.php(51): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:396
2013-12-28 16:16:38 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Auth::check_password() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/User.php [ 53 ] in /var/www/application/classes/Controller/User.php:53
2013-12-28 16:16:38 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(53): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/applic...', 53, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:53
2013-12-28 16:16:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User::$auth ~ APPPATH/classes/Controller/User.php [ 53 ] in /var/www/application/classes/Controller/User.php:53
2013-12-28 16:16:55 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(53): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 53, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:53
2013-12-28 16:21:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Validation::matches() ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2013-12-28 16:21:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 16:21:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Validation::matches() ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2013-12-28 16:21:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 16:29:31 --- EMERGENCY: ReflectionException [ 0 ]: Function matche() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /var/www/system/classes/Kohana/Validation.php:396
2013-12-28 16:29:31 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('matche')
#1 /var/www/application/classes/Controller/User.php(53): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:396
2013-12-28 16:39:02 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 16:39:02 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/User.php(44): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 16:46:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: new_password ~ SYSPATH/classes/Kohana/Validation.php [ 102 ] in /var/www/system/classes/Kohana/Validation.php:102
2013-12-28 16:46:35 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/system...', 102, Array)
#1 /var/www/system/classes/Kohana/Valid.php(548): Kohana_Validation->offsetGet('new_password')
#2 [internal function]: Kohana_Valid::matches(Object(Validation), 'confirm_passwor...', 'new_password')
#3 /var/www/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /var/www/application/classes/Controller/User.php(53): Kohana_Validation->check()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Validation.php:102
2013-12-28 16:51:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::change_password() ~ APPPATH/classes/Controller/User.php [ 58 ] in file:line
2013-12-28 16:51:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 16:52:45 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 16:52:45 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, true)
#2 /var/www/application/classes/Controller/User.php(58): Model_Auth_User->update_user(Array, true)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 16:53:46 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 16:53:46 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, true)
#2 /var/www/application/classes/Controller/User.php(58): Model_Auth_User->update_user(Array, true)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 16:54:08 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 16:54:08 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, true)
#2 /var/www/application/classes/Controller/User.php(58): Model_Auth_User->update_user(Array, true)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 16:56:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH/classes/Controller/User.php [ 61 ] in file:line
2013-12-28 16:56:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 16:58:40 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 16:58:40 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, true)
#2 /var/www/application/classes/Controller/User.php(60): Model_Auth_User->update_user(Array, true)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:01:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::change_password() ~ APPPATH/classes/Controller/User.php [ 60 ] in file:line
2013-12-28 17:01:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:06:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::change_password() ~ APPPATH/classes/Controller/User.php [ 58 ] in file:line
2013-12-28 17:06:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:07:50 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:07:50 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, false)
#2 /var/www/application/classes/Controller/User.php(58): Model_Auth_User->update_user(Array, false)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:08:07 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:08:07 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, true)
#2 /var/www/application/classes/Controller/User.php(58): Model_Auth_User->update_user(Array, true)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:08:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::update_user() ~ APPPATH/classes/Controller/User.php [ 58 ] in file:line
2013-12-28 17:08:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:09:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::change_password() ~ APPPATH/classes/Controller/User.php [ 58 ] in file:line
2013-12-28 17:09:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:09:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::change_password() ~ APPPATH/classes/Controller/User.php [ 58 ] in file:line
2013-12-28 17:09:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:09:23 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::factory(), called in /var/www/application/classes/Controller/User.php on line 57 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 41 ] in /var/www/modules/orm/classes/Kohana/ORM.php:41
2013-12-28 17:09:23 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(41): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/module...', 41, Array)
#1 /var/www/application/classes/Controller/User.php(57): Kohana_ORM::factory()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:41
2013-12-28 17:09:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::change_password() ~ APPPATH/classes/Controller/User.php [ 58 ] in file:line
2013-12-28 17:09:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:10:04 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:10:04 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, true)
#2 /var/www/application/classes/Controller/User.php(58): Model_Auth_User->update_user(Array, true)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:10:05 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:10:05 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, true)
#2 /var/www/application/classes/Controller/User.php(58): Model_Auth_User->update_user(Array, true)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:10:07 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM::values() must be of the type array, boolean given, called in /var/www/application/classes/Model/Auth/User.php on line 201 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:10:07 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 775, Array)
#1 /var/www/application/classes/Model/Auth/User.php(201): Kohana_ORM->values(Array, true)
#2 /var/www/application/classes/Controller/User.php(58): Model_Auth_User->update_user(Array, true)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:775
2013-12-28 17:21:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_has_password ~ APPPATH/classes/Controller/User.php [ 59 ] in /var/www/application/classes/Controller/User.php:59
2013-12-28 17:21:09 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 59, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:59
2013-12-28 17:21:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new_has_password ~ APPPATH/classes/Controller/User.php [ 59 ] in /var/www/application/classes/Controller/User.php:59
2013-12-28 17:21:25 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 59, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:59
2013-12-28 17:21:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH/classes/Controller/User.php [ 59 ] in file:line
2013-12-28 17:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:22:37 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 17:22:37 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/User.php(44): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 17:26:40 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 17:26:40 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/User.php(44): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_pass()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 17:26:58 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 17:26:58 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Home.php(32): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2013-12-28 17:35:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/template/own_edit.php [ 23 ] in file:line
2013-12-28 17:35:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:36:17 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/User.php [ 62 ] in file:line
2013-12-28 17:36:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:37:10 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/User.php [ 62 ] in file:line
2013-12-28 17:37:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 17:45:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting :: (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/views/template/own_edit.php [ 22 ] in file:line
2013-12-28 17:45:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 18:10:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH), expecting ',' or ';' ~ APPPATH/views/template/own_edit.php [ 27 ] in file:line
2013-12-28 18:10:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-28 18:32:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH/views/template/own_edit.php [ 28 ] in /var/www/application/views/template/own_edit.php:28
2013-12-28 18:32:28 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 28, Array)
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
#11 {main} in /var/www/application/views/template/own_edit.php:28
2013-12-28 18:34:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-28 18:34:47 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
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
2013-12-28 18:34:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-28 18:34:54 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
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
2013-12-28 18:34:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-28 18:34:56 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
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
2013-12-28 18:34:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-28 18:34:56 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
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
2013-12-28 18:34:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-28 18:34:58 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
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
2013-12-28 18:34:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-28 18:34:58 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
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
2013-12-28 18:35:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_first_name ~ APPPATH/views/template/own_edit.php [ 20 ] in /var/www/application/views/template/own_edit.php:20
2013-12-28 18:35:23 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 20, Array)
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
2013-12-28 18:36:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_second_name ~ APPPATH/views/template/own_edit.php [ 24 ] in /var/www/application/views/template/own_edit.php:24
2013-12-28 18:36:31 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 24, Array)
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
#11 {main} in /var/www/application/views/template/own_edit.php:24
2013-12-28 18:38:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH/views/template/own_edit.php [ 28 ] in /var/www/application/views/template/own_edit.php:28
2013-12-28 18:38:41 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 28, Array)
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
#11 {main} in /var/www/application/views/template/own_edit.php:28
2013-12-28 18:38:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH/views/template/own_edit.php [ 28 ] in /var/www/application/views/template/own_edit.php:28
2013-12-28 18:38:44 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 28, Array)
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
#11 {main} in /var/www/application/views/template/own_edit.php:28
2013-12-28 18:38:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH/views/template/own_edit.php [ 28 ] in /var/www/application/views/template/own_edit.php:28
2013-12-28 18:38:52 --- DEBUG: #0 /var/www/application/views/template/own_edit.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 28, Array)
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
#11 {main} in /var/www/application/views/template/own_edit.php:28
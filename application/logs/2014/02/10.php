<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-10 05:13:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:13:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:13:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:13:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:13:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:13:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:13:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:13:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:13:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 05:13:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 05:51:31 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘roles’ - assumed '‘roles’' ~ APPPATH/classes/Controller/Login.php [ 44 ] in /var/www/application/classes/Controller/Login.php:44
2014-02-10 05:51:31 --- DEBUG: #0 /var/www/application/classes/Controller/Login.php(44): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 44, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Login.php:44
2014-02-10 05:51:42 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:51:42 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:51:43 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:51:43 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:51:44 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:51:44 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:51:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘role’ - assumed '‘role’' ~ APPPATH/classes/Controller/Login.php [ 44 ] in /var/www/application/classes/Controller/Login.php:44
2014-02-10 05:51:58 --- DEBUG: #0 /var/www/application/classes/Controller/Login.php(44): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 44, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Login.php:44
2014-02-10 05:52:18 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:18 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:19 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:19 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:19 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:20 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:52:20 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:53:49 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant ‘roles’ - assumed '‘roles’' ~ APPPATH/classes/Controller/Login.php [ 38 ] in /var/www/application/classes/Controller/Login.php:38
2014-02-10 05:53:49 --- DEBUG: #0 /var/www/application/classes/Controller/Login.php(38): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 38, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Login.php:38
2014-02-10 05:55:39 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:55:39 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:55:48 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:55:48 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/Login.php(36): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2014-02-10 05:57:36 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 05:57:36 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Login.php(51): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 05:57:44 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 05:57:44 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2014-02-10 07:18:03 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 07:18:03 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2014-02-10 07:24:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/template/head.php [ 18 ] in file:line
2014-02-10 07:24:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 07:24:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/template/head.php [ 18 ] in file:line
2014-02-10 07:24:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 07:28:47 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 07:28:47 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Login.php(64): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 07:53:40 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 07:53:40 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2014-02-10 07:56:44 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 07:56:44 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2014-02-10 08:04:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_MyTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:04:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:04:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:04:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:04:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:04:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:04:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:04:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:04:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:04:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:05:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_CMSTemplate' not found ~ APPPATH/classes/Controller/Home.php [ 3 ] in file:line
2014-02-10 08:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:06:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:06:43 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:06:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 16 ] in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:43 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 16, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:06:43 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:06:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 16 ] in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:43 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 16, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:06:43 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:06:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 16 ] in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:44 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 16, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:06:44 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:06:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 16 ] in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:44 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 16, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:06:44 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:06:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 16 ] in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:44 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 16, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:06:44 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:06:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 16 ] in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:44 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 16, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:06:44 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:06:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 16 ] in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:45 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 16, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:16
2014-02-10 08:06:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:06:45 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:11 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:07:11 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:11 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:07:11 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:11 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:07:11 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:07:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:12 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lang ~ DOCROOT/index.php [ 124 ] in /var/www/index.php:124
2014-02-10 08:07:12 --- DEBUG: #0 /var/www/index.php(124): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/index....', 124, Array)
#1 {main} in /var/www/index.php:124
2014-02-10 08:07:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:27 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/classes/Controller/CMSTemplate.php [ 17 ] in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:07:28 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:17
2014-02-10 08:09:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-02-10 08:09:10 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('', NULL)
#2 /var/www/application/classes/Controller/Home.php(8): Kohana_View::factory('')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-02-10 08:09:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/system/classes/Kohana/View.php:137
2014-02-10 08:09:11 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(137): Kohana_View->set_filename('')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('', NULL)
#2 /var/www/application/classes/Controller/Home.php(8): Kohana_View::factory('')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:137
2014-02-10 08:09:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Home.php [ 9 ] in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:15 --- DEBUG: #0 /var/www/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:16 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 08:09:16 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2014-02-10 08:09:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Home.php [ 9 ] in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:16 --- DEBUG: #0 /var/www/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Home.php [ 9 ] in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:16 --- DEBUG: #0 /var/www/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Home.php [ 9 ] in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:17 --- DEBUG: #0 /var/www/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Home.php [ 9 ] in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:17 --- DEBUG: #0 /var/www/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Home.php:9
2014-02-10 08:09:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-10 08:09:24 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(35): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-10 08:09:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-10 08:09:24 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(35): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-10 08:09:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-10 08:09:24 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(35): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-10 08:09:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/site.php [ 5 ] in /var/www/application/views/template/site.php:5
2014-02-10 08:09:25 --- DEBUG: #0 /var/www/application/views/template/site.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/CMSTemplate.php(35): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/site.php:5
2014-02-10 08:17:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Controller/CMSTemplate.php [ 24 ] in file:line
2014-02-10 08:17:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:17:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Controller/CMSTemplate.php [ 24 ] in file:line
2014-02-10 08:17:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:17:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Controller/CMSTemplate.php [ 24 ] in file:line
2014-02-10 08:17:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:17:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Controller/CMSTemplate.php [ 24 ] in file:line
2014-02-10 08:17:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:17:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Controller/CMSTemplate.php [ 24 ] in file:line
2014-02-10 08:17:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:17:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Controller/CMSTemplate.php [ 24 ] in file:line
2014-02-10 08:17:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 08:36:55 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 13 ] in /var/www/application/classes/Controller/CMSTemplate.php:13
2014-02-10 08:36:55 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 13, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:13
2014-02-10 08:36:58 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 13 ] in /var/www/application/classes/Controller/CMSTemplate.php:13
2014-02-10 08:36:58 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 13, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:13
2014-02-10 08:37:10 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 13 ] in /var/www/application/classes/Controller/CMSTemplate.php:13
2014-02-10 08:37:10 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 13, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:13
2014-02-10 08:37:10 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 13 ] in /var/www/application/classes/Controller/CMSTemplate.php:13
2014-02-10 08:37:10 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 13, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:13
2014-02-10 08:37:17 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 25 ] in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:17 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 25, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:18 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 25 ] in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:18 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 25, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:18 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 25 ] in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:18 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 25, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:18 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 25 ] in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:18 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 25, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:18 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 25 ] in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:18 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 25, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:19 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 25 ] in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:19 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 25, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:19 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 25 ] in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:19 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 25, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:19 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/CMSTemplate.php [ 25 ] in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 08:37:19 --- DEBUG: #0 /var/www/application/classes/Controller/CMSTemplate.php(25): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 25, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_CMSTemplate->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/CMSTemplate.php:25
2014-02-10 09:07:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '" title="' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/template/head.php [ 28 ] in file:line
2014-02-10 09:07:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 09:07:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '" title="' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/template/head.php [ 28 ] in file:line
2014-02-10 09:07:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 11:00:12 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 11:00:12 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Login.php(64): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 11:09:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 11:09:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 11:11:36 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 11:11:36 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Login.php(64): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 11:12:23 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 11:12:23 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/Login.php(64): Kohana_Auth::instance()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/system/classes/Kohana/Session.php:125
2014-02-10 11:20:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function __() ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ] in file:line
2014-02-10 11:20:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 11:20:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function __() ~ APPPATH/views/template/head.php [ 17 ] in file:line
2014-02-10 11:20:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 11:21:53 --- EMERGENCY: ErrorException [ 2 ]: session_regenerate_id(): Cannot regenerate session id - headers already sent ~ SYSPATH/classes/Kohana/Session/Native.php [ 57 ] in file:line
2014-02-10 11:21:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'session_regener...', '/var/www/system...', 57, Array)
#1 /var/www/system/classes/Kohana/Session/Native.php(57): session_regenerate_id()
#2 /var/www/system/classes/Kohana/Session.php(343): Kohana_Session_Native->_regenerate()
#3 /var/www/modules/auth/classes/Kohana/Auth.php(115): Kohana_Session->regenerate()
#4 /var/www/modules/orm/classes/Kohana/Auth/ORM.php(242): Kohana_Auth->logout(false)
#5 /var/www/application/classes/Controller/Login.php(105): Kohana_Auth_ORM->logout()
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-02-10 11:21:59 --- EMERGENCY: ErrorException [ 2 ]: session_regenerate_id(): Cannot regenerate session id - headers already sent ~ SYSPATH/classes/Kohana/Session/Native.php [ 57 ] in file:line
2014-02-10 11:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'session_regener...', '/var/www/system...', 57, Array)
#1 /var/www/system/classes/Kohana/Session/Native.php(57): session_regenerate_id()
#2 /var/www/system/classes/Kohana/Session.php(343): Kohana_Session_Native->_regenerate()
#3 /var/www/modules/auth/classes/Kohana/Auth.php(115): Kohana_Session->regenerate()
#4 /var/www/modules/orm/classes/Kohana/Auth/ORM.php(242): Kohana_Auth->logout(false)
#5 /var/www/application/classes/Controller/Login.php(105): Kohana_Auth_ORM->logout()
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-02-10 11:21:59 --- EMERGENCY: ErrorException [ 2 ]: session_regenerate_id(): Cannot regenerate session id - headers already sent ~ SYSPATH/classes/Kohana/Session/Native.php [ 57 ] in file:line
2014-02-10 11:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'session_regener...', '/var/www/system...', 57, Array)
#1 /var/www/system/classes/Kohana/Session/Native.php(57): session_regenerate_id()
#2 /var/www/system/classes/Kohana/Session.php(343): Kohana_Session_Native->_regenerate()
#3 /var/www/modules/auth/classes/Kohana/Auth.php(115): Kohana_Session->regenerate()
#4 /var/www/modules/orm/classes/Kohana/Auth/ORM.php(242): Kohana_Auth->logout(false)
#5 /var/www/application/classes/Controller/Login.php(105): Kohana_Auth_ORM->logout()
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-02-10 11:21:59 --- EMERGENCY: ErrorException [ 2 ]: session_regenerate_id(): Cannot regenerate session id - headers already sent ~ SYSPATH/classes/Kohana/Session/Native.php [ 57 ] in file:line
2014-02-10 11:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'session_regener...', '/var/www/system...', 57, Array)
#1 /var/www/system/classes/Kohana/Session/Native.php(57): session_regenerate_id()
#2 /var/www/system/classes/Kohana/Session.php(343): Kohana_Session_Native->_regenerate()
#3 /var/www/modules/auth/classes/Kohana/Auth.php(115): Kohana_Session->regenerate()
#4 /var/www/modules/orm/classes/Kohana/Auth/ORM.php(242): Kohana_Auth->logout(false)
#5 /var/www/application/classes/Controller/Login.php(105): Kohana_Auth_ORM->logout()
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_Login->action_logout()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-02-10 11:30:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function __() ~ SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ] in file:line
2014-02-10 11:30:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 11:31:09 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/system/classes/Kohana/Cookie.php:67
2014-02-10 11:31:09 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2014-02-10 11:31:10 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/system/classes/Kohana/Cookie.php:67
2014-02-10 11:31:10 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2014-02-10 11:31:10 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/system/classes/Kohana/Cookie.php:67
2014-02-10 11:31:10 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2014-02-10 11:31:11 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/system/classes/Kohana/Cookie.php:67
2014-02-10 11:31:11 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2014-02-10 11:39:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/views/template/foot.php [ 11 ] in /var/www/application/views/template/foot.php:11
2014-02-10 11:39:37 --- DEBUG: #0 /var/www/application/views/template/foot.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 11, Array)
#1 /var/www/application/views/template/site.php(6): require_once('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#6 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/application/views/template/foot.php:11
2014-02-10 11:40:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/views/template/foot.php [ 11 ] in /var/www/application/views/template/foot.php:11
2014-02-10 11:40:35 --- DEBUG: #0 /var/www/application/views/template/foot.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 11, Array)
#1 /var/www/application/views/template/site.php(6): require_once('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#6 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/application/views/template/foot.php:11
2014-02-10 11:40:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/views/template/foot.php [ 11 ] in /var/www/application/views/template/foot.php:11
2014-02-10 11:40:36 --- DEBUG: #0 /var/www/application/views/template/foot.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 11, Array)
#1 /var/www/application/views/template/site.php(6): require_once('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#6 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/application/views/template/foot.php:11
2014-02-10 11:40:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cms_lang ~ APPPATH/views/template/foot.php [ 11 ] in /var/www/application/views/template/foot.php:11
2014-02-10 11:40:54 --- DEBUG: #0 /var/www/application/views/template/foot.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 11, Array)
#1 /var/www/application/views/template/site.php(6): require_once('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#6 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/application/views/template/foot.php:11
2014-02-10 12:08:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-02-10 12:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 12:52:02 --- EMERGENCY: ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /var/www/application/bootstrap.php:72) ~ APPPATH/classes/Controller/CMSTemplate.php [ 42 ] in file:line
2014-02-10 12:52:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Cannot modify h...', '/var/www/applic...', 42, Array)
#1 /var/www/application/classes/Controller/CMSTemplate.php(42): setcookie('cms_lang', 'pl-pl', 1394650322)
#2 [internal function]: Controller_CMSTemplate->__construct(Object(Request), Object(Response))
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in file:line
2014-02-10 12:52:21 --- EMERGENCY: ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /var/www/application/bootstrap.php:72) ~ APPPATH/classes/Controller/CMSTemplate.php [ 42 ] in file:line
2014-02-10 12:52:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Cannot modify h...', '/var/www/applic...', 42, Array)
#1 /var/www/application/classes/Controller/CMSTemplate.php(42): setcookie('cms_lang', 'pl-pl', 1394650341)
#2 [internal function]: Controller_CMSTemplate->__construct(Object(Request), Object(Response))
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in file:line
2014-02-10 12:56:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function __() ~ APPPATH/views/template/head.php [ 17 ] in file:line
2014-02-10 12:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 12:56:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function __() ~ APPPATH/views/template/head.php [ 17 ] in file:line
2014-02-10 12:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 12:56:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function __() ~ APPPATH/views/template/head.php [ 17 ] in file:line
2014-02-10 12:56:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 13:11:08 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Session::get() should not be called statically ~ APPPATH/views/template/head.php [ 9 ] in /var/www/application/views/template/head.php:9
2014-02-10 13:11:08 --- DEBUG: #0 /var/www/application/views/template/head.php(9): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/applic...', 9, Array)
#1 /var/www/application/views/template/head.php(9): Kohana_Session::get()
#2 /var/www/application/views/template/site.php(4): require_once('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#5 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /var/www/application/classes/Controller/CMSTemplate.php(26): Kohana_Controller_Template->after()
#7 /var/www/system/classes/Kohana/Controller.php(87): Controller_CMSTemplate->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/application/views/template/head.php:9
2014-02-10 13:13:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/views/template/head.php [ 9 ] in file:line
2014-02-10 13:13:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-10 13:18:20 --- EMERGENCY: ErrorException [ 2 ]: Cannot modify header information - headers already sent by (output started at /var/www/application/bootstrap.php:75) ~ APPPATH/classes/Controller/CMSTemplate.php [ 42 ] in file:line
2014-02-10 13:18:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Cannot modify h...', '/var/www/applic...', 42, Array)
#1 /var/www/application/classes/Controller/CMSTemplate.php(42): setcookie('cms_lang', 'pl-pl', 1394651900)
#2 [internal function]: Controller_CMSTemplate->__construct(Object(Request), Object(Response))
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in file:line
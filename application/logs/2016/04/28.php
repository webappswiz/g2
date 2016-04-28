<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-28 09:47:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$img_name ~ APPPATH/views/main/index.php [ 299 ] in /var/www/vhosts/g2.priv/public_html/application/views/main/index.php:299
2016-04-28 09:47:08 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/main/index.php(299): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/vhosts...', 299, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/main/index.php:299
2016-04-28 09:47:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$img_name ~ APPPATH/views/main/index.php [ 300 ] in /var/www/vhosts/g2.priv/public_html/application/views/main/index.php:300
2016-04-28 09:47:28 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/main/index.php(300): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/vhosts...', 300, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/main/index.php:300
2016-04-28 09:47:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$img_name ~ APPPATH/views/main/index.php [ 300 ] in /var/www/vhosts/g2.priv/public_html/application/views/main/index.php:300
2016-04-28 09:47:30 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/main/index.php(300): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/vhosts...', 300, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/main/index.php:300
2016-04-28 10:04:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: customer_firstname ~ APPPATH/classes/Controller/Kapcsolat.php [ 27 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Kapcsolat.php:27
2016-04-28 10:04:01 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Kapcsolat.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 27, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Kapcsolat->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kapcsolat))
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Kapcsolat.php:27
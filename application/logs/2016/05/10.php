<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-10 10:16:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/classes/Controller/User/Account.php [ 40 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/User/Account.php:40
2016-05-10 10:16:40 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/User/Account.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 40, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_User_Account->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/User/Account.php:40
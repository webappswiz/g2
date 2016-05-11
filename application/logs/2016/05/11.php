<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-11 22:28:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: gender ~ APPPATH/classes/Controller/User/Account.php [ 110 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/User/Account.php:110
2016-05-11 22:28:51 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/User/Account.php(110): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 110, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_User_Account->action_addDog()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/User/Account.php:110
2016-05-11 22:31:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view user_account/adddog could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-11 22:31:23 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('user_account/ad...')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
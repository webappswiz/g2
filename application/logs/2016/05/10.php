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
2016-05-10 13:45:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Products class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-10 13:45:45 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /var/www/vhosts/g2.priv/public_html/application/views/admin/reviews/index.php(18): Kohana_ORM->__get('name')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reviews))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-10 17:13:42 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/catalog/index.php [ 152 ] in file:line
2016-05-10 17:13:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-06 14:09:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view cart/update could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-06 14:09:37 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('cart/update')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(286): Controller_Base_Core->set_view()
#2 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(492): Controller_Base_Core->render_partial()
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cart))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-06 14:09:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view cart/update could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-06 14:09:49 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('cart/update')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(286): Controller_Base_Core->set_view()
#2 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(492): Controller_Base_Core->render_partial()
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cart))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-06 14:10:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view cart/update could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-06 14:10:06 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('cart/update')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(286): Controller_Base_Core->set_view()
#2 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(492): Controller_Base_Core->render_partial()
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cart))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-06 14:37:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::loaded() ~ APPPATH/views/cart/index.php [ 23 ] in file:line
2016-05-06 14:37:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-06 15:00:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view cart/update could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-06 15:00:28 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('cart/update')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cart))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-06 16:19:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The onsale property does not exist in the Model_Products class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-06 16:19:21 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('onsale')
#1 /var/www/vhosts/g2.priv/public_html/application/views/catalog/category.php(129): Kohana_ORM->__get('onsale')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
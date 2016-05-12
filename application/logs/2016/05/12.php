<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-12 09:44:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: product_size ~ APPPATH/classes/Controller/Admin/Products.php [ 61 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Admin/Products.php:61
2016-05-12 09:44:12 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Admin/Products.php(61): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 61, Array)
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Admin/Products.php(32): Controller_Admin_Products->update()
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Products->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Admin/Products.php:61
2016-05-12 16:44:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: price ~ APPPATH/classes/Controller/Cart.php [ 126 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Cart.php:126
2016-05-12 16:44:53 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Cart.php(126): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 126, Array)
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Cart.php(24): Controller_Cart::shipping_calc(2050)
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Cart->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cart))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Cart.php:126
2016-05-12 16:46:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: shipping ~ APPPATH/views/cart/index.php [ 69 ] in /var/www/vhosts/g2.priv/public_html/application/views/cart/index.php:69
2016-05-12 16:46:05 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/cart/index.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 69, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cart))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/cart/index.php:69
2016-05-12 16:46:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: shipping ~ APPPATH/views/cart/index.php [ 69 ] in /var/www/vhosts/g2.priv/public_html/application/views/cart/index.php:69
2016-05-12 16:46:06 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/cart/index.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 69, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cart))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/cart/index.php:69
2016-05-12 16:47:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: price ~ APPPATH/classes/Controller/Cart.php [ 126 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Cart.php:126
2016-05-12 16:47:01 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Cart.php(126): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 126, Array)
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Cart.php(24): Controller_Cart::shipping_calc(2050)
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Cart->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cart))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Cart.php:126
2016-05-12 16:49:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: price ~ APPPATH/classes/Controller/Order.php [ 1255 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Order.php:1255
2016-05-12 16:49:38 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Order.php(1255): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 1255, Array)
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Order.php(838): Controller_Order::shipping_calc(2050)
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Order.php:1255
2016-05-12 17:20:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pkg ~ APPPATH/views/admin/orders/edit.php [ 83 ] in /var/www/vhosts/g2.priv/public_html/application/views/admin/orders/edit.php:83
2016-05-12 17:20:28 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/admin/orders/edit.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 83, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/admin/orders/edit.php:83
2016-05-12 17:33:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: order ~ APPPATH/views/admin/orders/edit.php [ 199 ] in /var/www/vhosts/g2.priv/public_html/application/views/admin/orders/edit.php:199
2016-05-12 17:33:19 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/admin/orders/edit.php(199): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 199, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/admin/orders/edit.php:199
2016-05-12 17:33:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The product_qty property does not exist in the Model_Products class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-12 17:33:34 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('product_qty')
#1 /var/www/vhosts/g2.priv/public_html/application/views/admin/orders/edit.php(206): Kohana_ORM->__get('product_qty')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
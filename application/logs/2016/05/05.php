<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-05 11:20:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant product_add_images - assumed 'product_add_images' ~ APPPATH/views/admin/products/form.php [ 165 ] in /var/www/vhosts/g2.priv/public_html/application/views/admin/products/form.php:165
2016-05-05 11:20:58 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/admin/products/form.php(165): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/vhosts...', 165, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Products))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/admin/products/form.php:165
2016-05-05 11:30:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/catalog/product.php [ 69 ] in file:line
2016-05-05 11:30:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-05 14:46:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: review ~ APPPATH/views/catalog/product.php [ 189 ] in /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php:189
2016-05-05 14:46:22 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php(189): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 189, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php:189
2016-05-05 14:49:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH/views/catalog/product.php [ 196 ] in file:line
2016-05-05 14:49:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-05 14:57:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: 3 ~ APPPATH/views/catalog/product.php [ 72 ] in /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php:72
2016-05-05 14:57:51 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 72, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php:72
2016-05-05 14:58:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: total_rating ~ APPPATH/views/catalog/product.php [ 72 ] in /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php:72
2016-05-05 14:58:14 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 72, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php:72
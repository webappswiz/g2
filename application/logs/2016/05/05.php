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
2016-05-05 15:33:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/reviews/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-05 15:33:34 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/reviews/i...')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reviews))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php:545
2016-05-05 15:44:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The approve property does not exist in the Model_ProductReviews class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:702
2016-05-05 15:44:35 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('approve', 1)
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Admin/Reviews.php(18): Kohana_ORM->__set('approve', 1)
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Reviews->action_approve()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reviews))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:702
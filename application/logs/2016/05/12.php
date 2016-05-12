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
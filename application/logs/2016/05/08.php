<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-08 00:39:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The sub_text_emg property does not exist in the Model_Options class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-08 00:39:03 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('sub_text_emg')
#1 /var/www/vhosts/g2.priv/public_html/application/views/admin/counter/index.php(50): Kohana_ORM->__get('sub_text_emg')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Counter))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-08 02:45:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/views/template/menu.php [ 36 ] in /var/www/vhosts/g2.priv/public_html/application/views/template/menu.php:36
2016-05-08 02:45:25 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/template/menu.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/vhosts...', 36, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/views/template/header.php(141): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#6 /var/www/vhosts/g2.priv/public_html/application/views/template/core.php(5): Kohana_View->render()
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#9 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_Controller_Template->after()
#11 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/vhosts/g2.priv/public_html/application/views/template/menu.php:36
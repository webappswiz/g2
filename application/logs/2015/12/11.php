<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-11 17:05:52 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2015-12-11 17:05:52 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/vhosts/goodiebox.priv/public_html/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('options')
#3 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#7 /var/www/vhosts/goodiebox.priv/public_html/application/views/main/index.php(2): Kohana_ORM::factory('Options', 1)
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#10 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#11 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2015-12-11 20:31:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Admin/Orders.php [ 111 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php:111
2015-12-11 20:31:22 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php(111): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/vhosts...', 111, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Orders->action_page()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php:111
2015-12-11 20:31:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Admin/Orders.php [ 111 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php:111
2015-12-11 20:31:33 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php(111): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/vhosts...', 111, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Orders->action_page()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php:111
2015-12-11 20:44:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Admin/Orders.php [ 111 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php:111
2015-12-11 20:44:20 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php(111): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/vhosts...', 111, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Orders->action_page()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php:111
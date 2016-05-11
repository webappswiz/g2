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
2016-05-11 23:22:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/catalog/product.php [ 4 ] in /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php:4
2016-05-11 23:22:14 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 4, Array)
#1 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Base/Core.php(511): Kohana_View->render()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/g2.priv/public_html/application/views/catalog/product.php:4
2016-05-11 23:23:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The cat_id property does not exist in the Model_Products class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-11 23:23:20 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('cat_id')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Catalog.php(42): Kohana_ORM->__get('cat_id')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_product()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-11 23:23:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The cat_id property does not exist in the Model_Products class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-11 23:23:21 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('cat_id')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Catalog.php(42): Kohana_ORM->__get('cat_id')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_product()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-11 23:23:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The cat_id property does not exist in the Model_Products class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2016-05-11 23:23:49 --- DEBUG: #0 /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('cat_id')
#1 /var/www/vhosts/g2.priv/public_html/application/classes/Controller/Catalog.php(42): Kohana_ORM->__get('cat_id')
#2 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_product()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/g2.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/g2.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/g2.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
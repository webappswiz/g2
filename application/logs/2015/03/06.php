<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-06 05:31:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Order.php [ 341 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:341
2015-03-06 05:31:23 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(341): Kohana_Core::error_handler(8, 'Trying to get p...', '/home2/goodieb1...', 341, Array)
#1 /home2/goodieb1/public_html/application/classes/Controller/Order.php(672): Controller_Order->regular_order()
#2 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:341
2015-03-06 08:14:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 08:14:14 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 08:14:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 08:14:24 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 08:14:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 08:14:34 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 08:14:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 08:14:45 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 20:19:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 20:19:47 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 20:19:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 20:19:58 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 20:20:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 20:20:09 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 20:20:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-03-06 20:20:20 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
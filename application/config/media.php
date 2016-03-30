<?php

defined( 'SYSPATH' ) or die( 'No direct script access.' );

return array(
	'core'    => array(
		'static_uri' => 'uri',
		'uri'        => 'assets/',
		'path'       => DOCROOT . 'assets' . DIRECTORY_SEPARATOR,
	),
	'default' => array(
		'js'  => array(
			'jquery-1.10.2.min',
			'jquery.faq',
			'jquery.quicksilver',
			'ui_lib',
			'jquery.validate.min',
			'jquery.collapse',
			'jquery-ui.min',
			'mask',
			'jquery.easytabs',
			'lightbox.min',
			'main',
			'jquery.bxslider.min',
			'bootstrap-datepicker'
		),
		'css' => array(
			'style'                                                                      => null,
			'jquery-ui.min'                                                              => null,
			'jquery-ui.structure.min'                                                    => null,
			'jquery-ui.theme.min'                                                        => null,
			'lightbox'                                                                   => null,
			'jquery.bxslider'                                                            => null,
			'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' => null
		),
	),
);

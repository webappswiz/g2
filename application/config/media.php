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
			//'jquery-1.10.2.min',
			'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js',
			'jquery.faq',
			'jquery.quicksilver',
			'ui_lib',
			'jquery.validate.min',
			'jquery.collapse',
			'jquery-ui',
			'mask',
			'jquery.easytabs',
			'lightbox.min',
			'main',
			'jquery.bxslider.min',
			'bootstrap-datepicker',
			'scripts',
			'jquery.lanacarusel',
		),
		'css' => array(
			'jquery-ui.min'                                                              => null,
			'lightbox'                                                                   => null,
			'jquery.bxslider'                                                            => null,
			'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' => null,
			'style'                                                                      => null,
		),
	),
);

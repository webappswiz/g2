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
			'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js',
			'ui_lib',
			'jquery.validate.min',
			//'jquery.collapse',
			'jquery-ui',
			'mask',
			'jquery.hashchange.min',
			'jquery.easytabs',
			'lightbox.min',
			'main',
			'bootstrap-datepicker',
			'scripts',
			'jquery.lanacarusel',
			'jquery.lanagallery'
		),
		'css' => array(
			'jquery-ui.min'                                                              => null,
			'lightbox'                                                                   => null,
			'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' => null,
			'jquery.lanagallery'=> null,
			'style'                                                                      => null,
		),
	),
);

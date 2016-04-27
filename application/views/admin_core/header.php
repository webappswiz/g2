<?php
$options    = ORM::factory( 'Options', 1 );
$text       = $options->text;
$end_date   = $options->end_date;
$status     = $options->status;
$date_array = explode( ' ', $end_date );
$date       = explode( '/', $date_array[0] );
$time       = explode( ':', $date_array[1] );
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<title>GoodieBox Admin Dashboard</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="/assets/css/admin_css.css">
	<link rel="stylesheet" href="/assets/css/datetimepicker.css">
	<link rel="stylesheet" href="/assets/css/jquery.fileupload.css">
	<link rel="stylesheet" href="/assets/css/jquery.fileupload-ui.css">
	<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
	<script>
		var url_base = '<?php echo URL::base(true, true) ?>';
	</script>
	<?php
	foreach ( Media::scripts() as $file ) {
		echo HTML::script( $file ), PHP_EOL;
	}
	echo Media::inline_script();
	?>
	<script src="/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="/assets/js/vendor/jquery.ui.widget.js"></script>
	<script src="/assets/js/vendor/jquery.iframe-transport.js"></script>
	<script src="/assets/js/vendor/jquery.fileupload.js"></script>
	<script src="/assets/js/vendor/jquery.fileupload-process.js"></script>
	<script src="/assets/js/vendor/jquery.fileupload-image.js"></script>
	<script src="/assets/js/vendor/jquery.fileupload-audio.js"></script>
	<script src="/assets/js/vendor/jquery.fileupload-video.js"></script>
	<script src="/assets/js/vendor/jquery.fileupload-validate.js"></script>
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<span class="brand">Admin</span>

				<div class="nav-collapse collapse">

					<ul class="nav">
						<?php echo View::factory( 'admin_core/menu', get_defined_vars() )->render(); ?>
					</ul>

					<ul class="nav pull-right settings">
						<li><a href="#" class="tip icon logout" data-original-title="Profile Settings"
						       data-placement="bottom"><i class="icon-large icon-cog"></i></a></li>
						<li class="divider-vertical"></li>
						<li><a href="/user_session/logout" class="tip icon logout" data-original-title="Logout"
						       data-placement="bottom"><i
									class="icon-large icon-off"></i></a></li>
					</ul>

					<ul class="nav pull-right settings">
						<li class="divider-vertical"></li>
					</ul>

					<p class="navbar-text pull-right">
						Welcome <strong>Admin</strong>
					</p>

					<ul class="nav pull-right settings">
						<li class="divider-vertical"></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>
</div>
<div style="clear: both"></div>
<div class="container" id="content">


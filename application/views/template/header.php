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
<html>
<head>
	<title><?= URL::title( $title ); ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="p:domain_verify" content="b74aa75479f58d13024eabfe1419c0aa"/>
	<meta property="og:image" content="<?= URL::base( true, false ) ?>assets/img/goodiebox-offers-normal.png"/>
	<?php
	foreach ( Media::styles() as $file => $type ) {
		echo HTML::style( $file, array( 'media' => $type ) ), PHP_EOL;
	}
	echo Media::inline_style();
	?>
	<script>
		var url_base = '<?php echo URL::base(true, true) ?>';
	</script>
	<?php
	foreach ( Media::scripts() as $file ) {
		echo HTML::script( $file ), PHP_EOL;
	}
	echo Media::inline_script();
	?>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6015691752322&amp;cd[value]=0.00&amp;cd[currency]=GBP&amp;noscript=1" /></noscript>
	<script src='http://connect.facebook.net/en_US/all.js'></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.greenbutton').on('mouseover', function () {
				$('.greenbutton').stop();
				$('.greenbutton').animate({left: '0px'}, 500);
			});
			$('.greenbutton').on('mouseout', function () {
				$('.greenbutton').stop();
				$('.greenbutton').animate({left: '-35px'}, 500);

			});
		});

		(function () {
			var _fbq = window._fbq || (window._fbq = []);
			if (!_fbq.loaded) {
				var fbds = document.createElement('script');
				fbds.async = true;
				fbds.src = '//connect.facebook.net/en_US/fbds.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(fbds, s);
				_fbq.loaded = true;
			}
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', '6014782475522', {'value': '0.00', 'currency': 'GBP'}]);

		window.fbAsyncInit = function () {
			FB.init({
				appId: '764361780253904', status: true, cookie: true, xfbml: true});
		};
		(function (d, debug) {
			var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			if (d.getElementById(id)) {
				return;
			}
			js = d.createElement('script');
			js.id = id;
			js.async = true;
			js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
			ref.parentNode.insertBefore(js, ref);
		}(document, /*debug*/ false));
		function postToFeed(title, desc, url, image) {
			var obj = {method: 'feed', link: 'http://blog.goodiebox.hu', picture: 'http://blog.goodiebox.hu/logo.jpg', name: 'Goodiebox', description: 'Meglepet&#233;s csomag kutyusodnak minden h&oacute;napban'};
			function callback(response) {
			}
			FB.ui(obj, callback);
		}

		!function (f, b, e, v, n, t, s) {
			if (f.fbq)
				return;
			n = f.fbq = function () {
				n.callMethod ?
						n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq)
				f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window,
				document, 'script', '//connect.facebook.net/en_US/fbevents.js');
		fbq('init', '676982215724170');
		fbq('track', "PageView");
		$('.popup').click(function (event) {
			var width = 575,
					height = 400,
					left = ($(window).width() - width) / 2,
					top = ($(window).height() - height) / 2,
					url = this.href,
					opts = 'status=1' +
							',width=' + width +
							',height=' + height +
							',top=' + top +
							',left=' + left;

			window.open(url, 'twitter', opts);

			return false;
		});



	</script>
	<!-- End Facebook Pixel Code -->
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6014782475522&amp;cd[value]=0.00&amp;cd[currency]=GBP&amp;noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body>
<!-- HEADER-->
<header class="header-mainbox box-shadow">
	<div class="row flx-center">
		<div class="content-box flx flx-justify">
			<div class="logo-holder"><a href="<?= URL::base( true, false ) ?>"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/logo-valentine.png' ); ?>"
						alt="Goodiebox - Special surprise boxes for dogs" width="285" height="58"></a></div>
			<div class="nav-holder"><span class="nav-toggle"><i class="fa fa-bars"></i></span>
				<nav class="top-nav">
					<ul class="flx flx-justify">
						<?php echo View::factory( 'template/menu', get_defined_vars() )->render(); ?>
					</ul>
				</nav>
			</div>
			<div class="right-box flx">
				<div class="social-holder col-8 text-center">
					<a href='#'>&nbsp;</a>
					<?php

					/*
					if ( Cookie::get( 'lang', 'hu' ) == 'hu' ) {
						?>
						<a
							href="<?php echo URL::base( true, false ) . 'main/chg_lang/en' ?>"><span>english</span></a>
						<?php
					} else {
						?>
						<a
							href="<?php echo URL::base( true, false ) . 'main/chg_lang/hu' ?>"><span>magyar</span></a>
						<?php
					}*/
					?>

					<div class="row">
						<a href="<?= URL::base( true, false ) ?>" class="btnShare" data-title="goodiebox"
						   data-desc="Meglepet&#233;s csomag kutyusodnak minden h&oacute;napban"><i class="fa fa-facebook"></i></a>
						<a class="popup" href="http://twitter.com/share"><i class="fa fa-twitter"></i></a>
						<a href="https://instagram.com/goodieboxhu" data-title="Goodie" data-desc="Goodie"
						   target="blank"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<?php
				if($status!=1):
				$session = Session::instance();
				?>
				<a href="<?php echo URL::base( true, false ) . 'cart' ?>">
					<div class="cart-holder col-4">
						<?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0):?>
						<span class="cart-count">
							<?php echo count($_SESSION['cart']);?>
						</span>
						<?php endif;?>
					</div>
				</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>
<!-- end .header-mainbox-->
<!-- END HEADER-->
<div class="wrapper">
	<div class="main-content">
		<!-- Call to Action #1 ============================-->
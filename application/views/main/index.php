<?php
$options = ORM::factory( 'Options', 1 );
if ( Cookie::get( 'lang', 'hu' ) == 'hu' ) {
	$text = $options->text;
} else {
	$text = $options->text_eng;
}


$end_date   = $options->end_date;
$status     = $options->status;
$date_array = explode( ' ', $end_date );
$date       = explode( '/', $date_array[0] );
$time       = explode( ':', $date_array[1] );
?>
<script>
	countIt('<?= $date[0] ?>', '<?= $date[1] ?>', '<?= $date[2] ?>', '<?= $time[0] ?>', '<?= $time[1] ?>', '00', '<?= $status ?>');
	function countIt(year, month, day, hours, minutes, seconds, status) {
		now = new Date();
		start_date = new Date(2014, 9, 28, 18, 00, 00);
		now = now.getTime() / 1000;
		start = start_date.getTime() / 1000;
		setTimeout(function () {
			endDate = new Date(year, month, day, hours, minutes, seconds, 00);
			thisDate = new Date();
			var daysLeft = parseInt((endDate - thisDate) / 86400000);
			var hoursLeft = parseInt((endDate - thisDate) / 3600000);
			var minutsLeft = parseInt((endDate - thisDate) / 60000);
			var secondsLeft = parseInt((endDate - thisDate) / 1000);

			seconds = minutsLeft * 60;
			seconds = secondsLeft - seconds;
			seconds = (seconds < 10) ? 0 + seconds : seconds;

			minutes = hoursLeft * 60;
			minutes = minutsLeft - minutes;

			hours = daysLeft * 24;
			hours = (hoursLeft - hours) < 0 ? 0 : hoursLeft - hours;
			days = daysLeft;
			startCount(days, hours, minutes, seconds, status);
		}, 100);
	}

	function startCount(days, hours, minutes, seconds, status) {
		$('#days').html(days);
		seconds = (seconds) < 10 ? '0' + seconds : seconds;
		minutes = (minutes) < 10 ? '0' + minutes : minutes;
		hours = (hours) < 10 ? '0' + hours : hours;
		if (status == 0) {
			$('li', '.lock').css('background', 'url("/assets/img/lock-close.png") no-repeat left center');
			$('li', '.lock').html("<?php echo '&nbsp;&nbsp;' . __('Április 4-én nyitunk!'); ?>");
		} else {
			$('li', '.lock').css('background', 'url("/assets/img/lock-open.png") no-repeat left center');
			$('li', '.lock').html("<?php echo '&nbsp;&nbsp;' . __('Nyitva vagyunk!'); ?>");
		}
		$('#hours').html(hours);
		$('#minutes').html(minutes);
		$('#seconds').html(seconds);
		countIt('<?= $date[0] ?>', '<?= $date[1] - 1 ?>', '<?= $date[2] ?>', '<?= $time[0] ?>', '<?= $time[1] ?>', '00', '<?= $status ?>');
	}
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#show_t1').on('click', function () {
			if ($('#tovab1').is(":visible")) {
				$('#tovab1').hide('slow');
			} else {
				$('#tovab1').show('slow');
			}
		});
		$('#show_t2').on('click', function () {
			if ($('#tovab2').is(":visible")) {
				$('#tovab2').hide('slow');
			} else {
				$('#tovab2').show('slow');
			}
		});
		$('#tab-container').easytabs();

		function unloadPopupBox() {    // TO Unload the Popupbox
			$('#dialog-form1').fadeOut("slow");
			$("#container").css({// this is just for style
				"opacity": "1"
			});
		}

		function loadPopupBox() {    // To Load the Popupbox
			$('#dialog-form1').slideDown("slow");

			$("#container").css({// this is just for style
				"opacity": "0.3"
			});
		}

		$('#popupBoxClose1').on('click', function () {
			unloadPopupBox();
			$('p.text_message').html('');
		});

		$('#subscribe').on('click', function () {
			loadPopupBox();
		});

		$('.disabled').on('click', function () {
			$('p.text_message').html("<?php echo __('Jelenleg nincs rendelési időszakunk! Iratkozz fel a nyitási értesítőre és mi figyelmeztetünk, ha eljött az idő! :)')?>");
			loadPopupBox();
		});

	});
</script>

<div id="dialog-form1" title="<?php echo __( 'Kérem az értesítést!' ); ?>" style="display:none;min-height:180px;">
	<script>
		$(".process-form").validate();
	</script>
	<div class="claim-form2">
		<a id="popupBoxClose1"><img src="<?= URL::base( true, false ) ?>assets/img/delete.png"></a>

		<p class="text_message"></p>

		<form class="process-form" name="order" method="POST" action="/subscribe">
			<div>
				<label style="margin-top:10px;"><?php echo __( 'Keresztneved:' ); ?></label>
				<input type="text" name="name" size="20" required/>
			</div>
			<div style="padding-bottom:10px;">
				<label><?php echo __( 'Email címed:' ); ?></label>
				<input type="email" name="email" size="20"/>
			</div>
			<div style="text-align: center;margin-bottom:10px;">
				<input type="submit" value="<?php echo __( 'Kérem az értesítést!' ); ?>"
				       class="dark-btn dog-prof-btn rounded">
			</div>
		</form>

	</div>
</div>
<section>
	<div class="row flx-center">
		<div class="content-box call-to-action-1">
			<div class="row">
				<div class="col-6">
					<h1>Special surprise boxes for dogs</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
						voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<a href="/order" class="btn large solid pink">order now</a>
				</div>
				<!-- end .col-6-->
				<div class="col-6"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/home-img-1.jpg' ); ?>"
						class="responsive"></div>
				<!-- end .col-6-->
			</div>
			<!-- end .row-->
		</div>
		<!-- end .content-box.call-to-action-1-->
	</div>
	<!-- end .row.flx-center-->
</section>
<!-- Timer ========================================-->
<section>
	<div class="row flx-center bgc-pink">
		<div class="content-box timer">
			<div class="row flx-center flx-justify">
				<div class="image-holder"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/home-img-2.png' ); ?>"></div>
				<!-- end .image-holder-->
				<div class="container text-white">
					<h2><?php echo $text ?></h2>

					<h3>Get our Xmas box for your pup!</h3><a id="subscribe" href="#" class="btn border white bold">subscribe
						now</a>
				</div>
				<!-- end .container.text-white-->
				<div class="counter-holder"><span id="days" class="counter">12</span><span id="hours"
				                                                                           class="counter">09</span><span
						id="minutes" class="counter">15</span><span id="seconds" class="counter">30</span></div>
				<!-- end .counter-holder-->
			</div>
			<!-- end .row.flx-center.flx-justify-->
		</div>
		<!-- end .content-box.timer-->
	</div>
	<!-- .row.flx-center.bgc-pink-->
</section>

<!-- How It Works =================================-->
<section>
	<div class="row flx-center box-shadow">
		<div class="content-box hiw">
			<h1 class="text-center">How it works?</h1>

			<div class="row flx-justify">
				<div class="container col-3"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/hiw-1.png' ); ?>">

					<div class="row"><span class="round">1</span>

						<div class="header">
							<h2>Choose</h2>

							<h3>your puppy size!</h3>
						</div>
						<!-- end .header-->
					</div>
					<!-- end .row-->
					<p>Every month, 3-6 different items are in the box (food, snacks, toys, accessories, grooming items,
						vitamins). This is a highly personalized service. Based on your pup's size, age and allergies,
						we carefully select premium products which will be delivered to your doorstep. Every month, 3-6
						different items are in the box (food, snacks, toys, accessories, grooming items, vitamins). This
						is a highly personalized service.</p>
				</div>
				<!-- end .container.col-3-->
				<div class="container col-3"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/hiw-2.png' ); ?>">

					<div class="row"><span class="round">2</span>

						<div class="header">
							<h2>Choose</h2>

							<h3>the box type!</h3>
						</div>
						<!-- end .header-->
					</div>
					<!-- end .row-->
					<p>Every month, 3-6 different items are in the box (food, snacks, toys, accessories, grooming items,
						vitamins). This is a highly personalized service. Based on your pup's size, age and allergies,
						we carefully select premium products which will be delivered to your doorstep. Every month, 3-6
						different items are in the box (food, snacks, toys, accessories, grooming items, vitamins). This
						is a highly personalized service.</p>
				</div>
				<!-- end .container.col-3-->
				<div class="container col-3"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/hiw-3.png' ); ?>">

					<div class="row"><span class="round">3</span>

						<div class="header">
							<h2>Get</h2>

							<h3>your package!</h3>
						</div>
						<!-- end .header-->
					</div>
					<!-- end .row-->
					<p>Every month, 3-6 different items are in the box (food, snacks, toys, accessories, grooming items,
						vitamins). This is a highly personalized service. Based on your pup's size, age and allergies,
						we carefully select premium products which will be delivered to your doorstep. Every month, 3-6
						different items are in the box (food, snacks, toys, accessories, grooming items, vitamins). This
						is a highly personalized service.</p>
				</div>
				<!-- end .container.col-3-->
			</div>
			<!-- end .row.flx-justify-->
		</div>
		<!-- end .content-box.hiw-->
	</div>
	<!-- end .row.flx-center-->
</section>

<!-- Call to Action #2 ============================-->
<section>
	<div class="row flx-center bgc-yellow_light box-shadow">
		<div class="content-box call-to-action-2">
			<h1 class="text-center text-orange">What can you find in a Goodiebox?</h1>

			<h3 class="text-center">Every month, 3-6 different items are in the box (food, snacks, toys, accessories,
				grooming items, vitamins). This is a highly personalized service. Based on your pup's size, age and
				allergies, we carefully select premium products which will be delivered to your doorstep.</h3><img
				src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/home-img-3.png' ); ?>" class="resposive"><a
				a href="/order" class="btn large solid orange">order now</a>
		</div>
		<!-- end .content-box.call-to-action-2-->
	</div>
	<!-- end .row.flx-center.bgc-yellow_light-->
</section>

<!-- Shop Carusel =================================-->
<section>
	<div class="row flx-center bgc-pink_light box-shadow">
		<div class="content-box shop-carusel">
			<h1 class="text-center text-pink">Shop</h1>

			<h3 class="text-center">Every month, 3-6 different items are in the box (food, snacks, toys, accessories,
				grooming items, vitamins)</h3>

			<div id="carusel-1" class="carusel-container">
				<div class="left-btn"></div>
				<div class="viewport">
					<div id="carusel-line">
						<?php
						$products = ORM::factory( 'Products' )->order_by( 'id', 'DESC' )->limit( 6 )->find_all();
						foreach ( $products as $product ):
							?>
							<div class="item product-preview"><img
									src="<?= URL::base( true, false ) ?>assets/img/product-img-1.jpg">
								<div class="row">
									<h2><?php echo $product->product_name; ?></h2><span
										class="ammount"><?php echo $product->price; ?></span>
									<a href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product->id ?>"
									   class="btn solid pink">BUY NOW</a>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>
				<!-- end .viewport-->
				<div class="right-btn"></div>
			</div>
			<!-- end #carusel-1.carusel-container-->
		</div>
		<!-- end .content-box.shop-carusel-->
	</div>
	<!-- end .row.flx-center.bgc-pink_light-->
</section>

<!-- Photo ========================================-->
<section>
	<div class="row flx-center bgc-yellow_light">
		<div class="content-box photo">
			<h1 class="text-center">Goodiebox photo</h1>

			<div class="row flx-justify"><img src="<?= URL::base( true, false ) ?>assets/img/photo-1.jpg"><img
					src="<?= URL::base( true, false ) ?>assets/img/photo-2.jpg"><img
					src="<?= URL::base( true, false ) ?>assets/img/photo-3.jpg"><img
					src="<?= URL::base( true, false ) ?>assets/img/photo-4.jpg"></div>
			<!-- end .row.flx-justify-->
		</div>
		<!-- end .content-box.photo-->
	</div>
	<!-- end .row.flx-center.bgc-yellow_light-->
</section>

<section>
	<div class="row flx-center">
		<div class="content-box feedback">
			<h1 class="text-center">Feedback</h1>

			<div class="row flx-justify">
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feed-1.jpg"></header>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium
							commodo, dui ipsum tristique dolor, in ullamcorper tellus velit quis nisl. In placerat
							volutpat elit quis dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
							rhoncus, leo at pretium commodo.</p>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-1.jpg" class="avatar">

						<div><span class="author">@Zsófia,</span><span class="name">Szigetmonostor</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feed-2.jpg"></header>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium
							commodo, dui ipsum tristique dolor, in ullamcorper tellus velit quis nisl. In placerat
							volutpat elit quis dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
							rhoncus, leo at pretium commodo.</p>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-2.jpg" class="avatar">

						<div><span class="author">@Zsófia,</span><span class="name">Szigetmonostor</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feed-3.jpg"></header>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium
							commodo, dui ipsum tristique dolor, in ullamcorper tellus velit quis nisl. In placerat
							volutpat elit quis dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
							rhoncus, leo at pretium commodo.</p>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-3.jpg" class="avatar">

						<div><span class="author">@Zsófia,</span><span class="name">Szigetmonostor</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feed-1.jpg"></header>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium
							commodo, dui ipsum tristique dolor, in ullamcorper tellus velit quis nisl. In placerat
							volutpat elit quis dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
							rhoncus, leo at pretium commodo.</p>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-1.jpg" class="avatar">

						<div><span class="author">@Zsófia,</span><span class="name">Szigetmonostor</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feed-2.jpg"></header>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium
							commodo, dui ipsum tristique dolor, in ullamcorper tellus velit quis nisl. In placerat
							volutpat elit quis dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
							rhoncus, leo at pretium commodo.</p>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-2.jpg" class="avatar">

						<div><span class="author">@Zsófia,</span><span class="name">Szigetmonostor</span></div>
					</footer>
				</div>
			</div>
			<!-- end .row.flx-justify-->
		</div>
		<!-- end .content-box.feedback-->
	</div>
	<!-- end .row.flx-center-->
</section>
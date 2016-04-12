<script type="text/javascript">
	$(document).ready(function () {

		$('#selected_box').val($('input:radio[name^="box"]:checked').val());
		$('input:radio[name^="box"]').on('click', function () {
			$('#selected_box').val($(this).val());
		});
		$('#next').on('click', function () {
			$('form').submit();
		});
		$('.tooltips').on('mouseover', function () {
			$('span', '.tooltips').show();
		});
		$('.tooltips').on('mouseout', function () {
			$('span', '.tooltips').hide();
		});
		if ($('#box-smart').is(':checked')) {
			$('.step2-text').html('<?php echo __('<p>A <span style="color:red"><b>Goodiebox Smart</b></span> dobozt választottad! Ha kutyusod játékos és szereti a hasát, akkor ez a doboz biztosan nagy örömöt okoz majd nektek!</p>'); ?>'
					+ '<?php echo __('<p>Tartalom: 3-5 termék (értékfüggő)! Biztosan találsz a dobozban jutalomfalatot és játékot, mert tudjuk, hogy ezek a legfontosabbak, ha szuper ajándékkal szeretnéd meglepni kis kedvencedet!</p>'); ?>'
					+ '<?php echo __('<p>Már csak egy lépésnyire vagy a megrendelés befejezésétől! Ha ennél a meglepidoboznál maradsz, akkor nincs más dolgod, csak kattints a Tovább gombra és add meg a személyes adataidat!</p>'); ?>');
		}
		if ($('#box-plus').is(':checked')) {
			$('.step2-text').html('<?php echo __('<p>A <span style="color:red"><b>Goodiebox Plus</b></span> dobozt választottad! Ha kutyusod játékos, szereti a hasát és az extra meglepiket is, akkor ez a doboz egészen biztosan nagy örömöt okoz majd nektek!</p>'); ?>'
					+ '<?php echo __('<p>Tartalom: 4-6 termék (értékfüggő)! Biztosan találsz a dobozban jutalomfalatot és játékot, mert tudjuk, hogy ezek a legfontosabbak, ha szuper ajándékkal szeretnéd meglepni kis kedvencedet! A Plus doboz a legjobb választás ha valamilyen extra kényeztetésre vágynátok! Mi több, a szülinapos kutyusok Plus meglepidoboz vásárlásakor ajándékot is kapnak tőlünk a doboz értékén felül!</p>'); ?>'
					+ '<?php echo __('<p>Már csak egy lépésnyire vagy a megrendelés befejezésétől! Ha ennél a meglepidoboznál maradsz, akkor nincs más dolgod, csak kattints a Tovább gombra és add meg a személyes adataidat!</p>'); ?>');
		}

		$('#box-smart').on('click', function () {
			$('.step2-text').html('<?php echo __('<p>A <span style="color:red"><b>Goodiebox Smart</b></span> dobozt választottad! Ha kutyusod játékos és szereti a hasát, akkor ez a doboz biztosan nagy örömöt okoz majd nektek!</p>'); ?>'
					+ '<?php echo __('<p>Tartalom: 3-5 termék (értékfüggő)! Biztosan találsz a dobozban jutalomfalatot és játékot, mert tudjuk, hogy ezek a legfontosabbak, ha szuper ajándékkal szeretnéd meglepni kis kedvencedet!</p>'); ?>'
					+ '<?php echo __('<p>Már csak egy lépésnyire vagy a megrendelés befejezésétől! Ha ennél a meglepidoboznál maradsz, akkor nincs más dolgod, csak kattints a Tovább gombra és add meg a személyes adataidat!</p>'); ?>');

		});

		$('#box-plus').on('click', function () {
			$('.step2-text').html('<?php echo __('<p>A <span style="color:red"><b>Goodiebox Plus</b></span> dobozt választottad! Ha kutyusod játékos, szereti a hasát és az extra meglepiket is, akkor ez a doboz egészen biztosan nagy örömöt okoz majd nektek!</p>'); ?>'
					+ '<?php echo __('<p>Tartalom: 4-6 termék (értékfüggő)! Biztosan találsz a dobozban jutalomfalatot és játékot, mert tudjuk, hogy ezek a legfontosabbak, ha szuper ajándékkal szeretnéd meglepni kis kedvencedet! A Plus doboz a legjobb választás ha valamilyen extra kényeztetésre vágynátok! Mi több, a szülinapos kutyusok Plus meglepidoboz vásárlásakor ajándékot is kapnak tőlünk a doboz értékén felül!</p>'); ?>'
					+ '<?php echo __('<p>Már csak egy lépésnyire vagy a megrendelés befejezésétől! Ha ennél a meglepidoboznál maradsz, akkor nincs más dolgod, csak kattints a Tovább gombra és add meg a személyes adataidat!</p>'); ?>');
		});

		$('#submit_form').on('click', function () {
			div = $('.content').filter(':visible');
			$('form', div).submit();
		});
		$('.selected_size').val($('input:radio[id^="size"]:checked').val());
		$('input:radio[id^="size"]').on('click', function () {
			$('.selected_size').val($(this).val());
		});
		$('.email').on('blur', function () {
			$.post('/api/check', {'email': $(this).val()}).done(function (data) {
				var i = $.parseJSON(data);
				if (i.msg == 1) {
					$('.email').val('');
					$('.email').focus();
					$('.email').css('background-color', 'rosybrown');
					$('.email').after('<label id="email-error" class="error" for="email"><?php echo __('Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!');?></label>');
				}
			});
		});
		$('.email2').on('blur', function () {
			$.post('/api/check', {'email': $(this).val()}).done(function (data) {
				var i = $.parseJSON(data);
				if (i.msg == 1) {
					$('.email2').val('');
					$('.email2').focus();
					$('.email2').css('background-color', 'rosybrown');
					$('.email2').after('<label id="email-error" class="error" for="email"><?php echo __('Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!');?></label>');
				} else {
					$('#email').css('background-color', 'white');
				}
			});
		});
		$('.email3').on('blur', function () {
			$.post('/api/check', {'email': $(this).val()}).done(function (data) {
				var i = $.parseJSON(data);
				if (i.msg == 1) {
					$('.email3').val('');
					$('.email3').focus();
					$('.email3').css('background-color', 'rosybrown');
					$('.email3').after('<label id="email-error" class="error" for="email"><?php echo __('Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!');?></label>');
				} else {
					$('#email').css('background-color', 'white');
				}
			});
		});
		$('#alerg_yes').on('click', function () {
			console.log('test');
			$('#al_label').show();
			$('#alerg_descr').show();
			$('#alerg_descr').attr('required', 'required');
		});
		$('#alerg_no').on('click', function () {
			$('#al_label').hide();
			$('#alerg_descr').hide();
			$('#alerg_descr').removeAttr('required');
		});
		$.extend($.validator.messages, {
			required: "<?php echo __('ez az információ szükséges'); ?>",
			equalTo: "<?php echo __('Kérjük, adja ugyanazt az értéket újra'); ?>"
		});
		$.validator.addMethod("myCustomRule", function (value, element) {
			return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
		}, "Custom message for this rule");
	});
</script>

<!-- Page Title ======================================-->
<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1 class="text-center">My Cart</h1>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
</section>
<div class="row flx-center">
	<div class="content-box my-cart">
		<section>
			<div class="row flx-center step-counter">
				<div class="step-one active">
					<h2>Order details</h2>
				</div>
				<div class="step-two">
					<h2>Checkout</h2>
				</div>
			</div>
		</section>
		<section id="step-one">
			<form method="POST" class="single-order">
				<!-- Select size =====================================-->
				<h2 class="text-center"><?php echo __( 'Válaszd ki mekkora a kutyus!*' ); ?></h2>

				<div class="row flx-around select-size">
					<div class="item-box text-center">
						<input id="size_1" type="radio" name="group1" value="1">

						<div class="size-img-1"></div>
						<p class="text-bold"><?php echo __( 'Icipici' ); ?></p><span>MAX 9KG</span>
						<label for="size_1" class="radio_green s1"></label>
					</div>
					<div class="item-box text-center">
						<input id="size_2" type="radio" name="group1" value="2" checked>

						<div class="size-img-2"></div>
						<p class="text-bold"><?php echo __( 'Éppen jó' ); ?></p><span>MAX 10-24KG</span>
						<label for="size_2" class="radio_green s2"></label>
					</div>
					<div class="item-box text-center">
						<input id="size_3" type="radio" name="group1" value="3">

						<div class="size-img-3"></div>
						<p class="text-bold"><?php echo __( 'Igazi óriás' ); ?></p><span>MAX 25+KG</span>
						<label for="size_3" class="radio_green s3"></label>
					</div>
				</div>
				<!-- Registrtion Form ================================-->
				<h2 class="text-center"><?php echo __( 'Kinek veszed a Goodiebox-ot?' ); ?></h2>

				<div class="row flx-center registration_pre">
					<div class="container flx-column">
						<label><?php echo __( 'E-mail címed*' ); ?></label>
						<input class="email" type="text" name="email" required>
						<label><?php echo __( 'Kutyus neve*' ); ?></label>
						<input type="text" name="puppy_name" required>

						<div class="gender-select"><span class="toggle"><?php echo __( 'Kutyus neme*' ); ?></span>

							<div class="drop-box">
								<input id="gender_male" type="radio" data-gender="<?php echo __( 'Lány' ); ?>" name="gender" value="<?php echo __( 'Lány' ); ?>">
								<label for="gender_male"><?php echo __( 'Lány' ); ?></label>
								<input id="gender_female" type="radio" data-gender="<?php echo __( 'Fiú' ); ?>" name="gender" value="<?php echo __( 'Fiú' ); ?>">
								<label for="gender_female"><?php echo __( 'Fiú' ); ?></label>
							</div>
						</div>
						<?php
						for ($i = 1994; $i <= date('Y'); $i++)
							$years[$i] = $i;

						for ($i = 1; $i <= 12; $i++)
							$months[$i] = $i;
						?>
						<div class="date-holder">
							<?php
							echo Form::select('years', $years, '', array('required', 'class' => '')) . ' ';
							?>
							<?php
							echo Form::select('months', $months, '', array('required', 'class' => ''));
							?>
						</div>
					</div>
				</div>
				<div class="alergi-select">
					<p class="text-center"><?php echo __( 'Allergiás a kutyusod?*' ); ?></p>

					<p class="text-center">
						<input id="alerg_yes" type="radio" name="alerg" value="1">
						<label for="alerg_yes" class="radio_green a1"><?php echo __( 'Igen' ); ?></label>
						<input id="alerg_no" type="radio" name="alerg" value="0" checked>
						<label for="alerg_no" class="radio_green a2"><?php echo __( 'Nem' ); ?></label>
					</p>

					<p class="text-center">
						<label style="display:none" for="last-name"
						       id="al_label"><?php echo __( 'Ha igen, mire?' ); ?></label>
						<input style="display:none" type="text" name="alerg_descr" class="rounded" id="alerg_descr">
					</p>

				</div>
				<!-- Box select ======================================-->
				<h2 class="text-center"><?php echo __( 'Biztosan a kiválasztott doboznál maradsz?' ); ?></h2>

				<div class="row flx-around box-select">
					<?php
					$products = ORM::factory( 'Packages' )
					               ->where( 'type', '=', 1 )
					               ->and_where( 'enabled', '=', '1' )
					               ->find_all();
					$limits   = ORM::factory( 'Options', 1 );

					if ( $limits->smart == $limits->current_smart && $limits->plus == $limits->current_plus ) {
						echo __( '<h2>The ordering is closed now</h2>' );
					} else {

						foreach ( $products as $product ) {
							$img   = ( $product->enabled == 1 ) ? 1 : 2;
							$price = ( $product->price != 0 && $product->enabled == 1 ) ? $product->price : '';
							$econ  = ORM::factory( 'Packages' )
							            ->where( 'type', '=', 2 )
							            ->and_where( 'term', '=', $product->term )
							            ->and_where( 'enabled', '=', 1 )
							            ->find();
							if ( $product->term == 1 ) {
								$image  = '<img src="' . URL::base( true, false ) . 'assets/img/box-plus.jpg"
						                           class="responsive">';
								$image1 = '<img src="' . URL::base( true, false ) . 'assets/img/box-smart.jpg"
						                           class="responsive">';
							}
							$box1 = ( trim( Session::instance()->get( 'package' ) ) == 'plus' ) ? 'checked' : '';
							$box2 = ( trim( Session::instance()->get( 'package' ) ) == 'smart' ) ? 'checked' : '';
							if ( trim( Session::instance()->get( 'package' ) == '' ) ) {
								$box2 = 'checked';
							}
							if ( $limits->current_smart >= $limits->smart ) {
								$box2   = 'disabled';
								$box1   = 'checked';
								$image1 = '<img src="' . URL::base( true, false ) . 'assets/img/smart-2nd-order-page-overok.png">';
							}

							if ( $limits->current_plus >= $limits->plus ) {
								$box1  = 'disabled';
								$box2  = 'checked';
								$image = '<img src="' . URL::base( true, false ) . 'assets/img/plus-2nd-order-page-overok.png">';
							}

							if ( $econ->id <> '' ) {
								?>
								<div class="item-box">
									<?php echo $image1; ?>
									<input <?php echo $box2; ?> id="box-smart" type="radio" name="box"
									                            value="<?php echo $econ->id; ?>">
									<label for="box-smart"
									       class="radio_green b2"><?php echo $econ->package_name; ?></label>

									<p><?php echo $econ->description; ?></p>
									<span class="ammount"><?php echo  $econ->price; ?></span>
								</div>

								<?php
							}
							?>
							<div class="item-box">
								<?php echo $image; ?>
								<input <?php echo $box1; ?> id="box-plus" type="radio" name="box"
								                            value="<?php echo $product->id; ?>">
								<label for="box-plus"
								       class="radio_green b1"><?php echo $product->package_name; ?></label>

								<p><?php echo $product->description; ?></p>
								<span class="ammount"><?php echo $price; ?></span>
							</div>
							<?php
						}
						?>
					<?php } ?>
				</div>
				<div class="row flx-center resume">
					<div class="container text-center step2-text">

					</div>
				</div>
				<div class="action text-center">
					<input type="submit" name="tovabb" id="next" value="<?php echo __( 'TOVÁBB' ); ?>" class="btn bold solid green">
				</div>
				<input type="hidden" name="order1" value="1">
				<input type="hidden" name="selected_box" id="selected_box" value="">
				<input type="hidden" name="selected_size" class="selected_size">
			</form>
			<script>
				$(".single-order").validate({
					rules: {
						puppy_name: {
							required: true,
						},
						alerg_descr: {
							required: true,
						},
						dateofb:{
							required: true,
						},
						email: {
							myCustomRule: true
						}
					},
					messages: {
						puppy_name: "<?php echo __('ez az információ szükséges'); ?>",
						alerg_descr: "<?php echo __('ez az információ szükséges'); ?>",
						email: "<?php echo __('Helytelen e-mail cím!'); ?>"
					}
				});
			</script>
		</section>
	</div>
</div>

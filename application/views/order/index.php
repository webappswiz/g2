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


		<?php $session = Session::instance()->as_array();?>
		<?php

		if(isset($session['step1']['puppy_id'])){
			$puppy         = ORM::factory( 'Puppy', $session['step1']['puppy_id'] );
			$selected_size = $puppy->selected_size;
		}
		?>
		<?php if(isset($selected_size)): ?>
			$('.selected_size').val(<?php echo $selected_size; ?>);
		<?php else:?>
			$('.selected_size').val($('input:radio[id^="size"]:checked').val());
		<?php endif; ?>
		$('input:radio[id^="size"]').on('click', function () {
			$('.selected_size').val($(this).val());
		});
		$('div[class^="size"]').on('click', function () {
			var id= $(this).data('id');
			$('#'+id).trigger('click');
		});

		$('.item-box img').on('click',function(){
			var id = $(this).data('id');
			$('#box-'+id).trigger('click');
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
			<h1 class="text-center">Rendelés</h1>
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
					<h2>Rendelés adatok</h2>
				</div>
				<div class="step-two">
					<h2>Pénztár</h2>
				</div>
			</div>
		</section>
		<section id="step-one">
			<form method="POST" class="single-order">

				<?php if ( ! isset( $session['step1']['puppy_id'] ) ): ?>
					<!-- Select size =====================================-->
					<h2 class="text-center"><?php echo __( 'Válaszd ki mekkora a kutyus!*' ); ?></h2>

					<div id="dog_size" class="row flx-around select-size">
						<div class="item-box text-center">
							<input id="size_1" type="radio" name="group1" value="1">
							<div class="size-img-1" data-id="size_1"></div>
							<p class="text-bold"><?php echo __( 'Icipici' ); ?></p><span>MAX 9KG</span>
							<label for="size_1" class="radio_green s1"></label>
						</div>
						<div class="item-box text-center">
							<input id="size_2" type="radio" name="group1" value="2" checked>

							<div class="size-img-2" data-id="size_2"></div>
							<p class="text-bold"><?php echo __( 'Éppen jó' ); ?></p><span>MAX 10-24KG</span>
							<label for="size_2" class="radio_green s2"></label>
						</div>
						<div class="item-box text-center">
							<input id="size_3" type="radio" name="group1" value="3">

							<div class="size-img-3" data-id="size_3"></div>
							<p class="text-bold"><?php echo __( 'Igazi óriás' ); ?></p><span>MAX 25+KG</span>
							<label for="size_3" class="radio_green s3"></label>
						</div>
					</div>
					<!-- Registrtion Form ================================-->
					<h2 class="text-center"><?php echo __( 'Kinek veszed a Goodieboxot?' ); ?></h2>

					<div class="row flx-center registration_pre">
						<div class="container flx-column">
							<label><?php echo __( 'E-mail címed*' ); ?></label>
							<input class="email" type="text" name="email" required>
							<label><?php echo __( 'Kutyus neve*' ); ?></label>
							<input type="text" name="puppy_name" required>


							<div class="date-dropdown-holder">
								<div class="container">
									<input type="text" name="gender" placeholder="<?php echo __( 'Kutyus neme*' ); ?>" readonly required><span class="icon"></span>
									<ul class="option gender">
										<li><?php echo __( 'Lány' ); ?></li>
										<li><?php echo __( 'Fiú' ); ?></li>
									</ul>
								</div>
								<div class="container">
									<input type="text" name="years" placeholder="Year" readonly required><span class="icon"></span>
									<ul class="option year">
										<?php

										for ( $i = 1994; $i <= date( 'Y' ); $i ++ ) {
											echo '<li>'.$i.'</li>';
										}

										?>
									</ul>
								</div>
								<div class="container">
									<input type="text" name="months" placeholder="Month" readonly required><span class="icon"></span>
									<ul class="option month">
										<?php

										for ( $i = 1; $i <= 12; $i ++ ) {
											echo '<li>'.$i.'</li>';
										}

										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<!-- Box select ======================================-->
				<h2 class="text-center"><?php echo __( 'Melyik Goodiebox típust választod?' ); ?></h2>

				<div id="pkg" class="row flx-around box-select">
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
								$image  = '<img data-id="plus" src="' . URL::base( true, false ) . 'assets/img/orange_box.png"
						                           class="responsive">';
								$image1 = '<img data-id="smart" src="' . URL::base( true, false ) . 'assets/img/pink_box.png"
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
								$image1 = '<img src="' . URL::base( true, false ) . 'assets/img/gray_box.png">';
							}

							if ( $limits->current_plus >= $limits->plus ) {
								$box1  = 'disabled';
								$box2  = 'checked';
								$image = '<img src="' . URL::base( true, false ) . 'assets/img/gray_box.png">';
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
									<span class="ammount"><?php echo $econ->price; ?></span>
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
					<input type="submit" name="tovabb" id="next" value="<?php echo __( 'TOVÁBB' ); ?>"
					       class="btn bold solid green">
				</div>
				<input type="hidden" name="order1" value="1">
				<input type="hidden" name="selected_box" id="selected_box" value="">
				<input type="hidden" name="selected_size" class="selected_size"
				       value="">
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
						dateofb: {
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

<?php
$auth    = Auth::instance();
$session = Session::instance();
$disc    = 0;
if ( $auth->logged_in() ) {
	$current_user = $auth->get_user();
}
$shipping = ORM::factory( 'ShippingCost', 1 );
$cost     = $shipping->cost;
$session  = Session::instance()->as_array();
if ( !isset( $_SESSION['cart'] ) || count( $_SESSION['cart'] ) < 1 ):
$step1    = $session['step1'];
$package  = ORM::factory( 'Packages', $step1['selected_box'] );
if ( $package->term == 1 ) {
	$term = '1';
} elseif ( $package->term == 2 ) {
	$term = '3';
} else {
	$term = '6';
}
else:
$term = 1;
endif;
?>
<script type="text/javascript">
	$(document).ready(function () {
		var ship_cost = 0;

		$('#customer_email').on('blur', function () {
			$.post('/api/check', {'email': $(this).val()}).done(function (data) {
				var i = $.parseJSON(data);
				if (i.msg == 1) {
					$('#customer_email').val('');
					$('#customer_email').focus();
					$('#customer_email').css('background-color', 'rosybrown');
					$('#customer_email').after('<label id="email-error" class="error" for="email"><?php echo __('Úgy tűnik, már van regisztrált Goodiebox felhasználói fiókod! Jelentkezz be és onnan sokkal gyorsabb lesz!'); ?></label>');
				} else {
					$('#email').css('background-color', 'white');
				}
			});
		});

		if (!$('#confirm').prop(':checked')) {
			$('#submit').attr('disabled', 'disabled');
		}


		$('#discount_box').on('click', function () {
			if ($(this).is(':checked')) {
				$('#discount').val('1');
				$('#discount1').html(discount + ' HUF');
				var final_price = total_price - discount + ship_cost;
				$('#total_price').html(final_price + ' HUF');
			} else {
				$('#discount1').html('0000 HUF');
				var final_price = total_price + ship_cost;
				$('#total_price').html(final_price + ' HUF');
				$('#discount').val('0');
			}
		});
		<?php if($status==1):?>
		$('#cod').on('click', function () {
			ship_cost = <?php echo $cost * $term ?>;
			$('#ship').html(ship_cost + ' HUF');
			var price = $('#total_price').html().split(' ');
			var ship_price = parseInt(price[0]) + ship_cost;
			$('#total_price').html(ship_price + '');
			$('#pt').val('cod');
			$('#cod').attr('disabled', 'disabled');
		});
		$('#cc').on('click', function () {
			ship_cost = <?php echo  $cost * $term ?>;
			if ($('#ship').html() !== '<?php echo __('Ingyenes'); ?>') {
				$('#ship').html('<?php echo __('Ingyenes'); ?>');
				var price = $('#total_price').html().split(' ');
				var ship_price = parseInt(price[0]) - ship_cost;
				$('#total_price').html(ship_price + '');

				$('#cod').removeAttr('disabled');
			}
			$('#pt').val('cc');
		});
		<?php endif; ?>

		$('#confirm').on('click', function () {
			if ($(this).is(':checked')) {
				$('#submit').removeAttr('disabled');
			} else {
				$('#submit').attr('disabled', 'disabled');
			}
		});
		$('#shipping').on('click', function () {
			if ($('#shipping_form').is(':visible')) {
				$('#shipping_form').slideUp();
			} else {
				$('#shipping_form').show('slow');
			}
		});
		$('#company').on('click', function () {
			if ($('#company').is(':checked')) {
				$('#tax').slideDown(600);
				$('#company_name').attr('required', 'required');
				$('#company_street').attr('required', 'required');
				$('#company_house').attr('required', 'required');
				$('#company_zip').attr('required', 'required');
				$('#company_city').attr('required', 'required');
				$('#tax_code').attr('required', 'required');
			} else {
				$('#tax').slideUp(600);
				$('#company_name').removeAttr('required');
				$('#company_street').removeAttr('required');
				$('#company_house').removeAttr('required');
				$('#company_zip').removeAttr('required');
				$('#company_city').removeAttr('required');
				$('#tax_code').removeAttr('required');
			}
		});
		$('#submit').on('click', function () {
			if ($('#shipping').is(':checked')) {
				if ($('#shipping_form').valid()) {
					$.each($('#shipping_form input, #shipping_form select, #shipping_form textarea').serializeArray(), function (i, obj) {
						$('<input type="hidden">').prop(obj).appendTo($('#billing_form'));
					});
					$('#msg').val($('#message').val());
					$('#submit').attr('disabled', 'disabled');
					$('#billing_form').submit();
				}

			} else {
				$('#msg').val($('#message').val());
				$('#submit').attr('disabled', 'disabled');
				$('#billing_form').submit();
			}
		});

		$('#apply_coupon').on('click', function () {
			if ($('#coupon_id').val() != '') {
				$.post('/api/checkCode', {'code': $('#coupon_id').val()}).done(function (data) {
					var i = $.parseJSON(data);
					if (i.msg == 1) {
						$('#invite_code').val($('#coupon_id').val());
						discount = total_price * 10 / 100;
						$('#discount').val('1');
						$('#discount1').html(discount + ' HUF');
						var final_price = total_price - discount;
						$('#total_price').html(final_price + ' HUF');
						$('.box.rounded').hide();
					} else if (i.msg == 2) {
						$('#invite_code').val($('#coupon_id').val());
						discount = total_price * 5 / 100;
						$('#discount').val('1');
						$('#discount1').html(discount + ' HUF');
						var final_price = total_price - discount;
						$('#total_price').html(final_price + ' HUF');
						$('.box.rounded').hide();
					} else {
						alert('Wrong code');
					}
				});

			}
		});
		$("#customer_telephone").mask("+36 99 999-99-99");
		$("#delivery_telephone").mask("+36 99 999-99-99");
		$.extend($.validator.messages, {
			required: "<?php echo __('ez az információ szükséges'); ?>",
			equalTo: "<?php echo __('Kérjük, adja ugyanazt az értéket újra'); ?>"
		});
		$.validator.addMethod("myCustomRule", function (value, element) {
			return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
		}, "Custom message for this rule");
	});
</script>
<?php
$session = Session::instance()->as_array();
if ( isset( $session['step1'] ) ) {
	$size = $session['step1']['selected_size'];
}
if ( isset( $session['step2'] ) ) {
	$box = $session['step2']['selected_box'];
}
?>
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
				<div class="step-one">
					<h2>Order details</h2>
				</div>
				<div class="step-two active">
					<h2>Checkout</h2>
				</div>
			</div>
		</section>
		<section id="step-two" style="display: block">
			<div class="row flx-justify">
				<aside class="order-detail">
					<div class="cart-box">
					<?php
					if ( $status==1 ):
					$step1 = $session['step1'];
					if ($step1['selected_size'] == 1)
						$size = __('Icipici');
					if ($step1['selected_size'] == 2)
						$size = __('Éppen jó');
					if ($step1['selected_size'] == 3)
						$size = __('Igazi óriás');
					$package = ORM::factory('Packages', $step1['selected_box']);
					if ($package->term == 1) {
						$term = '1';
					} elseif ($package->term == 2) {
						$term = '3';
					} else {
						$term = '6';
					}
					?>

						<div class="cart-item">
							<div class="row"><img src="<?= URL::base( true, false ) ?>assets/img/cart-img.jpg"></div>
							<div class="row"><a href="#"><?= $package->package_name ?> <?= $term ?> <?php echo __('hónapra'); ?></a></div>
							<div class="row"><span><?php echo __('Választott kutyus méret:'); ?></span></div>
							<div class="row"><span class="text-bold"><?php echo $size ?></span></div>
							<div class="row"><span><?php echo __('Kedvezmény'); ?>:</span></div>
							<div class="row"><span class="text-bold" id="discount1">0000 HUF</div>
							<div class="row"><span><?php echo __('Összeg'); ?>:</span></div>
							<div class="row"><span class="text-bold"><?= $price->price ?> HUF</div>
						</div>
						<div class="shipping">
							<div class="row"><span><?php echo __('Házhozszállítás'); ?>:</span></div>
							<div class="row"><span class="text-bold" id="ship"><?php echo __('Ingyenes'); ?></span></div>
						</div>
						<div class="cart-total">
							<h2><?php echo __('Összesen'); ?>:<span id="total_price"><?= round($price->price) ?></span></h2>
						</div>
					<?php else: ?>
						<?php
						$total_cart_price = 0;
						foreach($cart as $id => $qty):
							$product_info = ORM::factory( 'Products', $id );
							if($product_info->on_sale==1){
								$subtotal     = $product_info->sale_price * $qty;
							} else {
								$subtotal     = $product_info->price * $qty;
							}
							$total_cart_price += $subtotal;
							?>
							<div class="cart-item">
								<div class="row"><img src="<?= URL::base( true, false ) ?>assets/img/cart-img.jpg"></div>
								<div class="row"><a href="#"><?php echo $product_info->product_name; ?> X <?= $qty ?></a></div>
								<div class="row"><span><?php echo __('Összeg'); ?>:</span></div>
								<div class="row"><span class="text-bold"><?= $subtotal ?> Ft</div>
							</div>
						<?php endforeach;?>
						<div class="shipping">
							<div class="row"><span><?php echo __('Házhozszállítás'); ?>:</span></div>
							<div class="row"><span class="text-bold" id="ship"><?php echo $shipping_calc; ?> Ft</span></div>
						</div>
						<div class="cart-total">
							<h2><?php echo __('Összesen'); ?>:<span id="total_price"><?= round($total_cart_price+$shipping_calc) ?></span></h2>
						</div>
					<?php endif; ?>
					</div>
				</aside>
				<main class="order-form">
					<div class="shipping-form">
						<h2><?php echo __( 'Számlázási adatok' ); ?></h2>

						<form name="billing_form" id="billing_form" method="POST">
							<div class="row flx-justify">
								<input type="text"
								       value="<?= ( $current_user ) ? $current_user->customer_lastname : ''; ?>"
								       name="customer_lastname" id="customer_lastname" placeholder="<?php echo __( 'Vezetéknév*' ); ?>"
								       required>
								<input type="text"
								       value="<?= ( $current_user ) ? $current_user->customer_firstname : ''; ?>"
								       name="customer_firstname" id="customer_firstname" placeholder="<?php echo __( 'Keresztnév*' ); ?>"
								       required>
							</div>
							<div class="row flx-justify">
								<input type="text"
								       value="<?= ( $current_user ) ? $current_user->customer_street : ''; ?>"
								       name="customer_street" id="customer_street" placeholder="<?php echo __( 'Utca*' ); ?>" required>
								<input type="text"
								       value="<?= ( $current_user ) ? $current_user->customer_house : ''; ?>"
								       name="customer_house" id="customer_house" placeholder="<?php echo __( 'Házszám/Emelet, ajtó*' ); ?>"
								       required>
							</div>
							<div class="row flx-justify">
								<input type="text" value="<?= ( $current_user ) ? $current_user->customer_city : ''; ?>"
								       name="customer_city" id="customer_city" placeholder="<?php echo __( 'Város*' ); ?>" required>
								<input type="text" name="customer_zip" id="customer_zip"
								       value="<?= ( $current_user ) ? $current_user->customer_zip : ''; ?>"
								       placeholder="<?php echo __( 'Irányítószám*' ); ?>" required>
							</div>

							<div class="row flx-justify">
								<?php if ( ! $auth->logged_in() ):
									if($status==1){
										$email = $session['step1']['email'];
									} else {
										$email = '';
									}

									?>
									<input type="text" name="customer_email" id="customer_email" value="<?= $email ?>"
									       placeholder="<?php echo __( 'E-mail cím*' ); ?>" required>
								<?php endif; ?>
								<input type="text" name="customer_telephone" id="customer_telephone"
								       value="<?= ( $current_user ) ? $current_user->customer_telephone : ''; ?>"
								       placeholder="<?php echo __( 'Telefonszám*' ); ?>" required>
							</div>
							<?php if ( ! $auth->logged_in() ): ?>
								<div class="row flx-justify">
									<input type="password" name="customer_password" id="customer_password"
									       placeholder="<?php echo __( 'Jelszó*' ); ?>" required>
									<input type="password" name="password_confirm" id="password_confirm"
									       placeholder="<?php echo __( 'Jelszó megerősítése*' ); ?>" required>
								</div>
							<?php endif; ?>
							<input type="hidden" name="pt" id="pt" value="cc">
							<input type="hidden" name="coupon_code" id="coupon_code" value="">
							<input type="hidden" name="invite_code" id="invite_code" value="">
							<input type="hidden" name="discount" id="discount" value="">
							<input type="hidden" name="payment_type" id="payment_type" value="cc">

							<div class="row check-box-holder">
								<input id="company" type="checkbox" name="company">
								<label for="company"
								       class="gray-box__green-check"><?php echo __( 'ÁFÁS számlát szeretnék' ); ?></label>
							</div>
							<div id="tax" style="display:none">
								<div class="row flx-justify">
									<input type="text"
									       value="<?= ( $current_user ) ? $current_user->customer_company : ''; ?>"
									       name="company_name" id="company_name" placeholder="<?php echo __( 'Cégnév' ); ?>" required>
									<input type="text"
									       value="<?= ( $current_user ) ? $current_user->customer_company_street : ''; ?>"
									       name="company_street" id="company_street" placeholder="<?php echo __( 'Utca*' ); ?>" required>
								</div>
								<div class="row flx-justify">
									<input type="text"
									       value="<?= ( $current_user ) ? $current_user->customer_company_house : ''; ?>"
									       name="company_house" id="company_house"
									       placeholder="<?php echo __( 'Házszám/Emelet, ajtó*' ); ?>" required>
									<input type="text"
									       value="<?= ( $current_user ) ? $current_user->customer_company_zip : ''; ?>"
									       name="company_zip" id="company_zip" placeholder="<?php echo __( 'Irányítószám*' ); ?>"
									       required>
								</div>
								<div class="row flx-justify">
									<input type="text"
									       value="<?= ( $current_user ) ? $current_user->customer_company_city : ''; ?>"
									       name="company_city" id="company_city" placeholder="<?php echo __( 'Város*' ); ?>" required>
									<input type="text"
									       value="<?= ( $current_user ) ? $current_user->customer_taxcode : ''; ?>"
									       name="tax_code" id="tax_code" placeholder="<?php echo __( 'Adószám' ); ?>" required>
								</div>
							</div>
							<input type="hidden" name="msg" value="" id="msg">
						</form>
						<script>
							$.extend($.validator.messages, {
								required: "<?php echo __('ez az információ szükséges'); ?>",
								equalTo: "<?php echo __('A jelszó nem egyezik'); ?>"
							});
							$("#billing_form").validate({
								rules: {
									customer_password: {
										required: true, minlength: 5
									},
									password_confirm: {
										required: true, equalTo: "#customer_password", minlength: 5
									},
									customer_email: {
										myCustomRule: true
									},
									customer_zip: {
										required: true,
										digits: true,
										maxlength: 4,
										minlength: 4
									}
								},
								messages: {
									customer_email: "<?php echo __('Helytelen e-mail cím!'); ?>",
								}
							});
						</script>
						<form name="shipping_form" id="shipping_form" method="POST">
							<div class="row check-box-holder">
								<input id="dif-shipping" type="checkbox" name="dif-shipping-adress">
								<label for="dif-shipping" class="gray-box__green-check"><?php echo __('A szállítási cím nem egyezik?'); ?></label>
							</div>
							<div class="dif-shipping-container">
								<h2>Shipping address</h2>

								<div class="row flx-justify">
									<input type="text" name="delivery_lastname" id="delivery_lastname" placeholder="<?php echo __('Vezetéknév*'); ?>" required>
									<input type="text" name="delivery_firstname" id="delivery_firstname" placeholder="<?php echo __('Keresztnév*'); ?>" required>
								</div>
								<div class="row flx-justify">
									<input type="text" name="delivery_street" id="delivery_street" placeholder="<?php echo __('Utca*'); ?>" required>
									<input type="text" name="delivery_house" id="delivery_house" placeholder="<?php echo __('Házszám/Emelet, ajtó*'); ?>" required>
								</div>
								<div class="row flx-justify">
									<input type="text" name="delivery_city" id="delivery_city" placeholder="<?php echo __('Város*'); ?>" required>
									<input type="text" name="delivery_zip" id="delivery_zip" placeholder="<?php echo __('Irányítószám*'); ?>" required>
								</div>
								<div class="row flx-justify">
									<input type="text" name="delivery_telephone" id="delivery_telephone" placeholder="<?php echo __('Telefonszám*'); ?>" required>
								</div>
							</div>
						</form>
						<div class="row add">
							<textarea name="message" id="message" placeholder="<?php echo __('Megjegyzés'); ?>"></textarea>
						</div>
					</div>
					<div class="billing-info">
						<h2>Billing info</h2>

						<div class="row">
							<div class="col-6">
								<input type="radio" name="cc" id="cc" value="online" checked>
								<label for="cc" class="radio_green op text-bold"> <span><?php echo __('Bankkártyával azonnal (SIMPLE Online Fizetési Rendszer)'); ?></span></label>

								<p><?php echo __('Azonnali bankkártyás fizetés esetén automatikusan a SIMPLE Online Fizetési Rendszer felületre navigálunk és a bankkártya adataid kitöltésével rendelhetsz. Mint szolgáltató, mi semmilyen a bankkártyádra vonatkozó adatot nem tárolunk. Ilyen esetben többlet költség nem kerül felszámításra. '); ?></p>
								<a href="<?= URL::base(TRUE, FALSE) ?>SIMPLE.pdf" target="_blank"><img
											src="<?= URL::base( true, false ) ?>assets/img/cards.jpg" class="responsive"></a>

							</div>
							<div class="col-6">
								<?php if($status==1):?>
								<input id="cod" type="radio" name="cc" value="ondelivery">
								<label for="cod" class="radio_green od text-bold"> <span><?php echo __('Utánvét (Extra költséget számolunk fel:'); ?> +<?= $cost ?> Ft)</span></label>

								<p><?php echo __('Megrendelést követően két email üzenetet fogsz kapni: egyik a Goodiebox regisztrációról szól, a másik pedig a rendelésed megerősítése. Ha 24 órán belül nem érkezik meg mindkét üzenet, kérlek vedd fel velünk a kapcsolatot az alábbi email címen:info@goodiebox.hu Köszönjük!'); ?></p>
								<?php endif;?>
							</div>
						</div>
					</div>
					<div class="row flx-center check-box-holder">
						<input type="checkbox" id="confirm">
						<label for="confirm" class="gray-box__green-check">I have read and understood the terms and
							conditions</label>
					</div>
					<div class="row flx-center action-holder">
						<input type="submit" name="submit" id="submit" value="<?php echo __('MEGRENDELEM'); ?>" class="btn large solid green">
					</div>
				</main>
			</div>
		</section>
	</div>
	<!-- .content-box-->
</div>
<!-- end .row.flx-center-->

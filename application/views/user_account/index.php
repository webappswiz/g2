<!-- Page Title ======================================-->
<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1 class="text-center"><?php echo __( 'Saját profilom' ); ?></h1>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
</section>
<div class="row flx-center">
	<div class="content-box my-office">
		<div class="row tabs">
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1"><?php echo __( 'Személyes adataim' ); ?></a></li>
					<li><a href="#tabs-2"><?php echo __( 'Kutyusaim' ); ?></a></li>
					<li><a href="#tabs-3"><?php echo __( 'Hívj meg egy barátot!' ); ?></a></li>
					<li><a href="#tabs-4"><?php echo __( 'Megrendelés' ); ?></a></li>
					<li> <a href="#tabs-5"><?php echo __('Kupon használat követése'); ?></a></li>
				</ul>
				<div id="tabs-1" class="delivery-inf">
					<h2 class="text-center">Delivery information</h2>

					<h3 class="text-center">Country: Hungary</h3>

					<p class="text-center text-gray">Before you make a new order, check to make sure your billing and
						delivery information is correct!</p>

					<form action="/user_account/editShipping" method="POST" id="shipping">
						<div class="row">
							<div class="col-6">
								<label><?php echo __( 'Vezetéknév*' ); ?></label>
								<input type="text" id="last-name" name="last-name" required
								       value="<?= ( $shipping ) ? $shipping->customer_lastname : $current_user->customer_lastname ?>">
							</div>
							<div class="col-6">
								<label><?php echo __( 'Keresztnév*' ); ?></label>
								<input type="text" name="first-name" required
								       value="<?= ( $shipping ) ? $shipping->customer_firstname : $current_user->customer_firstname ?>">
							</div>
							<div class="col-6">
								<label><?php echo __( 'Utca*' ); ?></label>
								<input type="text" name="street" id=""
								       value="<?= ( $shipping ) ? $shipping->customer_street : $current_user->customer_street ?>"
								       placeholder="" required>
							</div>
							<div class="col-6">
								<label><?php echo __( 'Házszám/Emelet, ajtó*' ); ?></label>
								<input type="text" name="house" class="rounded" id=""
								       value="<?= ( $shipping ) ? $shipping->customer_house : $current_user->customer_house ?>"
								       placeholder="" required>
							</div>
							<div class="col-6">
								<label><?php echo __( 'Irányítószám*' ); ?></label>
								<input type="text" name="zip" class="rounded" id=""
								       value="<?= ( $shipping ) ? $shipping->customer_zip : $current_user->customer_zip ?>"
								       required>
							</div>
							<div class="col-12">
								<label><?php echo __( 'Város*' ); ?></label>
								<input type="text" name="city"
								       value="<?= ( $shipping ) ? $shipping->customer_city : $current_user->customer_city ?>"
								       class="rounded" id="" required>
							</div>
							<div class="col-12">
								<label><?php echo __( 'Megjegyzés' ); ?></label>
								<input type="text" name="message">
							</div>
							<div class="col-4">
								<label><?php echo __( 'E-mail cím*' ); ?></label>
								<input type="text" name="email" class="rounded" id=""
								       value="<?= $current_user->email ?>" readonly>
							</div>
							<div class="col-4">
								<label><?php echo __( 'Jelszó*' ); ?></label>
								<input type="password" name="password" class="rounded" id="password">
							</div>
							<div class="col-4">
								<label><?php echo __( 'Telefonszám*' ); ?></label>
								<input type="text" name="telephone" class="rounded" id="telephone"
								       value="<?= ( $shipping ) ? $shipping->customer_telephone : $current_user->customer_telephone ?>"
								       required>
							</div>
						</div>
						<div class="row flx-center">
							<input name="edit_shipping" type="submit" value="<?php echo __( 'ADATAIM MENTÉSE' ); ?>"
							       class="btn large solid green">
						</div>
					</form>
					<script>
						$("#telephone").mask("+36 99 999-99-99");
						$.extend($.validator.messages, {
							required: "<?php echo __('ez az információ szükséges'); ?>",
							equalTo: "<?php echo __('Kérjük, adja ugyanazt az értéket újra'); ?>"
						});
						$.validator.addMethod("myCustomRule", function (value, element) {
							return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
						}, "Custom message for this rule");
						$("#shipping").validate({
							rules: {
								email: {
									myCustomRule: true
								},
								messages: {
									email: "<?php echo __('Helytelen e-mail cím!'); ?>",
								}
							}
						});
					</script>
				</div>
				<div id="tabs-2" class="my-puppies">
					<h2 class="text-center"><?php echo __('Kutyusaim'); ?></h2>

					<div class="row">
					<div class="col-6">
						<?php
						$puppies = ORM::factory( 'Puppy' )
						              ->where( 'user_id', '=', $current_user->id )
						              ->find_all();
						if ( count( $puppies ) > 0 ):
							$i = 0;
							foreach ( $puppies as $puppy ):
								?>
								<div class="row puppies-item">
									<div class="row">

										<?php if($puppy->img_name!=''):?>
											<img src="<?php echo URL::base( true, false ); ?>uploads/puppies/<?php echo $puppy->img_name?>"
											     class="puppies-avatar rounded">
										<?php else:?>
											<img src="<?php echo URL::base( true, false ); ?>assets/css/images/puppies-background.jpg"
											     class="puppies-avatar rounded">
										<?php endif;?>


										<h3><?= $puppy->puppy_name ?></h3>
									</div>
									<div class="row">
										<table>
											<tr>
												<td>
													<?php
													if ($puppy->selected_size == 1)
														echo __('Icipici');
													if ($puppy->selected_size == 2)
														echo __('Éppen jó');
													if ($puppy->selected_size == 3)
														echo __('Igazi óriás');
													?>
												</td>
											</tr>
											<tr>
												<td><?= ($puppy->gender == 0) ? __('Lány') : __('Fiú') ?></td>
											</tr>
											<tr>
												<td><?= $puppy->years . '.' . $puppy->months ?></td>
											</tr>
								<?php if ($puppy->alerg == 1) : ?>
											<tr>
												<td><?php echo __('Allergiás:'); ?></td>
											</tr>
											<tr>
												<td><?= $puppy->alerg_descr ?></td>
											</tr>
											<?php endif; ?>
										</table>
									</div>
									<div class="row">
										<form action="/user_account/order" method="POST">
											<input type="hidden" name="puppy_id" value="<?= $puppy->id ?>">
											<input type="submit" name="submit" value="<?php echo __('GYERÜNK'); ?>" class="btn solid green">
										</form>&nbsp;&nbsp;
										<a href="#" class="btn solid orange">Edit info</a>
									</div>
								</div>
								<?php
								$i ++;
							endforeach;
						endif;
						?>
						</div>
						<div class="col-6 new-puppy">
							<h3 class="text-center bgc-orange rad-3">Add a new puppies profile</h3>

							<form action="/user_account/addDog" method="POST" name="order" enctype="multipart/form-data">
								<div class="row flx-middle">
									<div class="img-upload-holder"><img id="uploadImg" src="#"
									                                    class="puppies-avatar rounded"></div>
									<input id="puppy-img-load" type="file" name="puppy_img" accept="image/*">
									<label for="puppy-img-load" class="btn solid green">Add photo</label>
								</div>
								<div class="row input-name-holder">
									<input type="text" name="puppy_name" placeholder="<?php echo __('Kutyus neve'); ?>">
								</div>
								<div class="row flx-around radiobox-holder size-select">
									<div class="item-box text-center text-small">
										<input id="size_1" type="radio" name="selected_size" value="1">

										<div class="size-img-1"></div>
										<p><?php echo __('Icipici'); ?></p><span>(max 9kg)</span>
										<label for="size_1" class="radio_green s1"></label>
									</div>
									<div class="item-box text-center text-small">
										<input id="size_2" type="radio" name="selected_size" value="2" checked>

										<div class="size-img-2"></div>
										<p><?php echo __('Éppen jó'); ?></p><span>(10-24kg)</span>
										<label for="size_2" class="radio_green s2"></label>
									</div>
									<div class="item-box text-center text-small">
										<input id="size_3" type="radio" name="selected_size" value="3">

										<div class="size-img-3"></div>
										<p><?php echo __('Igazi óriás'); ?></p><span>(25+kg)</span>
										<label for="size_3" class="radio_green s3"></label>
									</div>
								</div>
								<div class="row flx-justify flx-nowrap">
									<div class="gender-select"><span class="toggle"><?php echo __('Kutyus neme*'); ?></span>

										<div class="drop-box">
											<input id="gender_male" type="radio" name="gender" value="0" data-gender="<?php echo __('Lány'); ?>">
											<label for="gender_male"><?php echo __('Lány'); ?></label>
											<input id="gender_female" type="radio" name="gender" value="1" data-gender="<?php echo __('Fiú'); ?>">
											<label for="gender_female"><?php echo __('Fiú'); ?></label>
										</div>
									</div>
									<div class="date-dropdown-holder">
										<div class="container">
											<input type="text" name="years" placeholder="Year" readonly><span class="icon"></span>
											<ul class="option year">
												<?php

												for ( $i = 1994; $i <= date( 'Y' ); $i ++ ) {
													echo '<li>'.$i.'</li>';
												}

												?>
											</ul>
										</div>
										<div class="container">
											<input type="text" name="months" placeholder="Month" readonly><span class="icon"></span>
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

								<div class="row">
									<div class="radiobox-holder alergi-select">
										<p class="text-center"><?php echo __('Allergiás a kutyusod?*'); ?></p>

										<p class="text-center">
											<input id="alerg_yes" type="radio" name="alerg" value="1" checked>
											<label for="alerg_yes" class="radio_green a1">Yes</label>
											<input id="alerg_no" type="radio" name="alerg" value="0">
											<label for="alerg_no" class="radio_green a2">No</label>
										</p>
									</div>
								</div>
								<div class="row">
									<textarea name="alerg_descr" placeholder="Your text here"></textarea>
								</div>
								<div class="row">
									<input type="submit" value="<?php echo __('GYERÜNK'); ?>" class="btn large solid green">
								</div>
								<input type="hidden" name="order1" value="1">
							</form>
						</div>
						</div>
				</div>
				<div id="tabs-3">
					<h2 class="text-center">Invite your friend!</h2>
					<p class="text-center text-gray">Before you make a new order, check to make sure your billing and delivery information is correct!</p>
					<form action="/user_account/invite" name="invite" method="POST" class="invite-form">
						<label><?php echo __('Barátod e-mail címe*'); ?></label>
						<div class="row flx-middle">
							<input type="text" name="friend_email" id="friend_email" value="" required>
							<input type="submit" value="<?php echo __('TOVÁBB'); ?>" name="tovabb" class="btn large solid green">
						</div>
						<script>
							$(".process-form3").validate({
								rules: {
									friend_email: {
										myCustomRule: true
									}
								},
								messages: {
									'friend_email': "<?php echo __('Helytelen e-mail cím!'); ?>"
								}
							});
						</script>
					</form>
				</div>
				<div id="tabs-4">
					<h2 class="text-center"><?php echo __('Megrendeléss'); ?></h2>
					<p class="text-center text-gray">Order information</p>
					<div class="row flx-center order-info">
						<?php
						$orders = ORM::factory('Order')
						             ->where('user_id', '=', $current_user->id)
						             ->find_all();
						if (count($orders) > 0):
							?>
							<?php
							foreach ($orders as $order) {
								if ($order->orders_status == 1) {
									$status = __('Függőben');
								} elseif ($order->orders_status == 2) {
									$status = __('Feldolgozva');
								} elseif ($order->orders_status == 3) {
									$status = __('Szállítva');
								} elseif ($order->orders_status == 4) {
									$status = __('Kész');
								} elseif ($order->orders_status == 6) {
									$status = __('Elutasított');
								}
								?>
								<table>
									<tr>
										<th><?php echo __('Rendelés száma:'); ?></th>
										<td><?php echo $order->id; ?></td>
									</tr>
									<tr>
										<th><?php echo __('Rendelés dátuma:'); ?></th>
										<td><?php echo $order->date_purchased; ?></td>
									</tr>
									<tr>
										<th><?php echo __('Rendelés állapota:'); ?></th>
										<td><?php echo $status; ?></td>
									</tr>
								</table>
								<hr>
						<?php
							}
						endif;
						?>

					</div>
				</div>
				<div id="tabs-5">
					<h2 class="text-center"><?php echo __('Kupon használat követése'); ?></h2>
					<div class="row coupon-tracking">
						<p>
							<?php
							$discounts = ORM::factory('CouponCodes')
							                ->where('user_id', '=', $current_user->id)
							                ->find_all();
							if (count($discounts) > 0):
								?>
								<?php
								foreach ($discounts as $discount) {
									echo __('Kupon kód: ') . $discount->coupon_code . ' <br/>'.__('Megrendelések a kupon kóddal:').$discount->count;
								}

							endif;
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
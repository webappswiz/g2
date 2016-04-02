<script type="text/javascript">
	$(document).ready(function () {
		$('#submit_form').on('click', function () {
			div = $('.content').filter(':visible');
			$('form', div).submit();
		});
		$('.selected_size').val($('input:radio[id^="size"]:checked').val());
		console.log($('input:radio[id^="size"]:checked').val());
		$('input:radio[id^="size"]').on('click', function () {
			$('.selected_size').val($(this).val());
			console.log($(this).val());
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
		$('.alerg_yes').on('click', function () {
			$('#al_label').show();
			$('#alerg_descr').show();
			$('#alerg_descr').attr('required', 'required');
		});
		$('.alerg_no').on('click', function () {
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
					<h2>Puppies detail</h2>
				</div>
				<div class="step-two">
					<h2>Goodiebox type</h2>
				</div>
			</div>
		</section>
		<section id="step-one">
			<form action="#" mathod="POST">
				<!-- Select size =====================================-->
				<h2 class="text-center">Tell us how big your puppy is!*</h2>

				<div class="row flx-around select-size">
					<div class="item-box text-center">
						<input id="size_1" type="radio" name="group1" value="1">

						<div class="size-img-1"></div>
						<p class="text-bold">Tiny</p><span>MAX 9KG</span>
						<label for="size_1" class="radio_green s1"></label>
					</div>
					<div class="item-box text-center">
						<input id="size_2" type="radio" name="group1" value="2" checked>

						<div class="size-img-2"></div>
						<p class="text-bold">Just Right</p><span>MAX 10-24KG</span>
						<label for="size_2" class="radio_green s2"></label>
					</div>
					<div class="item-box text-center">
						<input id="size_3" type="radio" name="group1" value="3">

						<div class="size-img-3"></div>
						<p class="text-bold">Real Giant</p><span>MAX 25+KG</span>
						<label for="size_3" class="radio_green s3"></label>
					</div>
				</div>
				<!-- Registrtion Form ================================-->
				<h2 class="text-center">For who are you buying Goodiebox?</h2>

				<div class="row flx-center registration_pre">
					<div class="container flx-column">
						<label>Your e-mail adress*</label>
						<input type="text" name="email" required>
						<label>Puppy's name</label>
						<input type="text" name="puppy_name" required>

						<div class="gender-select"><span class="toggle">Gender</span>

							<div class="drop-box">
								<input id="gender_male" type="radio" name="gender" value="male">
								<label for="gender_male">Male</label>
								<input id="gender_female" type="radio" name="gender" value="Female">
								<label for="gender_female">Female</label>
							</div>
						</div>
						<div class="date-holder"><input type="text" id="datepicker"></div>
					</div>
				</div>
				<div class="alergi-select">
					<p class="text-center">Is your puppy allergic? (You need to fill these boxes!)</p>

					<p class="text-center">
						<input id="alerg_yes" type="radio" name="allergic" value="true" checked>
						<label for="alerg_yes" class="radio_green a1">Yes</label>
						<input id="alerg_no" type="radio" name="allergic" value="false">
						<label for="alerg_no" class="radio_green a2">No</label>
					</p>
				</div>
				<!-- Box select ======================================-->
				<h2 class="text-center">Is this the box you really want?</h2>

				<div class="row flx-around box-select">
					<div class="item-box"><img src="<?php echo URL::base( true, false ); ?>assets/img/box-plus.jpg" class="responsive">
						<input id="box-plus" type="radio" name="box-type" value="box-plus" checked>
						<label for="box-plus" class="radio_green b1">Goodiebox Plus</label>

						<p>Every month, 4-6 carefully selected items (food, snacks, toys, accessories, grooming items,
							vitamins) are in the box.</p><span class="ammount">599</span>
					</div>
					<div class="item-box"><img src="<?php echo URL::base( true, false ); ?>assets/img/box-smart.jpg" class="responsive">
						<input id="box-smart" type="radio" name="box-type" value="box-smart">
						<label for="box-smart" class="radio_green b2">Goodiebox Plus</label>

						<p>Every month, 4-6 carefully selected items (food, snacks, toys, accessories, grooming items,
							vitamins) are in the box.</p><span class="ammount">599</span>
					</div>
				</div>
				<div class="row flx-center resume">
					<div class="container text-center">
						<p>You have chosen <span class="show-selected-box text-pink">Goodiebox Smart!</span> If your
							puppy likes to play or snack, this is just perfect! Contents: 3-5 items (depending on the
							value)! Here, you will find tasty snacks and fun toys to keep your puppy busy for a while!
						</p>

						<p>You are just one step away from finishing your order! If this is your choice, click "Next"
							and give your billing and delivery details!</p>
					</div>
				</div>
				<div class="action text-center"><a id="order-next" href="#" class="btn bold solid green">NEXT <i
							class="fa fa-angle-right"></i></a></div>
			</form>
		</section>
	</div>
</div>

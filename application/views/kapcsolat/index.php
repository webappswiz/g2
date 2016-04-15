<script>
	$(document).ready(function () {
		$('#submit').on('click', function () {
			if ($('#contact').valid()) {
				firstname = $('#customer_firstname').val();
				lastname = $('#customer_lastname').val();
				email = $('#customer_email').val();
				subject = $('#subject').val();
				message = $('#message').val();
				$.post('/kapcsolat/index', {
					'email': email,
					'firstname': firstname,
					'lastname': lastname,
					'subject': subject,
					'message': message
				}).done(function (data) {
					if (data == 1) {
						$('.contact-us-form').empty();
						$('.contact-us-form').html('<h3>Köszönjük az üzenetedet!<br/>Hamarosan válaszolunk!<br/>Szép napot!</h3>');
					}
				});
			}
		});
	});
</script>


<!-- Contact Form ======================================-->
<section>
	<div class="row flx-center">
		<div class="content-box">
			<h1 class="text-center"><?php echo __( 'Írj nekünk!' ); ?></h1>

			<p class="text-center text-gray"><?php echo __( 'Mindig örülünk, ha üzenetet kapunk! </br>Van egy jó ötleted? Valami nem tetszett vagy nagyon is? </br>Vannak kérdéseid és a választ nem találod a GYIK menü pontban?</br>Ne rejtegesd a véleményed, oszd meg velünk és mi válaszolunk neked!' ); ?></p>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
	<div class="row flx-center">
		<div class="contact-form">
			<form action="" method="POST" class="row flx-justify" id="contact">
				<div class="col-6 col-xs-12">
					<p><?php echo __( 'Kapcsolat információ:' ); ?></p>

					<p class="text-bold">GOODIEBOX</p>

					<p class="text-bold">Web Apps Consult Kft.</p><br>

					<p class="text-bold">1053 Budapest</p>

					<p class="text-bold">Kossuth Lajos utca 7-9.</p><br>

					<p><?php echo __( 'E-mail cím:' ); ?></p><a href="mailto:info@goodiebox.hu" class="text-bold email">info@goodiebox.hu</a>

					<div class="field-holder">
						<input type="text" id="customer_firstname" name="customer_firstname"
						       placeholder="<?php echo __( 'Vezetéknév*' ); ?>"
						       value="<?= ( $current_user ) ? $current_user->customer_firstname : '' ?>" required
						       aria-required="true">
						<input type="text" id="customer_lastname" name="customer_lastname"
						       placeholder="<?php echo __( 'Keresztnév*' ); ?>"
						       value="<?= ( $current_user ) ? $current_user->customer_lastname : '' ?>" required
						       aria-required="true">
						<input type="text" id="customer_email" name="customer_email"
						       placeholder="<?php echo __( 'E-mail cím*' ); ?>"
						       value="<?= ( $current_user ) ? $current_user->email : '' ?>" required
						       aria-required="true">
						<input type="text" id="subject" value="" name="subject"
						       placeholder="<?php echo __( 'Tárgy' ); ?>">
						<textarea id="message" name="message" placeholder="<?php echo __( 'Kezdj egy gépelni...' ); ?>"
						          required aria-required="true"></textarea>
						<input id="submit" type="submit" value="<?php echo __( 'ELKÜLDÖM' ); ?>" class="btn large solid pink">
					</div>
					<!-- end .field-holder-->
				</div>
				<!-- end .col-6.col-xs-12-->
				<div class="col-4 col-xs-12">
					<img src="<?= URL::base( true, false ) ?>assets/img/contact-img1.jpg" class="responsive">
					<img src="<?= URL::base( true, false ) ?>assets/img/contact-img2.jpg" class="responsive">
					<img src="<?= URL::base( true, false ) ?>assets/img/contact-img3.jpg" class="responsive">
					<a href="http://goodiebox.hu/signup" class="btn large solid orange"><?php echo __( 'Feliratkozok a hírlevélre!' ); ?></a>
				</div>
				<!-- end .col-4.col-xs-12-->
			</form>
			<script>
				$("#contact").validate({
					rules: {
						customer_email: {
							required: true,
							email: true
						}
					}

				});
			</script>
		</div>
	</div>
</section>


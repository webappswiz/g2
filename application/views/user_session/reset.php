<section>
	<div class="row flx-center">
		<div class="registration-form">
			<h1 class="text-center">Login</h1>
			<form action="<?php echo URL::site( 'user_session/reset' ); ?>" method="POST" class="flx flx-column">
				<input class="rounded" type="text" name="email" placeholder="<?php echo __( 'E-mail cím' ); ?>">
				<p class="text-center">
					<input type="submit" class="btn large solid pink" value="<?php echo __( 'Elfogad' ); ?>">
				</p>
			</form>
		</div>
	</div>
</section>
<section>
	<div class="row flx-center">
		<div class="registration-form">
			<h1 class="text-center">Login</h1>
			<form action="<?php echo URL::site( 'user_session/login' ); ?>" method="POST" class="flx flx-column">
				<input class="rounded" type="text" name="username" placeholder="<?php echo __( 'E-mail cím' ); ?>">
				<input class="rounded" type="password" name="password" placeholder="<?php echo __( 'Jelszó' ); ?>">
				<?php if(isset($_REQUEST['referrer']) && $_REQUEST['referrer']=='step3'):?>
						<input type="hidden" name="redirect" value="1">
				<?php endif;?>
				<input type="submit" value="<?php echo __( 'Belépés' ); ?>" class="btn large solid pink">
				<p class="text-center">
					<a href="/user_session/reset"><?php echo __( 'Elfelejtetted a jelszavadat?' ); ?></a>
				</p>
			</form>
		</div>
	</div>
</section>
<section>
	<div class="row flx-center">
		<div class="content-box ">
			<h1 style="color:#f79320" class="text-center"><?php echo __( 'Köszönjük a rendelésedet!' ); ?></h1>

			<h2 class="text-center"><?php echo __( 'E-mail címedre visszaigazolást küldtünk.' ); ?></h2>
			<?php if ( $status == 1 ): ?>
				<h3 class="text-center"><a style="text-decoration: underline"
				                           href="<?php echo URL::base( true, false ) . 'user_account/?new' ?>">
						<?php echo __( 'Rendelnél még másik dobozt is?' ); ?>
					</a></h3>
			<?php endif; ?>
		</div>
	</div>
</section>
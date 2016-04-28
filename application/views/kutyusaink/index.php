<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1 class="text-center"><?php echo __( 'Kutyusaink + Dobozaink' ); ?></h1>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
</section>
<div class="row flx-center">
	<div class="content-box gallery">
		<!-- Gallery =================================-->
		<!-- Photo ====-->
		<section>
			<div class="category-box">
				<div class="category-title"><a><?php echo __( 'Goodiebox fotók' ); ?></a><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok">SEE MORE</a></div>
				<div class="row flx-center">
					<div class="content-box photo">
						<div class="row flx-justify">
							<img src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-366.jpg">
							<img src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-367.jpg">
							<img src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-368.jpg">
							<img src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-369.jpg">
						</div>
						<!-- end .row.flx-justify-->
					</div>
					<!-- end .content-box.photo-->
				</div>
				<!-- end .row.flx-center-->
			</div>
		</section>
		<!-- Video ====-->
		<section>
			<div class="category-box">
				<div class="category-title"><a><?php echo __( 'Goodiebox videók' ); ?></a><a href="<?= URL::base( true, false ) ?>kutyusaink/video">SEE MORE</a></div>
				<div class="video-box">
					<iframe width="1140" height="640"
					        src="https://www.youtube.com/embed/videoseries?list=PL4ZnDVm3eIp0fjo7W2dGCdirkuboJ_kzt&loop=1"
					        frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
		<!-- Goodiebox Carusel ====-->
		<section>
			<div class="category-box">
				<div class="category-title"><a><?php echo __( 'Meglepi dobozaink' ); ?></a><a href="<?= URL::base( true, false ) ?>kutyusaink/doboz">SEE MORE</a></div>
				<div id="carusel-goodiebox" class="la-carusel">
					<ul>
						<li><img src="<?= URL::base( true, false ) ?>assets/img/photos/plus-februar-large.jpg"></li>
						<li><img src="<?= URL::base( true, false ) ?>assets/img/photos/plus-januar-large.jpg"></li>
						<li><img src="<?= URL::base( true, false ) ?>assets/img/photos/plus-december-large.jpg"></li>
					</ul>
				</div>
			</div>
		</section>
	</div>
	<!-- .content-box-->
</div>
<!-- end .row.flx-center-->
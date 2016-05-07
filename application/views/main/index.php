<?php
$options = ORM::factory( 'Options', 1 );
if ( Cookie::get( 'lang', 'hu' ) == 'hu' ) {
	$text = $options->text;
} else {
	$text = $options->text_eng;
}


$end_date   = $options->end_date;
$status     = $options->status;
$date_array = explode( ' ', $end_date );
$date       = explode( '/', $date_array[0] );
$time       = explode( ':', $date_array[1] );
?>
<script>
	countIt('<?= $date[0] ?>', '<?= $date[1] ?>', '<?= $date[2] ?>', '<?= $time[0] ?>', '<?= $time[1] ?>', '00', '<?= $status ?>');
	function countIt(year, month, day, hours, minutes, seconds, status) {
		now = new Date();
		start_date = new Date(2014, 9, 28, 18, 00, 00);
		now = now.getTime() / 1000;
		start = start_date.getTime() / 1000;
		setTimeout(function () {
			endDate = new Date(year, month, day, hours, minutes, seconds, 00);
			thisDate = new Date();
			var daysLeft = parseInt((endDate - thisDate) / 86400000);
			var hoursLeft = parseInt((endDate - thisDate) / 3600000);
			var minutsLeft = parseInt((endDate - thisDate) / 60000);
			var secondsLeft = parseInt((endDate - thisDate) / 1000);

			seconds = minutsLeft * 60;
			seconds = secondsLeft - seconds;
			seconds = (seconds < 10) ? 0 + seconds : seconds;

			minutes = hoursLeft * 60;
			minutes = minutsLeft - minutes;

			hours = daysLeft * 24;
			hours = (hoursLeft - hours) < 0 ? 0 : hoursLeft - hours;
			days = daysLeft;
			startCount(days, hours, minutes, seconds, status);
		}, 100);
	}

	function startCount(days, hours, minutes, seconds, status) {
		$('#days').html(days);
		seconds = (seconds) < 10 ? '0' + seconds : seconds;
		minutes = (minutes) < 10 ? '0' + minutes : minutes;
		hours = (hours) < 10 ? '0' + hours : hours;
		if (status == 0) {
			$('li', '.lock').css('background', 'url("/assets/img/lock-close.png") no-repeat left center');
			$('li', '.lock').html("<?php echo '&nbsp;&nbsp;' . __('Április 4-én nyitunk!'); ?>");
		} else {
			$('li', '.lock').css('background', 'url("/assets/img/lock-open.png") no-repeat left center');
			$('li', '.lock').html("<?php echo '&nbsp;&nbsp;' . __('Nyitva vagyunk!'); ?>");
		}
		$('#hours').html(hours);
		$('#minutes').html(minutes);
		$('#seconds').html(seconds);
		countIt('<?= $date[0] ?>', '<?= $date[1] - 1 ?>', '<?= $date[2] ?>', '<?= $time[0] ?>', '<?= $time[1] ?>', '00', '<?= $status ?>');
	}
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#show_t1').on('click', function () {
			if ($('#tovab1').is(":visible")) {
				$('#tovab1').hide('slow');
			} else {
				$('#tovab1').show('slow');
			}
		});
		$('#show_t2').on('click', function () {
			if ($('#tovab2').is(":visible")) {
				$('#tovab2').hide('slow');
			} else {
				$('#tovab2').show('slow');
			}
		});
		$('#tab-container').easytabs();

		function unloadPopupBox() {    // TO Unload the Popupbox
			$('#dialog-form1').fadeOut("slow");
			$("#container").css({// this is just for style
				"opacity": "1"
			});
		}

		function loadPopupBox() {    // To Load the Popupbox
			$('#dialog-form1').slideDown("slow");

			$("#container").css({// this is just for style
				"opacity": "0.3"
			});
		}

		$('#popupBoxClose1').on('click', function () {
			unloadPopupBox();
			$('p.text_message').html('');
		});

		$('#subscribe').on('click', function () {
			loadPopupBox();
		});

		$('.disabled').on('click', function () {
			$('p.text_message').html("<?php echo __('Jelenleg nincs rendelési időszakunk! Iratkozz fel a nyitási értesítőre és mi figyelmeztetünk, ha eljött az idő! :)')?>");
			loadPopupBox();
		});

	});
</script>

<div id="dialog-form1" title="<?php echo __( 'Kérem az értesítést!' ); ?>" style="display:none;min-height:180px;">
	<script>
		$(".process-form").validate();
	</script>
	<div class="claim-form2">
		<a id="popupBoxClose1"><img src="<?= URL::base( true, false ) ?>assets/img/delete.png"></a>

		<p class="text_message"></p>

		<form class="process-form" name="order" method="POST" action="/subscribe">
			<div>
				<label style="margin-top:10px;"><?php echo __( 'Keresztneved:' ); ?></label>
				<input type="text" name="name" size="20" required/>
			</div>
			<div style="padding-bottom:10px;">
				<label><?php echo __( 'Email címed:' ); ?></label>
				<input type="email" name="email" size="20"/>
			</div>
			<div style="text-align: center;margin-bottom:10px;">
				<input type="submit" value="<?php echo __( 'Kérem az értesítést!' ); ?>"
				       class="dark-btn dog-prof-btn rounded">
			</div>
		</form>

	</div>
</div>
<section>
	<div class="row flx-center">
		<div class="content-box call-to-action-1">
			<div class="row">
				<div class="col-6">
					<h1><?php echo __("Legyen kutyusodnak is saját doboza"); ?></h1>
					<p>Mi is az a Goodiebox? Magyarország első és egyedülálló meglepidoboza kifejezetten kutyáknak! Ha a szülinapja közeleg, örökbe fogadtad, levizsgázott vagy csak annyira imádod, hogy a legédesebb dologgal lepnéd meg, akkor a legjobb helyen jársz! Trendi, ízléses és kreatív módon segítünk neked, hogy időt és pénzt spórolva a Te kutyusod lehessen a legmenőbb az utcában!</p>
					<a href="/order" class="btn large solid pink"><?php echo _("MEGRENDELEM");?></a>
				</div>
				<!-- end .col-6-->
				<div class="col-6"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/home-img-1.jpg' ); ?>"
						class="responsive"></div>
				<!-- end .col-6-->
			</div>
			<!-- end .row-->
		</div>
		<!-- end .content-box.call-to-action-1-->
	</div>
	<!-- end .row.flx-center-->
</section>
<!-- Timer ========================================-->
<section>
	<div class="row flx-center bgc-pink">
		<div class="content-box timer">
			<div class="row flx-center flx-justify">
				<div class="image-holder"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/home-img-2.png' ); ?>"></div>
				<!-- end .image-holder-->
				<div class="container text-white">
					<?php if($status==1):?>
					<h2><?php echo $text ?></h2>
					<h3>Addig nézelődj a Goodieshopban, ami most is nyitva van!</h3>
					<a id="subscribe" href="#" class="btn border white bold">subscribe now</a>
					<?php else:?>
						<h2>Visszaszámolunk a következő szupercuki goodieboxig!</h2>
						<h3>Addig nézelődj a Goodieshopban, ami most is nyitva van!</h3>
						<a id="subscribe" href="/order" class="btn border white bold">Irány goodieshoppingolni!</a>
					<?php endif;?>
				</div>
				<!-- end .container.text-white-->
				<div class="counter-holder"><span id="days" class="counter">12</span><span id="hours"
				                                                                           class="counter">09</span><span
						id="minutes" class="counter">15</span><span id="seconds" class="counter">30</span></div>
				<!-- end .counter-holder-->
			</div>
			<!-- end .row.flx-center.flx-justify-->
		</div>
		<!-- end .content-box.timer-->
	</div>
	<!-- .row.flx-center.bgc-pink-->
</section>

<!-- How It Works =================================-->
<section>
	<div class="row flx-center">
		<div class="content-box hiw">
			<h1 class="text-center"><?php echo __('Hogyan működik?'); ?></h1>

			<div class="row flx-justify">
				<div class="container col-3"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/hiw-1.png' ); ?>">

					<div class="row"><span class="round">1</span>

						<div class="header">
							<h2>Mutasd be nekünk</h2>

							<h3>a kutyusodat!</h3>
						</div>
						<!-- end .header-->
					</div>
					<!-- end .row-->
					<p>Ahhoz, hogy kis kedvenced a lehető legszuperebb dobozt kapja, tudnunk kell néhány fontos infót! Szokás mondani, hogy nem a méret a lényeg, de a Goodiebox összeállításakor azért mégis csak szükségünk van rá! Add meg kutyusod nevét és születési adatait is! Ügyelj arra, hogy minden adat helyes legyen, mi ebből dolgozunk! Gyere és rendelj MOST!</p>
				</div>
				<!-- end .container.col-3-->
				<div class="container col-3"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/hiw-2.png' ); ?>">

					<div class="row"><span class="round">2</span>

						<div class="header">
							<h2>Válaszd ki</h2>

							<h3>a Goodiebox típusát!</h3>
						</div>
						<!-- end .header-->
					</div>
					<!-- end .row-->
					<p>Összesen két doboz típus közül tudsz választani. A PLUS dobozt szerezd be, ha egyszerre több szuper dolgot szeretnél, nagyobb értékben! Ha szülinapos kutyusod, akkor ebben a dobozban extra meglepi is várja! Ha a SMART dobozzal kezdenéd, szintén érkezik az elmaradhatatlan „Goodiebox kutyajó érzés”, amiből számodra is kiderül, miért jó közénk tartozni!</p>
				</div>
				<!-- end .container.col-3-->
				<div class="container col-3"><img
						src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/hiw-3.png' ); ?>">

					<div class="row"><span class="round">3</span>

						<div class="header">
							<h2>Fizess és vedd</h2>

							<h3>át a Goodiebox dobozt!</h3>
						</div>
						<!-- end .header-->
					</div>
					<!-- end .row-->
					<p>Ha befejezted a megrendelést, teljes értékű tagja leszel a Goodieboxosok közösségének! Megtörténik a regisztráció, létrejön a saját profilod és ha szeretnél, következő hónapban már innen indíthatsz gyorsított rendelést! Ha minden adatot helyesen adtál meg, pár napon belül csenget nálad a futárunk a megrendelt Goodiebox dobozzal! Jó mókázást kívánunk hozzá!</p>
				</div>
				<!-- end .container.col-3-->
			</div>
			<!-- end .row.flx-justify-->
		</div>
		<!-- end .content-box.hiw-->
	</div>
	<!-- end .row.flx-center-->
</section>

<!-- Call to Action #2 ============================-->
<section>
	<div class="row flx-center bgc-yellow_light">
		<div class="content-box call-to-action-2">
			<h1 class="text-center text-orange">Mit találhatsz egy Goodiebox dobozban?</h1>

			<h3 class="text-center">Minden hónapban változnak a dobozban található termékek! Ezt mi is imádjuk, hiszen így bármikor is rendelsz egy éven belül, ugyanazt biztosan nem kapod vissza! Általában 4-7 db gondosan válogatott, itthon kevésbé ismert különféle (többnyire játék, jutalomfalat, snack, rágcsálnivaló, de esetenként higiénés termék és kiegészítő is) termék kerül a dobozodba, persze ez függ a típusától (Smart vagy Plus) és az adott havi koncepciótól is! Ha lemaradtál egy korábbi Goodieboxról, de szeretted volna ami benne volt, a termékeket megtalálhatod a GOODIESHOPban is!</h3><img
				src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/fotobox-2.png' ); ?>" class="responsive"><a
				a href="/order" class="btn large solid orange"><?php echo _("MEGRENDELEM");?></a>
		</div>
		<!-- end .content-box.call-to-action-2-->
	</div>
	<!-- end .row.flx-center.bgc-yellow_light-->
</section>

<?php if($options->status!=1):?>
<!-- Shop Carusel =================================-->
<section>
	<div class="row flx-center bgc-pink_light">
		<div class="content-box shop-carusel">
			<h1 class="text-center text-pink">Goodieshop</h1>
			<h3 class="text-center">Lemaradtál a nyitásról? Imádtál egy korábbi Goodiebox dobozba került terméket és ideje lenne megszerezned? Most itt a nagyszerű lehetőség, válogass az egyedülálló Goodieshop online boltunkból és lepd meg a kutyusodat azzal, aminek szerinted biztosan örülne!</h3>
			<div id="carusel-1" class="carusel-container">
				<ul id="carusel-line">
					<?php
					$products = ORM::factory( 'Products' )->order_by( 'id', 'DESC' )->limit( 6 )->find_all();
					foreach ( $products as $product ):
						$image = ORM::factory('ProductImages')->where('product_id','=',$product->id)->limit(1)->find();
						?>
						<li class="item product-preview <?php echo ($product->on_sale==1)?'label-sale ':''; echo ($product->new==1)?'label-new ':''; ?>">
							<?php if($image->img_name!=''):?>
								<img src="<?= URL::base( true, false ) ?>uploads/products/<?php echo $image->img_name;?>">
							<?php else:?>
								<img src="<?= URL::base( true, false ) ?>assets/img/placeholder.png">
							<?php endif;?>
							<div class="row">
								<h2><?php echo $product->product_name; ?></h2>
								<?php if ($product->on_sale==1): ?>
									<span class="ammount old"><?php echo $product->price; ?></span>
									<span class="ammount"><?php echo $product->sale_price; ?></span>
								<?php else: ?>
									<span class="ammount"><?php echo $product->price; ?></span>
								<?php endif;?>
								<a href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product->id ?>" class="btn solid pink">KOSÁRBA</a>
							</div>
						</li>
					<?php endforeach; ?>


				</ul>
			</div>
			<!-- end #carusel-1.carusel-container-->
		</div>
		<!-- end .content-box.shop-carusel-->
	</div>
	<!-- end .row.flx-center.bgc-pink_light-->
</section>
<?php endif; ?>
<!-- Photo ========================================-->
<section>
	<div class="row flx-center bgc-yellow_light">
		<div class="content-box photo">
			<h1 class="text-center"><?php echo __( 'Goodiebox fotótár' ); ?></h1>
			<div class="row flx-center gallery-carusel-holder">
				<div id="gallery-carusel" class="carusel-container">
					<ul class="flx flx-justify">
						<li class="item"><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok/?jan" class="gallery-link"><img src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-366.jpg"></a>
							<h2 class="text-center">Januar 2016</h2>
						</li>
						<li class="item"><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok/?dec" class="gallery-link"><img src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-367.jpg"></a>
							<h2 class="text-center">December 2015</h2>
						</li>
						<li class="item"><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok/?nov" class="gallery-link"><img src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-368.jpg"></a>
							<h2 class="text-center">November 2016</h2>
						</li>
						<li class="item"><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok/?oct" class="gallery-link"><img src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-369.jpg"></a>
							<h2 class="text-center">Október 2016</h2>
						</li>
					</ul>
				</div>
			</div>
			<!-- end .row.flx-justify-->
		</div>
		<!-- end .content-box.photo-->
	</div>
	<!-- end .row.flx-center.bgc-yellow_light-->
</section>

<section>
	<div class="row flx-center">
		<div class="content-box feedback">
			<h1 class="text-center"><?php echo __('Ez a ti véleményetek!'); ?></h1>

			<div class="row flx-justify">
				<div class="item feed">
					<header><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/IMG_0061.JPG"></header>
					<div class="content">
						<p>"Kedves Goodiebox-os Csapat, Megszeretném mégegyszer köszönni a kedvességetek, mind a többszöri egyeztetés, mind amiatt, hogy tényleg minden szempontból odafigyeltetek a kutyusom gyomorbetegségére. A játékok pedig egyszerűen fantasztikusak, nagy volt az öröm. Továbbra is maradunk hű vásárlótok :-)"</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-1.jpg" class="avatar">

						<div><span class="author">Zsanett,</span><span class="name">Kozármisleny</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/IMG_0065.JPG"></header>
					<div class="content">
						<p>"Ismét nagyon tetszett a doboz tartalma. Ez a száraztáp igazi újdonság volt számomra, mert ezt a márkát eddig még nem ismertem, de Rustynak nagyon ízlik, ahogy természetesen a jutalomfalatok is."</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-2.jpg" class="avatar">

						<div><span class="author">@Nikolett,</span><span class="name">Budapest</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/1460135_911183998914557_5797755493820555406_n.jpg"></header>
					<div class="content">
						<p>"Nagyszerű dolognak tartom, és hihetetlen nagy meglepetést okozott Tóbiásnak, minden nagyszerű a csomagban! Ami nagyon tetszett, hogy szinte személyre szóló <span style="color:#D931F7;font-weight:900;">volt</span> benne minden, főleg, hogy mi allergiások vagyunk! A játék nagy kedvenc, a táp szuper, a takarót imádjuk, a névre szóló biléta és a csomagolás pazar! KÖSZÖNJÜK"</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-3.jpg" class="avatar">

						<div><span class="author">@Ancsa,</span><span class="name">Sümeg</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/20141224_173208.jpg"></header>
					<div class="content">
						<p>"Nagyon jónak tartom. Tényleg személyre szabott odafigyeléssel állítottátok össze a csomagot, még telefonon is egyeztettetek, hogy a táp megfelel­e Oszkárnak. A rénszarvast azonnal kivette és azóta is cipeli. Köszönjük!"</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-1.jpg" class="avatar">

						<div><span class="author">@Rita,</span><span class="name">Budapest</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base(TRUE, FALSE) ?>assets/img/feedbacks/2015-01-31_0146.png"></header>
					<div class="content">
						<p>"Nagy örömmel vettük át és bontottuk ki az általatok küldött csomagot. Izgatottan fedtük fel a titkot rejtő dobozt. "</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/avatar-2.jpg" class="avatar">

						<div><span class="author">@Viktória,</span><span class="name">Tiszaszentimre</span></div>
					</footer>
				</div>
			</div>
			<!-- end .row.flx-justify-->
		</div>
		<!-- end .content-box.feedback-->
	</div>
	<!-- end .row.flx-center-->
</section>
<?php
$options = ORM::factory( 'Options', 1 );
if ( Cookie::get( 'lang', 'hu' ) == 'hu' ) {
	$text     = $options->text;
	$sub_text = $options->sub_text;
} else {
	$text     = $options->text_eng;
	$sub_text = $options->sub_text_eng;
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
			days = (daysLeft) < 0 ? 0 : daysLeft;
			minutes = (minutes) < 0 ? 0 : minutes;
			seconds = (seconds) < 0 ? 0 : seconds;
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


		$('.disabled').on('click', function () {
			$('p.text_message').html("<?php echo __('Jelenleg nincs rendelési időszakunk! Iratkozz fel a nyitási értesítőre és mi figyelmeztetünk, ha eljött az idő! :)')?>");
			loadPopupBox();
		});

	});
</script>
<section>
	<div class="row flx-center">
		<div class="content-box call-to-action-1">
			<div class="row">
				<div class="col-6">
					<h1><?php echo __( "Legyen kutyusodnak is saját doboza" ); ?></h1>

					<p>Mi is az a Goodiebox? Magyarország első és egyedülálló meglepidoboza kifejezetten kutyáknak! Ha a
						szülinapja közeleg, örökbe fogadtad, levizsgázott vagy csak annyira imádod, hogy a legédesebb
						dologgal lepnéd meg, akkor a legjobb helyen jársz! Trendi, ízléses és kreatív módon segítünk
						neked, hogy időt és pénzt spórolva a Te kutyusod lehessen a legmenőbb az utcában!</p>


					<?php if ( $status == 1 ): ?>
					<a href="/order" class="btn large solid pink"><?php echo _( "MEGRENDELEM" ); ?></a>
					<?php else:?>
						<a class="btn large solid pink gyere" href="#"><?php echo _( "MEGRENDELEM" ); ?></a>
					<?php endif;?>
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
<?php if ( $status == 0 ): ?>
	<!-- Timer ========================================-->
	<section>
		<div class="row flx-center bgc-pink">
			<div class="content-box timer">
				<div class="row flx-center flx-justify">
					<div class="image-holder"><img
							src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/home-img-2.png' ); ?>"></div>
					<!-- end .image-holder-->
					<div class="container text-white">
						<?php if ( $status == 1 ): ?>
							<h2><?php echo $text ?></h2>
							<h3><?php echo $sub_text; ?></h3>
							<a class="subscr btn border white bold">subscribe now</a>
						<?php else: ?>
							<h2><?php echo $text ?></h2>
							<h3><?php echo $sub_text; ?></h3>
							<a id="subscribe" href="/order" class="btn border white bold">Irány goodieshoppingolni!</a>
						<?php endif; ?>
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
<?php endif; ?>
<!-- How It Works =================================-->
<section>
	<div class="row flx-center">
		<div class="content-box hiw">
			<h1 class="text-center"><?php echo __( 'Hogyan működik?' ); ?></h1>

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
					<p>
						Ahhoz, hogy kis kedvenced a lehető legszuperebb dobozt kapja, tudnunk kell néhány fontos infót!
						Szokás mondani, hogy nem a méret a lényeg, de a Goodiebox összeállításakor azért mégis csak
						szükségünk van rá! Add meg kutyusod nevét és születési adatait is! Ügyelj arra, hogy minden adat
						helyes legyen, mi ebből dolgozunk!
						<?php if ( $status == 1 ): ?>
							<a style="color: deeppink" href="<?= URL::base( true, false ) ?>order">Gyere és rendelj
								MOST!</a>
						<?php else: ?>
							<a style="color: deeppink" class="gyere" href="#">Gyere és rendelj MOST!</a>
						<?php endif; ?>
					</p>
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
					<p>Összesen két doboz típus közül tudsz választani. A PLUS dobozt szerezd be, ha egyszerre több
						szuper dolgot szeretnél, nagyobb értékben! Ha szülinapos kutyusod, akkor ebben a dobozban extra
						meglepi is várja! Ha a SMART dobozzal kezdenéd, szintén érkezik az elmaradhatatlan „Goodiebox
						kutyajó érzés”, amiből számodra is kiderül, miért jó közénk tartozni!</p>
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
					<p>Ha befejezted a megrendelést, teljes értékű tagja leszel a Goodieboxosok közösségének!
						Megtörténik a regisztráció, létrejön a saját profilod és ha szeretnél, következő hónapban már
						innen indíthatsz gyorsított rendelést! Ha minden adatot helyesen adtál meg, pár napon belül
						csenget nálad a futárunk a megrendelt Goodiebox dobozzal! Jó mókázást kívánunk hozzá!</p>
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

			<h3 class="text-center">Minden hónapban változnak a dobozban található termékek! Ezt mi is imádjuk, hiszen
				így bármikor is rendelsz egy éven belül, ugyanazt biztosan nem kapod vissza! Általában 4-7 db gondosan
				válogatott, itthon kevésbé ismert különféle (többnyire játék, jutalomfalat, snack, rágcsálnivaló, de
				esetenként higiénés termék és kiegészítő is) termék kerül a dobozodba, persze ez függ a típusától (Smart
				vagy Plus) és az adott havi koncepciótól is! Ha lemaradtál egy korábbi Goodieboxról, de szeretted volna
				ami benne volt, a termékeket megtalálhatod a GOODIESHOPban is!</h3><img
				src="<?= URL::base( true, false ) ?><?php echo __( 'assets/img/fotobox-2.png' ); ?>" class="responsive"><a
				a href="/order" class="btn large solid orange"><?php echo _( "MEGRENDELEM" ); ?></a>
		</div>
		<!-- end .content-box.call-to-action-2-->
	</div>
	<!-- end .row.flx-center.bgc-yellow_light-->
</section>

<?php if ( $options->status != 1 ): ?>
	<!-- Shop Carusel =================================-->
	<section>
		<div class="row flx-center bgc-pink_light">
			<div class="content-box shop-carusel">
				<h1 class="text-center text-pink">Goodieshop</h1>

				<h3 class="text-center">Lemaradtál a nyitásról? Imádtál egy korábbi Goodiebox dobozba került terméket és
					ideje lenne megszerezned? Most itt a nagyszerű lehetőség, válogass az egyedülálló Goodieshop online
					boltunkból és lepd meg a kutyusodat azzal, aminek szerinted biztosan örülne!</h3>

				<div id="carusel-1" class="carusel-container">
					<ul id="carusel-line">
						<?php
						$products = ORM::factory( 'Products' )->where( 'status', '=', 1 )->order_by( 'id', 'DESC' )->limit( 6 )->find_all();
						foreach ( $products as $product ):
							$image = ORM::factory( 'ProductImages' )->where( 'product_id', '=', $product->id )->limit( 1 )->find();
							?>
							<li class="item product-preview <?php echo ( $product->on_sale == 1 ) ? 'label-sale ' : '';
							echo ( $product->new == 1 ) ? 'label-new ' : ''; ?>">
								<a class="preview-link"
								   href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product->id ?>">
									<?php if ( $image->img_name != '' ): ?>
										<img
											src="<?= URL::base( true, false ) ?>uploads/products/<?php echo $image->img_name; ?>">
									<?php else: ?>
										<img src="<?= URL::base( true, false ) ?>assets/img/placeholder.png">
									<?php endif; ?>
								</a>

								<div class="row">
									<h2><?php echo $product->product_name; ?></h2>
									<div class="row flx-justify">
									<?php if ( $product->on_sale == 1 ): ?>
										<span class="ammount"><?php echo $product->sale_price; ?></span>
										<span class="ammount old"><?php echo $product->price; ?></span>
									<?php else: ?>
										<span class="ammount"><?php echo $product->price; ?></span>
									<?php endif; ?>
									<form action="<?php echo URL::base( true, false ); ?>cart/add" method="POST">
										<input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
										<input type="hidden" name="product_qty" value="1">
										<input type="submit" name="add_to_cart" value="KOSÁRBA"
										       class="btn solid pink">
									</form>
									</div>
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
					<ul class="row flx-justify">
						<li class="item"><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok/?jan=1"
						                    class="gallery-link"><img
									src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-366.jpg"></a>

							<h2 class="text-center">Januar 2016</h2>
						</li>
						<li class="item"><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok/?dec=1"
						                    class="gallery-link"><img
									src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-367.jpg"></a>

							<h2 class="text-center">December 2015</h2>
						</li>
						<li class="item"><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok/?nov=1"
						                    class="gallery-link"><img
									src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-368.jpg"></a>

							<h2 class="text-center">November 2016</h2>
						</li>
						<li class="item"><a href="<?= URL::base( true, false ) ?>kutyusaink/fotok/?oct=1"
						                    class="gallery-link"><img
									src="<?= URL::base( true, false ) ?>assets/img/photos/goodiebox-img-369.jpg"></a>

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
			<h1 class="text-center"><?php echo __( 'Ez a ti véleményetek!' ); ?></h1>

			<div class="row flx-justify">
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Szilvia dog.jpg"></header>
					<div class="content">
						<p><strong>Mr. Smith</strong><br/>Mr. Smith szerint a Goodiebox: Hozzánk gyakran érkezik a
							futár, de én tudom, hogy mikor van az, amikor én kapok csomagot. Ezek az igazi ünnepnapok.
							Kimodhatatlan boldogság és családi program egyben. Állandóan nagyon izgatott leszek és alig
							várom, hogy a gazdival kibonthassam. Nagy szakértelemmel és határtalan hozzáértéssel átnézem
							a doboz tartalmát! :) Minden alkalommal kapok új játékot, sok-sok jutifalatot, finom,
							különleges vacsit vagy például kellemes ízű vitaminizét! :) Lehetne minden héten Goodiebox!
							:)
							Gazdi szerint a Goodiebox: Még hogy a kutyáknak nincsenek érzelmeik és csak a hasukkal
							foglalkoznak… elég csak ránézni Mr. Smith arcára! :) Amikor az a bizonyos csomag megérkezik,
							Ő már tudja, hogy a doboz különleges meglepetéseket rejt. Kialakult közöttünk egyfajta
							szeánsz. Együtt bontjuk a csomagot és Ő külön-külön minden elbukkanó kincsnek örül. Tudja,
							hogy ez most Róla szól, Ő kapja a plüss játékokat, a finomságokat és az egyéb hasznos
							dolgokat.
							Nagyszerűnek tartom azt, hogy sosem kaptuk többször ugyanazt a terméket!</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/imgpsh_fullsize.jpg" class="avatar">

						<div><span class="author">@Szilva,</span><span class="name">Vámosszabadi</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Nikolett dog.jpg"></header>
					<div class="content">
						<p><strong>Tora</strong><br/>Lassan egy éve minden hónapban rendelünk Goodieboxot. Soha nem
							bántam meg! Minden nap, amikor rendelek, egészen addig, amíg ki nem bontjuk a csomagot,
							izgulok, mit is kap a kis kedvencem. Amikor megérkezik a doboz, imádom, hogy a kiskutyám
							szeme ragyog,ezerrel csóvál, és ahogy kinyitom a dobozt neki, már benne is van a kis buksija
							és mindennek hihetetlenül örül. :) Mostanra családi móka lett a csomag kibontása, mindenkit
							megvárunk, és együtt élvezzük a kiskutyám boldogságát. :) A jutalomfalatok minősége abszolút
							prémium, Tora él-hal értük, és egész hónapra beoszthatóak (sőt, gyakran tovább is!), így a
							Goodiebox gazdaságos! :) A játékok meg olyan izgalmat nyújtanak, ami minden nap mosolyt csal
							az arcunkra. :) Mindenkinek csak ajánlani tudom, mi a jövőben sem maradunk ki a
							Goodiebox-mókákból, ennek a közösségnek ember - kutyusa számára is öröm és boldogság
							részesévé lenni!</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Nikolett.jpg" class="avatar">

						<div><span class="author">@Nikolett,</span><span class="name">Budapest</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img
							src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Zsófia dog.jpg">
					</header>
					<div class="content">
						<p><strong>Negro</strong><br/>Mint az egyik első és mostanáig kitartó vásárló bátran ajánlom a
							Goodieboxot mindenkinek aki szeretne meglepetést okozni a kutyusának - és saját magának is.
							Még 2014 augusztusában hallottam először a Goodieboxról, mielőtt elindult volna a
							szolgáltatás. Egyből megtetszett, hiszen a kutyám Negro akkor volt kölyök, és akkor kezdtem
							ismerkedni a kutyás világgal. Tudtam, hogy Amerikában és más országokban van olyan
							lehetőség, hogy dobozt lehet havonta rendelni kedvenceinknek, amelynek tartalma meglepetés
							prémium játékok és falatok. Így nagyon megörültem, és természetesen ahogy lehetett már
							rendeltem is az elsőt, és azóta sok dobozon túl vagyunk már. Mi vagyunk az egyik legelső
							Goodieboxosok, és még mindig kitartunk a Goodiebox mellett, hiszen folyamatosan újulnak, és
							egyre jobban tetszik Nekünk. Szóval bátran próbálja ki mindenki az egyik legegyedibb és
							legjobb kutyás szolgáltatást Magyarországon! :)</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Zsófia.jpg" class="avatar">

						<div><span class="author">@Zsófia,</span><span class="name">Szigetmonostor</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Réka dog.jpg"></header>
					<div class="content">
						<p><strong>Joey</strong><br/>A Goodiebox az egyik legjobb dolog amit valaha láttam. Nem csak a
							kiskutyámnak de nekem is meglepetést okoz, hiszen nem én válogatom ki hanem Ti leptek meg
							minket kisebb nagyobb cukiságokkal és jutalom falatokkal. A legnagyobb öröm pedig az
							számomra ha a kutyám örül. Ti Goodieboxosok vagytok a legjobbak minden téren! :) A
							dobozokban több féle játék van, ami valljuk be őszintén néha nekem jobban tetszik és én is a
							kis plüsseim közé tenném. A jutalom falatok pedig a legeslegjobb minőségűek, néha boltban se
							találok ilyen jó falatkákat. Természetesen ne feledkezzünk meg a kedvezményekről és a
							sok-sok újdonságról. Szóval megint csak ismétlem magam de Ti vagytok a legjobbak! :)Maradunk
							őszinte rajongótok!</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Réka.jpg" class="avatar">

						<div><span class="author">@Réka,</span><span class="name">Szombathely</span></div>
					</footer>
				</div>
				<div class="item feed">
					<header><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Zsanett dog.jpg"></header>
					<div class="content">
						<p><strong>Jackson és Sammie</strong><br/>Már többször is rendeltem a kutyusaimnak Goodieboxot,
							és mindig maximálisan meg voltam elégedve mindennel. A doboz tartalma mindig minőségi,
							maximálisan odafigyelve a kutyusok igényeire, betegségeire, méretére. A "kiszolgálás" nálam
							csillagos ötös, minden kérdésemre-kérésemre mindig azonnal választ és segítséget kaptam.
							Minden hónapban alig várjuk, hogy megérkezzenek a Goodieboxok, a kutyusok is már tudják,
							hogy mi fog következni, teljesen bezsonganak, ha meglátják a dobozokat. Maradunk továbbra is
							hű vásárlóitok!
						</p>
						<a href="#" class="link">Olvass tovább</a>
					</div>
					<footer><img src="<?= URL::base( true, false ) ?>assets/img/feedbacks/Zsanett.jpg" class="avatar">

						<div><span class="author">@Zsanett,</span><span class="name">Kozármisleny</span></div>
					</footer>
				</div>
			</div>
			<!-- end .row.flx-justify-->
		</div>
		<!-- end .content-box.feedback-->
	</div>
	<!-- end .row.flx-center-->
</section>

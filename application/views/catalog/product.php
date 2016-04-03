<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1><?php echo $product->product_name?></h1>
			<h2><?php echo $product->product_subtitle?></h2>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
</section>
<div class="row flx-center">
	<div class="content-box product-detail">
		<section>
			<div class="row flx-justify main">
				<div class="col-left"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-det-img-1.jpg" class="product-img">
					<div class="row flx-justify thumb-line"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-det-img-1.jpg"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-det-img-1.jpg"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-det-img-1.jpg"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-det-img-1.jpg"></div>
				</div>
				<!-- end .col-left-->
				<div class="col-center">
					<header class="flx flx-justify">
						<div class="price-holder"><span class="ammount"><?php echo $product->price; ?></span><span class="avail">Available</span></div>
						<div class="action-holder">
							<form action="<?php echo URL::base( true, false ); ?>cart/add" method="POST">
								<input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
								<input type="hidden" name="product_qty" value="1">
								<input type="submit" name="add_to_cart" value="add to cart" class="btn bold solid green">
							</form>
							<div class="row flx-justify"><a id="hold-over" href="#" class="link blue lined">Hold over</a><a id="follow-price" href="#" class="link blue lined">Folow the price</a></div>
						</div>
					</header>
					<!-- end header-->
					<div class="row meta">
						<div class="row compare-holder">
							<form action="" method="POST">
								<input id="compare" type="checkbox" name="compare">
								<label for="compare" class="comp-label">Add to compare</label>
							</form>
						</div> 
						<div class="row rate-holder"><span class="star solid"></span><span class="star solid"></span><span class="star solid"></span><span class="star solid"></span><span class="star"></span><span>(6 reviews)</span></div>
					</div>
					<!-- end .row.meta-->
					<div class="content">
						<?php echo $product->product_description?>
					</div>
					<!-- end .content-->
					<footer>
						<div class="gray-wall size-checkbox-holder">
							<h3>Available size</h3>
							<input id="size_1" type="radio" name="size" value="1">
							<label for="size_1" class="radio_green s1">Tiny</label>
							<input id="size_2" type="radio" name="size" value="1" checked>
							<label for="size_2" class="radio_green s2">Just right</label>
							<input id="size_3" type="radio" name="size" value="1">
							<label for="size_3" class="radio_green s3">Just right</label>
						</div>
					</footer>
					<!-- end footer-->
				</div>
				<!-- end .col-center-->
				<div class="col-right">
					<div class="gray-wall rad-5">
						<h2 class="text-center">Delivery</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
				<!-- end .col-right-->
			</div>
			<!-- end .row.flx-justify.main-->
		</section>
		<section>
			<div class="row share"><span>Share</span><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i></div>
			<!-- end .row.share-->
		</section>
		<section>
			<div class="row tabs"></div>
			<div id="tabs">
				<ul>
					<li> <a href="#tabs-1">About</a></li>
					<li> <a href="#tabs-2">Composition</a></li>
					<li> <a href="#tabs-3">Photo</a></li>
					<li> <a href="#tabs-4">Video</a></li>
					<li> <a href="#tabs-5">Reviews (6)</a></li>
				</ul>
				<div id="tabs-1">
					<?php echo $product->product_about; ?>
				</div>
				<div id="tabs-2">
					<?php echo $product->product_composition; ?>
				</div>
				<div id="tabs-3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod			</p>
				</div>
				<div id="tabs-4">
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div id="tabs-5">
					<div class="row flx-column comment-box">
						<div id="comment-1" class="row comment-item">
							<div class="container">
								<div class="meta"><span class="author">Vera</span>
									<div class="row rate-holder"><span class="star solid"></span><span class="star solid"></span><span class="star solid"></span><span class="star solid"></span><span class="star"></span></div>
								</div>
							</div>
							<div class="container">
								<div class="content">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div><a class="link blue lined">Read more</a><br><span rel="date" class="date">01.08.2016</span>
							</div>
						</div>
						<div id="comment-2" class="row comment-item">
							<div class="container">
								<div class="meta"><span class="author">Max</span>
									<div class="row rate-holder"><span class="star solid"></span><span class="star solid"></span><span class="star solid"></span><span class="star solid"></span><span class="star"></span></div>
								</div>
							</div>
							<div class="container">
								<div class="content">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div><a class="link blue lined">Read more</a><br><span rel="date" class="date">01.08.2016</span>
							</div>
						</div>
						<div id="comment-3" class="row comment-item">
							<div class="container">
								<div class="meta"><span class="author">Vera</span>
									<div class="row rate-holder"><span class="star solid"></span><span class="star solid"></span><span class="star solid"></span><span class="star solid"></span><span class="star"></span></div>
								</div>
							</div>
							<div class="container">
								<div class="content">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div><a class="link blue lined">Read more</a><br><span rel="date" class="date">01.08.2016</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end .row.tabs-->
		</section>
	</div>
	<!-- end .content-box.product-detail-->
</div>
<!-- end .row.flx-center
-->
<!-- Shop Carusel =================================-->
<section>
	<div class="row flx-center">
		<div class="content-box shop-carusel">
			<h1 class="text-center">Popular boxes</h1>
			<div id="carusel-1" class="carusel-container">
				<div class="left-btn"></div>
				<div class="viewport">
					<div id="carusel-line">
						<div class="item product-preview"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-img-1.jpg">
							<div class="row">
								<h2>Goodiebox Smart</h2><span class="ammount">499</span><a class="btn solid pink">BUY NOW</a>
							</div>
						</div>
						<div class="item product-preview"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-img-2.jpg">
							<div class="row">
								<h2>Goodiebox Smart</h2><span class="ammount">499</span><a class="btn solid pink">BUY NOW</a>
							</div>
						</div>
						<div class="item product-preview"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-img-3.jpg">
							<div class="row">
								<h2>Goodiebox Smart</h2><span class="ammount">499</span><a class="btn solid pink">BUY NOW</a>
							</div>
						</div>
						<div class="item product-preview"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-img-1.jpg">
							<div class="row">
								<h2>Goodiebox Smart</h2><span class="ammount">499</span><a class="btn solid pink">BUY NOW</a>
							</div>
						</div>
						<div class="item product-preview"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-img-2.jpg">
							<div class="row">
								<h2>Goodiebox Smart</h2><span class="ammount">499</span><a class="btn solid pink">BUY NOW</a>
							</div>
						</div>
						<div class="item product-preview"><img src="<?php echo URL::base( true, false ); ?>assets/img/product-img-3.jpg">
							<div class="row">
								<h2>Goodiebox Smart</h2><span class="ammount">499</span><a class="btn solid pink">BUY NOW</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end .viewport-->
				<div class="right-btn"></div>
			</div>
			<!-- end #carusel-1.carusel-container-->
		</div>
		<!-- end .content-box.shop-carusel-->
	</div>
	<!-- end .row.flx-center.bgc-pink_light-->
</section>
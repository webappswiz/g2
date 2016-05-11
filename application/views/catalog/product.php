<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1><?php echo $product->product_name ?></h1>

			<h2><?php echo $product->product_subtitle ?></h2>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
</section>
<div class="row flx-center">
	<div class="content-box product-detail">
		<section>
			<div class="row flx-justify main">

				<div class="col-left">
					<?php if ( count( $images ) > 0 ): ?>
						<?php
						$i = 0;
						foreach ( $images as $image ) {
							if ( $i == 0 ) {
								echo '<img id="top-img" src="' . URL::base( true, false ) . 'uploads/products/' . $image->img_name . '" class="product-img">';
								echo '<div class="row flx-justify thumb-line">';
							} else {
								echo '<img src="' . URL::base( true, false ) . 'uploads/products/' . $image->img_name . '">';
							}
							$i ++;
						}
						echo '</div>';
						?>
					<?php else: ?>
						<img src="<?php echo URL::base( true, false ); ?>assets/img/product-det-img-1.jpg"
						     class="product-img">
					<?php endif; ?>
				</div>
				<!-- end .col-left-->
				<div class="col-center">
					<header class="flx flx-justify">
						<div class="price-holder"><span class="ammount"><?php echo $product->price; ?></span><span
								<?php echo ( $product->status != 0 ) ? 'class="avail"' : 'class="notavail"' ?>><?php echo ( $product->status != 0 ) ? 'Available' : 'Not Available' ?></span>
						</div>
						<div class="action-holder">
							<form action="<?php echo URL::base( true, false ); ?>cart/add" method="POST">
								<input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
								<input type="hidden" name="product_qty" value="1">
								<input type="submit" name="add_to_cart" value="Kosárba"
								       class="btn bold solid green" <?php echo ( $product->status == 0 ) ? 'disabled' : ''; ?>>
							</form>
							<!--<div class="row flx-justify"><a id="hold-over" href="#" class="link blue lined">Hold over</a><a id="follow-price" href="#" class="link blue lined">Folow the price</a></div>-->
						</div>
					</header>
					<!-- end header-->
					<div class="row meta">
						<!--	<div class="row compare-holder">
								<form action="" method="POST">
									<input id="compare" type="checkbox" name="compare">
									<label for="compare" class="comp-label">Add to compare</label>
								</form>
							</div> -->
						<div class="row rate-holder">
							<?php
							$total_rating = 0;
							if ( count( $reviews ) > 0 ):
								foreach ( $reviews as $review ) {
									$total_rating += $review->rating;
								}
								reset( $reviews );
								$total_rating = abs( $total_rating / count( $reviews ) );
							endif;
							?>
							<?php
							for ( $i = 0; $i < 5; $i ++ ) {
								if ( $total_rating > 0 and $i < $total_rating ) {
									echo '<span class="star solid"></span>';
								} else {
									echo '<span class="star"></span>';
								}
							}
							?>


							</span><span>(<?php echo count( $reviews ); ?> reviews)</span></div>
					</div>
					<!-- end .row.meta-->
					<div class="content">
						<?php echo $product->product_description ?>
					</div>
					<!-- end .content-->
					<footer>
						<div class="gray-wall size-checkbox-holder">
							<h3>Méret szerint</h3>
							<?php
							if ( is_array( json_decode( $product->product_size ) ) ) {
								foreach ( json_decode( $product->product_size ) as $size ) {
									if ( $size == 1 ) {
										echo 'Icipici ';
									} elseif ( $size == 2 ) {
										echo 'Éppen jó ';
									} elseif ( $size == 3 ) {
										echo 'Óriás ';
									} else {
										echo 'Nem méretfüggő ';
									}
								}
							}
							/**/
							?>
						</div>
						<div class="gray-wall size-checkbox-holder">
							<h3>Kor szerint</h3>
							<?php
							if ( $product->product_age == 1 ) {
								echo '3 hónaposnál idősebb';
							} elseif ( $product->product_age == 2 ) {
								echo '4 hónaposnál idősebb';
							} elseif ( $product->product_age == 3 ) {
								echo '1 évesnél idősebb';
							} else {
								echo 'Nem korfüggő';
							}
							?>
						</div>
					</footer>
					<!-- end footer-->
				</div>
				<!-- end .col-center-->
				<div class="col-right">
					<div class="gray-wall rad-5">
						<h2 class="text-center">Delivery</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. </p>

						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
							commodo consequat. </p>

						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
							pariatur. Excepteur sint occaecat cupidatat non proident.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. </p>
					</div>
				</div>
				<!-- end .col-right-->
			</div>
			<!-- end .row.flx-justify.main-->
		</section>
		<section>
			<!--<div class="row share"><span>Share</span><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i></div>-->
			<!-- end .row.share-->
		</section>
		<section>
			<div class="row tabs"></div>
			<div id="tabs">
				<ul>
					<?php if ( $product->product_about <> '' ): ?>
						<li><a href="#tabs-1">Leírás</a></li>
					<?php endif; ?>
					<?php if ( $product->product_composition <> '' ): ?>
						<li><a href="#tabs-2">Összetevők</a></li>
					<?php endif; ?>
					<?php if ( count( $aimages ) > 0 ): ?>
						<li><a href="#tabs-3">Photo</a></li>
					<?php endif; ?>
					<?php if ( $product->video_link <> '' ): ?>
						<li><a href="#tabs-4">Videó</a></li>
					<?php endif; ?>
					<?php if ( $current_user || count( $reviews ) > 0 ): ?>
						<li><a href="#tabs-5">Értékelések (<?php echo count( $reviews ); ?>)</a></li>
					<?php endif; ?>
				</ul>
				<?php if ( $product->product_about <> '' ): ?>
					<div id="tabs-1">
						<?php echo $product->product_about; ?>
					</div>
				<?php endif; ?>
				<?php if ( $product->product_composition <> '' ): ?>
					<div id="tabs-2">
						<?php echo $product->product_composition; ?>
					</div>
				<?php endif; ?>
				<?php if ( count( $aimages ) > 0 ): ?>
					<div id="tabs-3">
						<?php foreach ( $aimages as $img ): ?>
							<img
								src="<?php echo URL::base( true, false ); ?>uploads/products/<?php echo $img->img_name; ?>">
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<?php if ( $product->video_link <> '' ): ?>
					<?php
					preg_match( '#.*\/(.*)$#', $product->video_link, $matches );

					?>
					<div id="tabs-4">
						<div class="video-box">
							<?php if(isset($matches[1])): ?>
							<iframe width="1140" height="640"
							        src="https://www.youtube.com/embed/<?php echo $matches[1]; ?>" frameborder="0"
							        allowfullscreen></iframe>
						<?php endif;?>
						</div>
					</div>
				<?php endif; ?>
				<?php if ( $current_user || count( $reviews ) > 0 ): ?>
					<div id="tabs-5">
						<div class="row flx-column comment-box">
							<div class="contact-form review-form">
								<?php if ( $current_user ): ?>
									<form action="" method="POST" class="row flx-justify" id="contact">
										<div class="field-holder">
											<input type="text" id="customer_firstname" name="customer_firstname"
											       placeholder="<?php echo __( 'Keresztnév*' ); ?>"
											       value="<?= ( $current_user ) ? $current_user->customer_firstname : '' ?>"
											       required
											       aria-required="true">
									<textarea id="product_review" name="product_review"
									          placeholder=""
									          required aria-required="true"></textarea>
											<select name="rating">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
											<input type="hidden" name="product_id" value="<?php echo $product->id ?>">
											<input id="submit" type="submit" value="<?php echo __( 'ELKÜLDÖM' ); ?>"
											       class="btn solid pink">
										</div>

									</form>
								<?php endif; ?>
							</div>
							<?php if ( count( $reviews ) > 0 ): ?>
								<?php foreach ( $reviews as $item ): ?>
									<div id="comment-1" class="row comment-item">
										<div class="container">
											<div class="meta"><span
													class="author"><?php echo $item->firstname; ?></span>

												<div class="row rate-holder">
													<?php
													for ( $i = 0; $i < 5; $i ++ ) {
														if ( $i < $item->rating ) {
															echo '<span class="star solid"></span>';
														} else {
															echo '<span class="star"></span>';
														}
													}
													?>
												</div>
											</div>
										</div>
										<div class="container">
											<div class="content">
												<p><?php echo $item->review; ?></p>
											</div>
											<br><span rel="date"
											          class="date"><?php echo $item->date ?></span>
										</div>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
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
			<h1 class="text-center">Népszerű termékek</h1>

			<div id="carusel-2" class="carusel-container">
				<ul id="carusel-line">
					<?php
					$products = ORM::factory( 'Products' )->where( 'status', '=', 1 )->order_by( 'sales', 'DESC' )->limit( 6 )->find_all();
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

							<div class="row flx-justify">
								<h2><?php echo $product->product_name; ?></h2>
								<?php if ( $product->on_sale == 1 ): ?>
									<span class="ammount old"><?php echo $product->price; ?></span>
									<span class="ammount"><?php echo $product->sale_price; ?></span>
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
						</li>
					<?php endforeach; ?>
				</ul>
				<!-- end .viewport-->
			</div>
			<!-- end #carusel-2.carusel-container-->
		</div>
		<!-- end .content-box.shop-carusel-->
	</div>
	<!-- end .row.flx-center.bgc-pink_light-->
</section>
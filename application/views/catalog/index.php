<!-- Sidebar toggle-->
<div class="sidebar-toggle">
	<div class="row"><i class="fa fa-filter"></i></div>
	<div class="row"><i class="fa fa-shopping-cart"></i></div>
</div>
<!-- Page Title ======================================-->
<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1 class="text-center">Shop</h1>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
</section>
<div class="row flx-center">
	<div class="content-box">
		<div class="row flx-around">
			<!-- Aside ===========================================-->
			<aside class="catalog-aside col-3">
				<!-- Fiter =======-->
				<h2>Filter</h2>

				<form class="product-filter">
					<div class="slide-filter amount"><span class="filter-block">Price:</span>

						<div id="slider-range"></div>
						<div class="row flx-justify"><span class="min-amount text-gray">20 $</span><span
								class="max-amount text-gray">899 $</span></div>
						<div class="row flx-justify">
							<input type="text" id="amount-1" readonly>
							<input type="text" id="amount-2" readonly>
						</div>
					</div>
					<div class="category-chekbox"><span class="filter-block">Product category:</span>
						<ul class="text-gray">
							<li>
								<input id="category-3" type="checkbox" name="category-3" value="3">
								<label for="category-3" class="gray-box__green-check">Toys</label>
							</li>
							<li>
								<input id="category-4" type="checkbox" name="category-4" value="4">
								<label for="category-4" class="gray-box__green-check">Snacks</label>
							</li>
							<li>
								<input id="category-5" type="checkbox" name="category-5" value="5">
								<label for="category-5" class="gray-box__green-check">Chews</label>
							</li>
						</ul>
					</div>
					<div class="slide-filter age"><span class="filter-block">Age:</span>

						<div id="slider-range-max-1"></div>
						<div class="row flx-justify"><span class="min-amount text-gray">1 month</span><span
								class="max-amount text-gray">7+ year</span></div>
						<div class="row flx-justify">
							<input type="text" id="age-1" readonly>
							<input type="text" id="age-2" readonly>
						</div>
					</div>
					<div class="slide-filter size"><span class="filter-block">Size:</span>

						<div id="slider-range-3"></div>
						<div class="row flx-justify"><span class="min-amount text-gray">1 kg</span><span
								class="max-amount text-gray">25+ kg</span></div>
						<div class="row flx-justify">
							<input type="text" id="size-1" readonly>
							<input type="text" id="size-2" readonly>
						</div>
					</div>
					<a class="btn large solid gray">SAVE</a>
				</form>

				<?php if ( isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ): ?>
					<div class="cart-box">
						<!-- Cart ========-->
						<h2>Cart</h2>
						<?php
						$total_cart_price = 0;
						foreach ( $_SESSION['cart'] as $key => $cart_item ):
							$product_info = ORM::factory( 'Products', $key );
							$subtotal     = $product_info->price * $cart_item;
							$total_cart_price += $subtotal;
							$image = ORM::factory('ProductImages')->where('product_id','=',$product_info->id)->and_where('img_type','=',1)->limit(1)->find_all();
							if(count($image)>0){
								$img_path = URL::base( true, false ).'uploads/products/'.$image[0]->img_name;
							} else {
								$img_path = URL::base( true, false ).'assets/img/product-img-4.jpg';
							}
							?>
							<div id="item-id" class="cart-item">
								<div class="row"><img
										src="<?php echo $img_path; ?>"
										class="thumbnail"><a
										href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product_info->id ?>"><?php echo $product_info->product_name; ?></a>
								</div>
								<div class="row">
									<form action="#" method="POST"><span class="btn-minus" data-productid="<?php echo $product_info->id; ?>">-</span>
										<input type="text" class="qty" name="quantity" value="<?php echo $cart_item; ?>"
										       readonly><span
											class="btn-plus" data-productid="<?php echo $product_info->id; ?>">+</span><span
											class="item-total-ammount"><?php echo $subtotal; ?></span>
									</form>
								</div>
								<div class="row"><a
										href="<?php echo URL::base( true, false ); ?>cart/delete/<?php echo $product_info->id ?>"
										class="del">Delete</a></div>
							</div>
						<?php endforeach; ?>
						<div class="cart-total">
							<h2>Total<span><?php echo $total_cart_price; ?></span></h2><a href="#"
							                                                              class="btn large solid green">order
								now</a>
						</div>
					</div>
				<?php endif; ?>

			</aside>
			<!-- Content ========================================-->
			<div class="catalog col-9">
				<div class="slider-holder">
					<div id="slider_catalog">
						<ul>
							<li><img src="<?php echo URL::base( true, false ); ?>assets/img/catalog-slider-placeholder.jpg" class="responsive"></li>
							<li><img src="<?php echo URL::base( true, false ); ?>assets/img/catalog-slider-placeholder.jpg" class="responsive"></li>
							<li><img src="<?php echo URL::base( true, false ); ?>assets/img/catalog-slider-placeholder.jpg" class="responsive"></li>
						</ul>

					</div>
				</div>
				<?php foreach ( $categories as $category ): ?>
					<div class="category-box">
						<div class="category-title"><a
								href="<?php echo URL::base( true, false ); ?>catalog/category/<?php echo $category->id ?>"><?php echo $category->cat_name; ?></><a
								href="#">SEE MORE</a></div>
						<div class="product-line">
							<?php
							$products = $category->products->order_by( 'id', 'DESC' )->limit( 3 )->find_all();
							if ( count( $products ) > 0 ):
								?>
								<ul>
									<?php foreach ( $products as $product ): ?>
										<?php
										$img_path = '';
										$image = ORM::factory('ProductImages')->where('product_id','=',$product->id)->and_where('img_type','=',1)->limit(1)->find_all();
										if(count($image)>0){
											$img_path = URL::base( true, false ).'uploads/products/'.$image[0]->img_name;
										} else {
											$img_path = URL::base( true, false ).'assets/img/product-img-4.jpg';
										}
										?>
										<li>
											<div class="item product-preview <?php echo ($product->on_sale==1)?'label-sale ':''; echo ($product->new==1)?'label-new ':''; ?>">
												<img
														src="<?php echo $img_path; ?>">

												<div class="row">
													<h2>
														<a href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product->id ?>"><?php echo $product->product_name ?></a>
													</h2><span
														class="ammount"><?php echo $product->price ?></span>

													<a href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product->id ?>"
													   class="btn solid pink">BUY NOW</a>

												</div>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php else: ?>
								<h3>No products in this category yet</h3>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
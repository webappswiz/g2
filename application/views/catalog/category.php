<!-- Page Title ======================================-->
<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1 class="text-center">Goodieshop</h1>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
</section>
<div class="row flx-center">
	<div class="content-box">
		<div class="row breadcrumbs">
			<a href="<?php echo URL::base( true, false ); ?>">Főoldal</a> -> <a href="<?php echo URL::base( true, false ); ?>catalog">Goodieshop</a> -> <a href="<?php echo URL::base( true, false ); ?>catalog/category/<?php echo $category->id?>"><?php echo $category->cat_name?></a>
		</div>
		<div class="row">
			<!-- Aside ===========================================-->
			<aside class="catalog-aside col-3">
				<div class="slide-filter amount"><span class="filter-block">Kategória:</span>
					<?php
					foreach($categories as $cat){
						$prod_counts = ORM::factory('Products')->where('product_cat','=',$cat->id)->count_all();
						echo '<p><a href="'.URL::base( true, false ).'catalog/category/'.$cat->id.'">'.$cat->cat_name.' ('.$prod_counts.')</a></p>';
					}
					?>
				</div>
				<!-- Fiter =======-->
				<h2>Keresés szűkítése</h2>

				<form class="product-filter">

					<div class="slide-filter amount"><span class="filter-block">Ár:</span>

						<div id="slider-range"></div>
						<div class="row flx-justify"><span class="min-amount text-gray">20 Ft</span><span
									class="max-amount text-gray">5000 Ft</span></div>
						<div class="row flx-justify">
							<input type="text" id="amount-1" name="price_from" readonly>
							<input type="text" id="amount-2" name="price_to" readonly>
						</div>
					</div>
					<div class="category-chekbox"><span class="filter-block">Kor:</span>
						<ul class="text-gray">
							<li>
								<input id="age-1" type="checkbox" name="age[]" value="1">
								<label for="age-1" class="gray-box__green-check">3+ Hónap</label>
							</li>
							<li>
								<input id="age-2" type="checkbox" name="age[]" value="2">
								<label for="age-2" class="gray-box__green-check">4+ Hónap</label>
							</li>
							<li>
								<input id="age-3" type="checkbox" name="age[]" value="3">
								<label for="age-3" class="gray-box__green-check">1+ Év</label>
							</li>
							<li>
								<input id="age-4" type="checkbox" name="age[]" value="4">
								<label for="age-4" class="gray-box__green-check">Nem korfüggő</label>
							</li>
						</ul>
					</div>
					<!--<div class="slide-filter size"><span class="filter-block">Size:</span>

						<div id="slider-range-3"></div>
						<div class="row flx-justify"><span class="min-amount text-gray">1 kg</span><span
									class="max-amount text-gray">25+ kg</span></div>
						<div class="row flx-justify">
							<input type="text" id="size-1" name="size_from" readonly>
							<input type="text" id="size-2" name="size_to"  readonly>
						</div>
					</div> -->
					<input type="submit" class="btn large solid gray" value="KERESÉS">
				</form>


				<?php if ( isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ): ?>
					<div class="cart-box">
						<!-- Cart ========-->
						<h2>Kosár</h2>
						<?php
						$total_cart_price = 0;
						foreach ( $_SESSION['cart'] as $key => $cart_item ):

							$product_info = ORM::factory( 'Products', $key );
							if($product_info->on_sale==1){
								$subtotal     = $product_info->sale_price * $cart_item;
							} else {
								$subtotal     = $product_info->price * $cart_item;
							}
							$img_path = '';
							$image = ORM::factory('ProductImages')->where('product_id','=',$product_info->id)->and_where('img_type','=',1)->limit(1)->find_all();
							if(count($image)>0){
								$img_path = URL::base( true, false ).'uploads/products/'.$image[0]->img_name;
							} else {
								$img_path = URL::base( true, false ).'assets/img/product-img-4.jpg';
							}
							$total_cart_price += $subtotal;
							?>
							<div id="item-id" class="cart-item">
								<div class="row">
									<img
										src="<?php echo $img_path; ?>"
										class="thumbnail"><a href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product_info->id ?>"><?php echo $product_info->product_name; ?></a>
								</div>
								<div class="row">
									<form action="#" method="POST"><span class="btn-minus" data-productid="<?php echo $product_info->id; ?>">-</span>
										<input type="text" class="qty" name="quantity" value="<?php echo $cart_item; ?>"
										       readonly><span
											class="btn-plus" data-productid="<?php echo $product_info->id; ?>">+</span><span
											class="item-total-ammount"><?php echo $subtotal; ?></span>
									</form>
								</div>
								<div class="row"><a href="<?php echo URL::base( true, false ); ?>cart/delete/<?php echo $product_info->id ?>" class="del">Delete</a></div>
							</div>
						<?php endforeach; ?>
						<div class="cart-total">
							<h2>Total<span><?php echo $total_cart_price; ?> Ft</span></h2><a href="#"
							                                                              class="btn large solid green">KOSÁRBA</a>
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
					</ul>
				</div>
				</div>
				<div class="category-box">
					<div class="category-title"><?php echo $category->cat_name; ?></div>
					<div class="product-line">
						<?php
						$products =$category->products;
						if(isset($_REQUEST['price_from']) && isset($_REQUEST['price_to'])){
							$products->where('price','>=',(int)$_REQUEST['price_from'])
							         ->and_where('price','<=',(int)$_REQUEST['price_to']);
						}
						if(isset($_REQUEST['age']) and count($_REQUEST['age'])>0){
							$products->where('product_age','IN',array_values($_REQUEST['age']));
						}
						if(isset($_REQUEST['size_from']) && isset($_REQUEST['size_to'])){
							$sfrom = $_REQUEST['size_from'];
							$sto = $_REQUEST['size_to'];
							$size = array();
							$size[] = 4;
							if($sto<=9){
								$size[] = 1;
							}
							if($sto>9 && $sto<24){
								$size[] = 2;
							}
							if($sto>=24){
								$size[] = 3;
							}
							$products->and_where('product_size','IN',$size);
						}
						$prods = $products->order_by( 'id', 'DESC' )->find_all();
						if ( count( $prods ) > 0 ):
							?>
							<ul>
								<?php foreach ( $prods as $product ): ?>
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

											<a class="preview-link" href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product->id ?>"><img
													src="<?php echo $img_path; ?>"></a>


											<div class="row flx-justify">
												<h2>
													<a href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product->id ?>"><?php echo $product->product_name ?></a>
												</h2>
												<div class="row flx-justify">
												<?php if ($product->on_sale==1): ?>
													<span class="ammount old"><?php echo $product->price; ?></span>
													<span class="ammount"><?php echo $product->sale_price; ?></span>
												<?php else: ?>
													<span class="ammount"><?php echo $product->price; ?></span>
												<?php endif;?>

												<form action="<?php echo URL::base( true, false ); ?>cart/add" method="POST">
													<input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
													<input type="hidden" name="product_qty" value="1">
													<input type="submit" name="add_to_cart" value="KOSÁRBA"
													       class="btn solid pink">
												</form>
													</div>
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
			</div>
		</div>
	</div>
</div>
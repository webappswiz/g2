<!-- Page Title ======================================-->
<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1 class="text-center">Kosár</h1>
		</div>
		<!-- end .content-box-->
	</div>
	<!-- end .row.flx-center-->
</section>
<div class="row flx-center">
	<div class="content-box">
		<?php if ( isset( $_SESSION['cart'] ) && count( $_SESSION['cart'] ) > 0 ): ?>
			<!-- Cart ========-->
			<div class="cart-box cart-page">
				<div id="header" class="row flx-center flx-justify cart-item">
					<div class="flx flx-center left-box">
						<h3>Termék						</h3>
					</div>
					<!-- end .flx.flx-center.left-box-->
					<div class="flx flx-justify left-box">
						<h3 class="text-center">Ár</h3>
						<h3 class="text-center">Mennyiség</h3>
						<h3 class="text-center">Összeg</h3>
					</div>
					<!-- end .flx.flx-center.left-box-->
				</div>
				<?php
				$total_cart_price = 0;
				$weight = 0;
				foreach ( $_SESSION['cart'] as $id => $qty ):
					$img_path = '';
					$product_info = ORM::factory( 'Products', $id );
					if($product_info->on_sale==1){
						$subtotal     = $product_info->sale_price * $qty;
					} else {
						$subtotal     = $product_info->price * $qty;
					}
					$weight += $product_info->weight;
					$total_cart_price += $subtotal;
					$image = ORM::factory('ProductImages')->where('product_id','=',$product_info->id)->and_where('img_type','=',1)->limit(1)->find_all();
					if(count($image)>0){
						$img_path = URL::base( true, false ).'uploads/products/'.$image[0]->img_name;
					} else {
						$img_path = URL::base( true, false ).'assets/img/product-img-4.jpg';
					}
					?>
					<div id="item-id-1" class="row flx-center flx-justify cart-item">
						<div class="flx flx-center left-box">
							<img src="<?php echo $img_path; ?>"
						                                          class="thumbnail cart-page">
							<a href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product_info->id ?>"><?php echo $product_info->product_name; ?></a>
						</div>
						<!-- end .flx.flx-center.left-box-->
						<div class="flx flx-center left-box">
							<form action="#" method="POST"><span class="item-total-ammount"><?php echo ($product_info->on_sale==1)?$product_info->sale_price:$product_info->price; ?></span><span
									class="btn-minus" data-productid="<?php echo $product_info->id; ?>">-</span>
								<input type="text" name="quantity" class="qty" value="<?php echo $qty; ?>" readonly><span
									class="btn-plus" data-productid="<?php echo $product_info->id; ?>">+</span><span class="item-total-ammount summ"><?php echo $subtotal;?></span>
							</form>
							<a href="<?php echo URL::base( true, false ); ?>cart/delete/<?php echo $product_info->id ?>" class="del"><i class="fa fa-times"></i></a>
						</div>
						<!-- end .flx.flx-center.left-box-->
					</div>
				<?php endforeach; ?>
				<div class="row flx-end cart-total">
					<div class="container">
						<h2 class="text-right">Részösszeg<span><?php echo $total_cart_price.' Ft';?></span></h2>
						<h2 class="text-right">Házhozszállítás<span><?php echo ($total_cart_price>=8000)?__('Ingyenes'):$shipping.' Ft';?></span></h2>
						<h2 class="text-right">Összeg<span><?php echo ($total_cart_price>=8000)?$total_cart_price:$total_cart_price + $shipping;?> Ft</span></h2>
						<form action="/cart/checkout" method="post">
							<input type="submit" name="order_now" value="TOVÁBB A PÉNZTÁRHOZ" class="btn large solid pink">
						</form>
					</div>
				</div>
				<!-- end .row.flx-end.cart-total-->
			</div>
		<?php else: ?>
			<h2 class="text-center">A kosarad üres! <a style="text-decoration: underline" href="<?php echo URL::base( true, false ); ?>catalog">Kattints ide</a> ha shoppingolni szeretnél!</h2>
		<?php endif; ?>
		<!-- end .cart-box.cart-page-->
	</div>
	<!-- .content-box-->
</div>
<!-- end .row.flx-center
-->
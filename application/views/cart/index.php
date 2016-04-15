<!-- Page Title ======================================-->
<section>
	<div class="row flx-center">
		<div class="content-box page-title">
			<h1 class="text-center">My Cart</h1>
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
				<?php
				$total_cart_price = 0;
				foreach ( $_SESSION['cart'] as $id => $qty ):
					$product_info = ORM::factory( 'Products', $id );
					$subtotal     = $product_info->price * $qty;
					$total_cart_price += $subtotal;
					?>
					<div id="item-id-1" class="row flx-center flx-justify cart-item">
						<div class="flx flx-center left-box">
							<img src="<?php echo URL::base( true, false ); ?>assets/img/filter-cart-thumb-1.jpg"
						                                          class="thumbnail cart-page">
							<a href="<?php echo URL::base( true, false ); ?>catalog/product/<?php echo $product_info->id ?>"><?php echo $product_info->product_name; ?></a>
						</div>
						<!-- end .flx.flx-center.left-box-->
						<div class="flx flx-center left-box">
							<form action="#" method="POST"><span class="item-total-ammount"><?php echo $product_info->price; ?></span><span
									class="btn-minus">-</span>
								<input type="text" name="quantity" value="<?php echo $qty; ?>" readonly><span
									class="btn-plus">+</span><span class="item-total-ammount summ"><?php echo $subtotal;?></span>
							</form>
							<a href="<?php echo URL::base( true, false ); ?>cart/delete/<?php echo $product_info->id ?>" class="del"><i class="fa fa-times"></i></a>
						</div>
						<!-- end .flx.flx-center.left-box-->
					</div>
				<?php endforeach; ?>
				<div class="row flx-end cart-total">
					<div class="container">
						<h2 class="text-right">Total<span><?php echo $total_cart_price;?></span></h2>
						<form action="/cart/checkout" method="post">
							<input type="submit" name="order_now" value="order now" class="btn large solid pink">
						</form>
						<a href="#" class="btn large solid pink">order
							now</a>
					</div>
				</div>
				<!-- end .row.flx-end.cart-total-->
			</div>
		<?php else: ?>
			<h2 class="text-center">Cart is empty</h2>
			<form action="/cart/checkout" method="post">
				<input type="submit" name="order_now" value="order now" class="btn large solid pink">
			</form>
		<?php endif; ?>
		<!-- end .cart-box.cart-page-->
	</div>
	<!-- .content-box-->
</div>
<!-- end .row.flx-center
-->
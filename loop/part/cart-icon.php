<div class="shopping-cart-Block">
  <div class="woocommerce-cart-icon">
    <a class="cart-contents" href="#" title="<?php echo esc_html__( 'View your shopping cart', 'cairo' ); ?>">
      <span class="total-product"><?php echo WC()->cart->cart_contents_count; ?></span> <i class="fa fa-shopping-basket"></i>
    </a>
  </div><!-- woocommerce-cart -->
	<div class="shop-cart-header">
		<?php if ( sizeof( WC()->cart->get_cart() ) == 0 ): ?>
			<div class="Link-Cart">
				<h5><?php esc_html_e('Cart is empty', 'cairo'); ?></h5>
			</div>
		<?php else: ?>
			<ul>
				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ):
					$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ):
						?>

						<li>
              <a href="<?php echo esc_url( wc_get_cart_remove_url( $cart_item_key ) ) ?>" class="remove"><span class="fa fa-close"></span></a>
							<a class="shop-thumbnail-img" href="<?php echo esc_url($_product->get_permalink()); ?>"><?php echo get_the_post_thumbnail( $product_id, 'shop_thumbnail' ); ?></a>
              <div class="cart-content">
                <h3>
  								<?php
  								if ( ! $_product->is_visible() )
  									echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
  								else
  									echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="title"> %sx %s</a>', esc_url($_product->get_permalink()), $cart_item['quantity'], $_product->get_title() ), $cart_item, $cart_item_key );
  								?>
  							</h3>
                <p><?php esc_html_e('Price : ', 'cairo'); ?><?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );?></p>
  							<p><?php esc_html_e('Quantity : ', 'cairo'); ?><?php echo esc_html($cart_item['quantity']); ?> </p>

  							<?php // Meta data
  							echo wc_get_formatted_cart_item_data( $cart_item ); ?>
              </div>
						</li>
						<?php
					endif; //if
				endforeach; //foreach
				?>
			</ul>

			<div class="Subtotal-block">
				<h2><?php esc_html_e('Subtotal:', 'cairo'); ?> <?php echo WC()->cart->get_cart_total(); ?></h2>
			</div>
			<div class="Link-Cart">
				<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="btn Links-Cart"><?php esc_html_e('View Cart', 'cairo'); ?></a>
				<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn Links-Cart"><?php esc_html_e('Checkout', 'cairo'); ?></a>
			</div>
		<?php endif; ?>
	</div>
</div>

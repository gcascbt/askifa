<?php
/**
 * Product loop sale flash
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

global $post, $product;

?>

<?php if ($product->is_on_sale()) { ?>

	<?php echo apply_filters(
		'woocommerce_sale_flash',
		'<div class="product-card-sale-label-wrapper">
			<div class="product-label _sale _vertical">'
				. esc_html__('Sale!', 'cairo') .
			'</div>
		</div>',
		$post,
		$product
	); ?>

<?php } ?>

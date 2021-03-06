<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

global $product;

?>

<div
	class="product-page-price price"
	itemprop="offers"
	itemscope
	itemtype="http://schema.org/Offer"
>

	<?php echo wp_kses_post($product->get_price_html()); ?>

	<meta itemprop="price" content="<?php echo esc_attr($product->get_display_price()); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo esc_attr(get_woocommerce_currency()); ?>" />
	<link
		itemprop="availability"
		href="http://schema.org/<?php echo ($product->is_in_stock() ? 'InStock' : 'OutOfStock'); ?>"
	/>

</div>

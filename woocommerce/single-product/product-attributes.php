<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

$has_row    = false;
$alt        = 1;
$attributes = $product->get_attributes();

ob_start();

?>

<dl class="product-page-attributes shop_attributes">

	<?php if ($product->enable_dimensions_display()) { ?>

		<?php if ($product->has_weight()) { $has_row = true; ?>

			<dt class="product-page-attributes-title">
				<?php esc_html_e('Weight', 'cairo') ?>
			</dt>

			<dd class="product-page-attributes-desc product_weight">
				<?php echo wc_format_localized_decimal($product->get_weight()) . ' ' . esc_attr(get_option('woocommerce_weight_unit')); ?>
			</dd>

		<?php } ?>

		<?php if ($product->has_dimensions()) { $has_row = true; ?>

			<dt class="product-page-attributes-title">
				<?php esc_html_e('Dimensions', 'cairo') ?>
			</dt>

			<dd class="product-page-attributes-desc product_dimensions">
				<?php echo wp_kses_post($product->get_dimensions()); ?>
			</dd>

		<?php } ?>

	<?php } ?>

	<?php foreach ($attributes as $attribute) {
		if (empty($attribute['is_visible']) || ($attribute['is_taxonomy'] && ! taxonomy_exists($attribute['name']))) {
			continue;
		} else {
			$has_row = true;
		}
		?>

		<dt class="product-page-attributes-title">
			<?php echo wc_attribute_label($attribute['name']); ?>
		</dt>

		<dd class="product-page-attributes-desc">
			<?php
			if ($attribute['is_taxonomy']) {
				$values = wc_get_product_terms($product->id, $attribute['name'], array('fields' => 'names'));
				echo apply_filters('woocommerce_attribute', wpautop(wptexturize(implode(', ', $values))), $attribute, $values);
			} else {
				// Convert pipes to commas and display values
				$values = array_map('trim', explode(WC_DELIMITER, $attribute['value']));
				echo apply_filters('woocommerce_attribute', wpautop(wptexturize(implode(', ', $values))), $attribute, $values);
			}
			?>
		</dd>

	<?php } ?>

</dl>

<?php
if ($has_row) {
	echo ob_get_clean();
} else {
	ob_end_clean();
}

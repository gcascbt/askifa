<?php
/**
 * Checkout shipping information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-shipping.php.
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

?>

<div class="checkout-shipping">

	<?php if (true === WC()->cart->needs_shipping_address()) { ?>

		<input
			id="ship-to-different-address-checkbox"
			class="input-checkbox"
			type="checkbox"
			name="ship_to_different_address"
			value="1"
			<?php checked(apply_filters('woocommerce_ship_to_different_address_checked', 'shipping' === get_option('woocommerce_ship_to_destination') ? 1 : 0), 1); ?>
		>
		<label for="ship-to-different-address-checkbox" class="checkbox checkout-shipping-label">
			<?php esc_html_e('Ship to a different address?', 'cairo'); ?>
		</label>

		<div class="checkout-shipping-inner">
			<?php do_action('woocommerce_before_checkout_shipping_form', $checkout); ?>
			<?php foreach ($checkout->checkout_fields['shipping'] as $key => $field) { ?>
				<?php woocommerce_form_field($key, $field, $checkout->get_value($key)); ?>
			<?php } ?>
			<?php do_action('woocommerce_after_checkout_shipping_form', $checkout); ?>
		</div>

	<?php } ?>

	<?php do_action('woocommerce_before_order_notes', $checkout); ?>

	<?php if (apply_filters('woocommerce_enable_order_notes_field', get_option('woocommerce_enable_order_comments', 'yes') === 'yes')) { ?>

		<?php if (!WC()->cart->needs_shipping() || wc_ship_to_billing_address_only()) { ?>
			<h3 class="checkout-shipping-title"><?php esc_html_e('Additional Information', 'cairo'); ?></h3>
		<?php } ?>

		<?php foreach ($checkout->checkout_fields['order'] as $key => $field) { ?>
			<?php woocommerce_form_field($key, $field, $checkout->get_value($key)); ?>
		<?php } ?>

	<?php } ?>

	<?php do_action('woocommerce_after_order_notes', $checkout); ?>

</div>
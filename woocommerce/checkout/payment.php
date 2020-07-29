<?php
/**
 * Checkout Payment Section
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!is_ajax()) {
	do_action('woocommerce_review_order_before_payment');
}

?>

<div id="payment" class="woocommerce-checkout-payment">

	<?php if (WC()->cart->needs_payment()) { ?>
		<ul class="wc_payment_methods payment_methods methods payment-methods">
			<?php
			if (!empty($available_gateways)) {
				foreach ($available_gateways as $gateway) {
					wc_get_template('checkout/payment-method.php', array('gateway' => $gateway));
				}
			} else {
				echo '<li class="payment-methods-item">' . apply_filters('woocommerce_no_available_payment_methods_message', WC()->customer->get_country() ? esc_html__('Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'cairo') : esc_html__('Please fill in your details above to see available payment methods.', 'cairo')) . '</li>';
			}
			?>
		</ul>
	<?php } ?>

	<div class="form-row place-order">
		<noscript>
			<?php esc_html_e('Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'cairo'); ?>
			<br><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e('Update totals', 'cairo'); ?>">
		</noscript>

		<?php wc_get_template('checkout/terms.php'); ?>

		<?php do_action('woocommerce_review_order_before_submit'); ?>

		<?php echo apply_filters('woocommerce_order_button_html',
			'<input
				type="submit"
				class="full-width button alt"
				name="woocommerce_checkout_place_order"
				id="place_order"
				value="' . esc_attr($order_button_text) . '"
				data-value="' . esc_attr($order_button_text) . '"
			>'
		); ?>

		<?php do_action('woocommerce_review_order_after_submit'); ?>

		<?php wp_nonce_field('woocommerce-process_checkout'); ?>
	</div>

</div>

<?php
if (!is_ajax()) {
	do_action('woocommerce_review_order_after_payment');
}

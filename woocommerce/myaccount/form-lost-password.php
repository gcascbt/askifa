<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
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

wc_print_notices(); ?>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12 form-wc">

		<h1 class="text-center"><?php esc_html_e('Reset Password', 'cairo'); ?></h1>

		<form method="post" class="woocommerce-ResetPassword lost_reset_password wc-form">

			<p class="wc-lead text-center"><?php echo apply_filters('woocommerce_lost_password_message', esc_html__('Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'cairo')); ?></p>

			<p class="woocommerce-FormRow woocommerce-FormRow--first form-row">
				<label for="user_login">
					<?php esc_html_e('Username or email', 'cairo'); ?>
					<abbr class="required" title="required">*</abbr>
				</label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" required>
			</p>

			<?php do_action('woocommerce_lostpassword_form'); ?>

			<p class="woocommerce-FormRow form-row">
				<input type="hidden" name="wc_reset_password" value="true">
				<input type="submit" class="full-width" value="<?php esc_attr_e('Reset Password', 'cairo'); ?>">
			</p>

			<?php wp_nonce_field('lost_password'); ?>

		</form>

	</div>
</div>

<?php
/**
 * The template to display the reviewers star rating in reviews
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/review-rating.php.
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

global $comment;
$rating = intval(get_comment_meta($comment->comment_ID, 'rating', true));

if ($rating && get_option('woocommerce_enable_review_rating') === 'yes') { ?>

	<div class="theme-comment-rating">
		<div
			class="product-rating"
			itemprop="reviewRating"
			itemscope
			itemtype="http://schema.org/Rating"
			title="<?php echo sprintf(esc_attr__('Rated %d out of 5', 'cairo'), esc_attr($rating)) ?>"
		>
			<div class="product-rating-stars">
				<span style="width:<?php echo (esc_attr($rating) / 5) * 100; ?>%">
					<strong itemprop="ratingValue"><?php echo esc_attr($rating); ?></strong>
					<?php esc_attr_e('out of 5', 'cairo'); ?>
				</span>
			</div>
		</div>
	</div>

<?php }
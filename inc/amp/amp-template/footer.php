<footer class="amp-wp-footer">
	<div class="amp-wp-footer-inner">
		<a href="#top" class="back-to-top"><?php esc_html_e( 'Back to top', 'cairo' ); ?></a>

		<p class="copyright"> <?php echo wp_kses_post(ot_get_option('ampcopyrgiht'))?> </p>

		<div class="amp-wp-social-footer Social-header">
			<?php get_template_part( 'loop/part/social-icon' ); ?>
		</div>
	</div>
</footer>

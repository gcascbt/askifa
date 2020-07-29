<?php
	$footer_dark_light 	= ot_get_option ('footer_dark_light', 'dark');
	$footer_style 			= ot_get_option('footer_style', 'style1');
?>

<footer class="main-footer <?php echo esc_attr($footer_dark_light);?> footer-<?php echo esc_attr($footer_style);?>">
	<div class="cairo_footer_instagram">
	<?php dynamic_sidebar("cairo_footer_instagram"); ?>
	</div>
	<div class="bottom_footer">
		<div class="container">
			<div class="row">
				<div class="footer-nav">
					<div class="col-md-12 col-sm-12 com-xs-12">
						<div class="Social-footer text-center">
							<?php get_template_part( 'loop/part/social-icon' ); ?>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 com-xs-12">
						<div class="copyright text-center">
							<?php if (! ot_get_option('footercopyrgiht')): ?>
								<p><?php echo date('Y')  ?> ALL RIGHT RESERVED - CAIRO NEWS WORDPRESS THEME by CODEPAGES</p>
							<?php else : ?>
								<p><?php echo wp_kses_post(ot_get_option('footercopyrgiht'))?></p>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

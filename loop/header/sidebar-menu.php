<?php
$mobile_logo 	= ot_get_option('mobile_logo_hide_show', 'on');

?>
<div class="sidebar-navigation">
	<div class="sidebar-scroll scrollbar-macosx">

		<div class="close-sidebar-button">
			<a href="#" class="close-btn"><span>Close Sidebar</span><i class="fa fa-close"></i></a>
		</div><!-- close-sidebar-button -->

		<div class="sidebar-logo">
			<div class="brand-logo">
				<?php if ($mobile_logo == 'on') : ?>
				<?php if (ot_get_option('sidebar-logo')) { $logo = ot_get_option('sidebar-logo'); } else { $logo = CAIRO_URL. 'assets/images/logo/cairo-logo.png'; } ?>
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>"/>
				</a>
				<?php else: endif;?>
			</div>
		</div>


		<nav class="navbar">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'container' => false, 'menu_class' => 'mobile-menu') ); ?>
		</nav><!-- navbar -->
		<div class="footer-sidebar">
			<div class="sidebar-social">
				<?php get_template_part( 'loop/part/social-icon' ); ?>
			</div><!-- sidebar-social -->

			<div class="copyright text-center">
				<?php if (! ot_get_option('footercopyrgiht')): ?>
				<p>2018 ALL RIGHT RESERVED - CAIRO NEWS WORDPRESS THEME by CODEPAGES</p>
				<?php else : ?>
					<p><?php echo wp_kses_post(ot_get_option('footercopyrgiht'))?></p>
				<?php endif ?>
			</div><!-- copyright -->
		</div>
	</div><!-- sidebar-scroll -->
</div><!-- sidebar-navigation -->

<div class="sidebar-overlay close-btn"></div>

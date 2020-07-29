<amp-sidebar id="sidebar" layout="nodisplay" side="left" class="">
	<div class="sidebar-navigation">
		<!-- Search Form -->
		<div class="amp_search_wrapper">
		    <?php get_search_form(); ?>
		</div>
		<nav class="navbar">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'container' => false, 'menu_class' => 'mobile-menu') ); ?>
		</nav><!-- navbar -->
		<!-- Social Share -->
		<div class="Social-header">
			<?php get_template_part( 'loop/part/social-icon' ); ?>
		</div>
  </div>
</amp-sidebar>

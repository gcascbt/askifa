<?php
$header_dark_light 	= ot_get_option('header_dark_light', 'light');
$search_logo 				= ot_get_option('search_area_logo_hide_show', 'on');
$login_icon 				= ot_get_option('login_icon_hide_show', 'on');
?>

<!-- Start Section Header style3 -->
<header class="header-blog header-style3 header-<?php echo esc_attr($header_dark_light); ?>">
	<?php
	get_template_part( 'loop/header/mobile-header' );
	get_template_part( 'loop/header/sticky-menu' );
	?>
	<div class="Navbar-Header visible-lg visible-md">
		<div class="header-main header-logo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="header-main-buttons">
							<?php if (ot_get_option('logo')) { $logo = ot_get_option('logo'); } else { $logo = CAIRO_URL. 'assets/images/logo/cairo-logo.png'; } ?>
							<div class="logo-header">
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>"/>
								</a>
							</div>
						</div>
					</div>
					<?php if(ot_get_option('advertising_header')=='on'):?>
						<div class="header_adv">
							<!-- Start Navbar Ads -->
							<div class="header-banner-adv text-center">
							<?php $headerad = ot_get_option('header_banner');
								echo do_shortcode($headerad);
							?>
							</div>
							<!-- End Navbar Ads -->
						</div>
					<?php else:
					endif;?>
					<div class="header-menu">
						<div class="main-menu">
							<div id="headermenu" class="Menu-Header top-menu">
								<?php
									wp_nav_menu( array(
										'theme_location'  	=> 'primary',
										'container'       	=> false,
										'menu_id'       	=> 'navmenu',
										'menu_class'    	=> 'flexnav one-page',
										'items_wrap' 		=> '<ul data-breakpoint="992" id="%1$s" class="flexnav one-page %2$s">%3$s</ul>',
										'walker' => new cairo_navigation_walker(), 'fallback_cb' => 'menu_fallback',
									) );
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Logo -->
	</div>
	<!-- Start Search Area Form -->
	<div class="Block-Search-header Search-header1">
		<button type="button" class="close-search"></button>
		<div class="form-container">
	    <div class="container">
	      <div class="row">
					<?php if ($search_logo == 'on') : ?>
					<div class="col-lg-8 col-lg-offset-2 col-xl-6 col-xl-offset-3 text-center logo-search">
						<?php if (ot_get_option('logo')) { $logo = ot_get_option('search-logo'); } else { $logo = CAIRO_URL. 'assets/images/logo/cairo-logo.png'; } ?>
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>"/>
						</a>
					</div>
					<?php else: endif;?>
	        <div class="col-lg-8 col-lg-offset-2 col-xl-6 col-xl-offset-3">
	          <?php get_search_form(); ?>
	          <p><?php echo esc_html__('Input your search keywords and press Enter.', 'cairo'); ?></p>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- End Search Area Icon-->
	<!-- Start Login Area Icon-->
	<div class="login-popup-header">
		<button type="button" class="close-login"></button>
		<div class="form-container">
			<?php get_template_part( 'loop/part/login-popup' ); ?>
		</div>
	</div>
	<!-- End Login Area Icon-->
</header>
<!-- End Section Header style3 -->

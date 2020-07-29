<?php
//Cairo Pagination
add_filter( 'amp_post_template_file', 'amp_set_custom_template', 10, 3 );
function amp_set_custom_template( $file, $type, $post ){

	if ( 'header-bar' === $type || 'featured-image' === $type || 'sidebar-menu' === $type || 'single' === $type || 'footer' === $type || 'style' === $type ) {
		$file = CAIRO_DIR . '/inc/amp/amp-template/'. $type .'.php';
	}

	return $file;
}

add_filter( 'amp_post_template_head','add_script' );
function add_script( $amp_template ) {


  echo '<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>';

  echo '<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>';

}

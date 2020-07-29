<?php
// Get content width
$content_max_width       	= absint( $this->get( 'content_max_width' ) );

// Get template colors
$theme_color             	= ot_get_option('amp_background_color', '#FFF');
$text_color              	= ot_get_option('amp_title_color', '#212121');
$muted_text_color        	= ot_get_option('amp_postmeta_color', 'style1');
$border_color            	= ot_get_option('amp_background_color', '#FFF');
$link_color              	= ot_get_option('amp_links_color', 'style1');
$header_background_color 	= ot_get_option('amp_header_background_color', '#FFF');
$header_text_color        = ot_get_option('amp_header_text_color', '#212121');

$amp_logo            			= ot_get_option('amp_logo', '#FFF');

$footer_background_color 	= ot_get_option('amp_footer_background_color', 'style1');

?>
/* Generic WP styling */

a, a:visited {
    text-decoration: none;
}

.alignright {
	float: right;
}

.alignleft {
	float: left;
}

.aligncenter {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.amp-wp-enforced-sizes {
	/** Our sizes fallback is 100vw, and we have a padding on the container; the max-width here prevents the element from overflowing. **/
	max-width: 100%;
	margin: 0 auto;
}

.amp-wp-unknown-size img {
	/** Worst case scenario when we can't figure out dimensions for an image. **/
	/** Force the image into a box of fixed dimensions and use object-fit to scale. **/
	object-fit: contain;
}

/* Template Styles */

.amp-wp-content,
.amp-wp-title-bar div {
	<?php if ( $content_max_width > 0 ) : ?>
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
	<?php endif; ?>
}

html {
	background: <?php echo sanitize_hex_color( $theme_color ); ?>;
}

body {
	background: <?php echo sanitize_hex_color( $theme_color ); ?>;
	color: <?php echo sanitize_hex_color( $text_color ); ?>;
	font-family: 'Merriweather', 'Times New Roman', Times, Serif;
	font-weight: 300;
	line-height: 1.75em;
}

p,
ol,
ul,
figure {
	margin: 0 0 1em;
	padding: 0;
}

a,
a:visited {
	color: <?php echo sanitize_hex_color( $link_color ); ?>;
}

a:hover,
a:active,
a:focus {
	color: <?php echo sanitize_hex_color( $text_color ); ?>;
}

/* Quotes */

blockquote {
	color: <?php echo sanitize_hex_color( $text_color ); ?>;
	background: rgba(127,127,127,.125);
	border-left: 2px solid <?php echo sanitize_hex_color( $link_color ); ?>;
	margin: 8px 0 24px 0;
	padding: 16px;
}

blockquote p:last-child {
	margin-bottom: 0;
}

/* UI Fonts */

.amp-wp-meta,
.amp-wp-header div,
.amp-wp-title,
.wp-caption-text,
.amp-wp-tax-category,
.amp-wp-tax-tag,
.amp-wp-comments-link,
.amp-wp-footer p,
.back-to-top {
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
}

/* Header */

.amp-wp-header {
	background-color: <?php echo sanitize_hex_color( $header_background_color ); ?>;
	text-align: center;
	height: 60px;
	box-shadow: 0 2px 6px rgba(0, 0, 0,.1);
}

.amp-wp-header div {
	color: <?php echo sanitize_hex_color( $header_text_color ); ?>;
	font-size: 1em;
	font-weight: 400;
	margin: 0 auto;
	max-width: calc(840px - 32px);
	position: relative;
}

.amp-wp-header a {
    color: <?php echo sanitize_hex_color( $header_text_color ); ?>;
    text-decoration: none;
    text-align: center;
    width: 100%;
    height: 100%;
    display: block;
    background-position: 10% center;
    background-repeat: no-repeat;
    background-size: 50%;
}


/* Site Icon */

.amp-wp-header .amp-wp-site-icon {
	/** site icon is 32px **/
	background-color: <?php echo sanitize_hex_color( $header_text_color ); ?>;
	border: 1px solid <?php echo sanitize_hex_color( $header_text_color ); ?>;
	border-radius: 50%;
	position: absolute;
	right: 18px;
	top: 10px;
}

/* Article */

.amp-wp-article {
	color: <?php echo sanitize_hex_color( $text_color ); ?>;
	font-size: 16px;
  line-height: 1.625em;
  margin: 22px auto 30px;
  padding: 0px;
  max-width: 840px;
  overflow-wrap: break-word;
  word-wrap: break-word;
}

/* Article Header */

.amp-wp-article-header {
	align-items: center;
	align-content: stretch;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: 1.5em 16px 1.5em;
}

.amp-wp-title {
	color: <?php echo sanitize_hex_color( $text_color ); ?>;
	display: block;
	flex: 1 0 100%;
	font-weight: 900;
	margin: 0 0 .625em;
	width: 100%;
}

/* Article Meta */

.amp-wp-meta {
	color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
	display: inline-block;
	flex: 2 1 50%;
	font-size: .875em;
	line-height: 1.5em;
	margin: 0;
	padding: 0;
}

.amp-wp-article-header .amp-wp-meta:last-of-type {
	text-align: right;
}

.amp-wp-article-header .amp-wp-meta:first-of-type {
	text-align: left;
}

.amp-wp-byline amp-img,
.amp-wp-byline .amp-wp-author {
	display: inline-block;
	vertical-align: middle;
}

.amp-wp-byline amp-img {
	border: 1px solid <?php echo sanitize_hex_color( $link_color ); ?>;
	border-radius: 50%;
	position: relative;
	margin-right: 6px;
}

.amp-wp-posted-on {
	text-align: right;
}

/* Featured image */

.amp-wp-article-featured-image {
	margin: 0 0 1em;
}
.amp-wp-article-featured-image amp-img {
	margin: 0 auto;
}
.amp-wp-article-featured-image.wp-caption .wp-caption-text {
	margin: 0 18px;
}

/* Article Content */

.amp-wp-article-content {
	margin: 0 16px;
}

.amp-wp-article-content p {
    font-family: Open Sans;
}

.amp-wp-article-content ul,
.amp-wp-article-content ol {
	margin-left: 1em;
}

.amp-wp-article-content amp-img {
	margin: 0 auto;
}

.amp-wp-article-content amp-img.alignright {
	margin: 0 0 1em 16px;
}

.amp-wp-article-content amp-img.alignleft {
	margin: 0 16px 1em 0;
}

/* Captions */

.wp-caption {
	padding: 0;
}

.wp-caption.alignleft {
	margin-right: 16px;
}

.wp-caption.alignright {
	margin-left: 16px;
}

.wp-caption .wp-caption-text {
	border-bottom: 1px solid <?php echo sanitize_hex_color( $border_color ); ?>;
	color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
	font-size: .875em;
	line-height: 1.5em;
	margin: 0;
	padding: .66em 10px .75em;
}

/* AMP Media */

amp-carousel {
	background: <?php echo sanitize_hex_color( $border_color ); ?>;
	margin: 0 -16px 1.5em;
}
amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
	background: <?php echo sanitize_hex_color( $border_color ); ?>;
	margin: 0 -16px 1.5em;
}

.amp-wp-article-content amp-carousel amp-img {
	border: none;
}

amp-carousel > amp-img > img {
	object-fit: contain;
}

.amp-wp-iframe-placeholder {
	background: <?php echo sanitize_hex_color( $border_color ); ?> url( <?php echo esc_url( $this->get( 'placeholder_image_url' ) ); ?> ) no-repeat center 40%;
	background-size: 48px 48px;
	min-height: 48px;
}

/* Article Footer Meta */

.amp-wp-meta-taxonomy {
	display: block;
	list-style: none;
	margin: 20px 0;
	border-bottom: 2px solid #eee;
}
.amp-wp-meta-taxonomy span {
	font-weight: bold;
}
.amp-wp-tax-category, .amp-wp-tax-tag {
	font-size: smaller;
	line-height: 1.4em;
	margin: 0 0 1em;
}
.amp-wp-tax-tag span {
	font-weight: bold;
	margin-right: 3px;
}
.amp-wp-tax-tag a {
	color: #616161;
	background: #f5f5f5;
	display: inline-block;
	line-height: normal;
	padding: 3px 8px;
	margin: 0 3px 5px 0;
	-webkit-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
}
.amp-wp-tax-tag a:hover {
	color: #fff;
	background: #4886ff;
}

.amp-wp-article-footer .amp-wp-meta {
	display: block;
}

.amp-wp-tax-category,
.amp-wp-tax-tag {
	color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
	font-size: .875em;
	line-height: 1.5em;
	margin: 1.5em 16px;
}

.amp-wp-comments-link {
	color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
	font-size: .875em;
	line-height: 1.5em;
	text-align: center;
	margin: 2.25em 0 1.5em;
}

.amp-wp-comments-link a {
	border-style: solid;
	border-color: <?php echo sanitize_hex_color( $border_color ); ?>;
	border-width: 1px 1px 2px;
	border-radius: 4px;
	background-color: transparent;
	color: <?php echo sanitize_hex_color( $link_color ); ?>;
	cursor: pointer;
	display: block;
	font-size: 14px;
	font-weight: 600;
	line-height: 18px;
	margin: 0 auto;
	max-width: 200px;
	padding: 11px 16px;
	text-decoration: none;
	width: 50%;
	-webkit-transition: background-color 0.2s ease;
			transition: background-color 0.2s ease;
}

/* AMP Footer */

.amp-wp-footer {
	background-color: <?php echo sanitize_hex_color( $footer_background_color ); ?>;
	border-top: 1px solid <?php echo sanitize_hex_color( $border_color ); ?>;
	margin: calc(1.5em - 1px) 0 0;
}

.amp-wp-footer div {
    margin: 0 auto;
    max-width: calc(840px - 32px);
    padding: 20px 15px 15px;
    position: relative;
    text-align: center;
}

.amp-wp-footer h2 {
	font-size: 1em;
	line-height: 1.375em;
	margin: 0 0 .5em;
}

.amp-wp-footer p {
		color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
    font-size: .8em;
    line-height: 1.5em;
    margin: 0;
}

.amp-wp-footer .back-to-top {
    display: inline-block;
    text-align: center;
    width: 90%;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 1px;
		z-index: 11;
		color: <?php echo sanitize_hex_color( $link_color ); ?>;
}


.amp-wp-footer a {
	text-decoration: none;
}

.back-to-top {
	bottom: 1.275em;
	font-size: .8em;
	font-weight: 600;
	line-height: 2em;
	position: absolute;
	right: 16px;
}


/* AMP Custom Header */

.amp-wp-header div {
    color: #fff;
    font-size: 1em;
    font-weight: 400;
    margin: 0 auto;
    position: relative;
		display: block;
		height: 100%;
}

.toggle_btn {
    color: <?php echo sanitize_hex_color( $header_text_color ); ?>;
    background: transparent;
    font-size: 24px;
    top: 0;
		left: auto;
    right: 0;
    position: absolute;
    display: inline-block;
    width: 50px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    border: none;
    padding: 0;
    outline: 0;
}

.amp-wp-header .amp_mobile_logo {
	background-image: url(<?php echo esc_url($amp_logo);?>);
}


/* AMP Sidebar */

amp-sidebar {
    background-color: #ffffff;
}

.sidebar-overlay {
    -moz-transition: all .3s cubic-bezier(.5, .2, .5, 1);
    -o-transition: all .3s cubic-bezier(.5, .2, .5, 1);
    -webkit-transition: all .3s cubic-bezier(.5, .2, .5, 1);
    transition: all .3s cubic-bezier(.5, .2, .5, 1)
}

.sidebar-navigation .navbar {
    border-radius: 0;
    min-height: 50px;
    margin: 0;
    border: 0;
    padding: 0 20px
}

.sidebar-navigation .navbar ul li {
    display: inline-block;
    width: 100%
}

.sidebar-navigation .navbar ul li~li {
    border-top: 1px Solid #ededed
}

.sidebar-navigation .navbar ul li ul {
    display: block;
    padding: 0 0 0 20px;
    margin-bottom: 0;
}

.sidebar-navigation .navbar ul li a {
    position: relative;
    display: block;
    font-size: 12px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
    text-transform: uppercase;
    text-decoration: none;
    padding: 10px;
    color: #000;
    font-weight: 700;
}

.sidebar-navigation .navbar ul li.active>a {
    background: #43c7d7;
    color: #fff
}

.sidebar-navigation .navbar ul li ul li a {
    font-size: 10px
}

.amp_search_wrapper {
    padding: 15px;
}

.amp_search_wrapper form {
    position: relative;
}

input:not([type="submit"]) {
    display: inline-block;
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 0;
    padding: 7px 14px;
    height: 40px;
    outline: none;
    font-size: 14px;
    font-weight: 300;
    margin: 0;
    width: 100%;
    max-width: 100%;
    -webkit-transition: all 0.2s ease;
    transition: .25s ease;
    box-shadow: none;
}

.search-form .btn-default {
    color: #212121;
    background: transparent;
    border: 0;
    font-size: 14px;
    outline: none;
    cursor: pointer;
    position: absolute;
    height: auto;
    min-height: unset;
    top: 0;
    bottom: 0;
    right: 0;
    padding: 0 10px;
    transition: none;
}

.Social-header {
    padding: 15px;
}

ul.social-icons li {
    display: inline-block;
    margin: 0px 5px;
}

ul.social-icons {
    text-align: center;
}

ul.social-icons li a {
    color: #000;
}

/* Social Share */

.social-share-amp.small-share-text {
    text-align: center;
    padding: 15px 0 15px 0;
    margin: 15px 0 15px 0
}

.social-share-amp a.large-amp {
    width: inherit;
    padding: 0 15px
}

.social-share-amp ul li {
    display: inline-block;
    margin: 0 0px;
}

.social-share-amp ul li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    color: #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
    text-decoration: none;
    line-height: 40px;
    border: 1px solid #ebebeb;
    -webkit-transition: all .35s ease-in-out;
    -moz-transition: all .35s ease-in-out;
    -ms-transition: all .35s ease-in-out;
    -o-transition: all .35s ease-in-out;
    transition: all .35s ease-in-out
}

.social-share-amp ul li a span {
    position: relative;
    display: inline-block;
    top: -2px;
    line-height: 16px;
    padding-left: 10px;
    margin-left: 12px;
    border-left: 1px solid rgba(255, 255, 255, .2);
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700
}

.social-share-amp a.facebook {
    border-color: #516eab;
    background: #516eab;
    color: #fff
}

.social-share-amp a.twitter {
    border-color: #29c5f6;
    background: #29c5f6;
    color: #fff
}

.social-share-amp a.google {
    border-color: #eb4026;
    background: #eb4026;
    color: #fff
}

.social-share-amp a.pinterest {
    border-color: #ca212a;
    background: #ca212a;
    color: #fff
}

.social-share-amp a.whatsapp {
    border-color: #43d854;
    background: #43d854;
    color: #fff
}

.social-share-amp a.linkedin {
    border-color: #007bb5;
    background: #007bb5;
    color: #fff
}

.social-share-amp a:hover {
    opacity: .8
}

.social-share-amp a i {
    font-size: 16px;
    margin: 2px 0 0
}

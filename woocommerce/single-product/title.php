<?php
/**
 * Single Product title
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

the_title('<h1 itemprop="name" class="product-page-title">', '</h1>');

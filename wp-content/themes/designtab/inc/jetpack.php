<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package DesignTab
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function designtab_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'designtab_jetpack_setup' );

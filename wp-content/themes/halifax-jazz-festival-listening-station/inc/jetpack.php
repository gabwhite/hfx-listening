<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Halifax Jazz Festival - Listening Station
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function halifax_jazz_festival_listening_station_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'halifax_jazz_festival_listening_station_jetpack_setup' );

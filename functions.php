<?php
/**
 * Fiera child functions and definitions
 *
 * @package Fiera child
 * @see http://codex.wordpress.org/Child_Themes
 */

/**
 * Enqueue scripts and styles.
 */
function fiera_child_scripts() {
	// Child style.
	wp_enqueue_style( 'fiera-child-style', get_stylesheet_uri(), 'fiera-style' );

	// Child scripts.
	wp_enqueue_script( 'fiera-child-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'fiera-scripts' ), '20160416', true );
}
add_action( 'wp_enqueue_scripts', 'fiera_child_scripts' );

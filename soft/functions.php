<?php

if ( ! function_exists( 'soft_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function soft_setup() {
		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'editor-styles' );

		add_theme_support( 'wp-block-styles' );

	}
endif;
add_action( 'after_setup_theme', 'soft_setup' );

/**
 * Enqueue theme scripts and styles.
 */
function soft_scripts() {
	wp_enqueue_style( 'soft-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'soft_scripts' );

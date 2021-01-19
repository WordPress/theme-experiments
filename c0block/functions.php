<?php

if ( ! function_exists( 'c0block_support' ) ) :
	function c0block_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
	add_action( 'after_setup_theme', 'c0block_support' );
endif;



/**
 * Enqueue scripts and styles.
 */
function c0block_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'c0block-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue customizer bridge styles 
	// (this probably isn't the right place to do that.)
	wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/noop.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'c0block_scripts' );

require get_template_directory() . '/assets/classes/customizer-bridge.php';

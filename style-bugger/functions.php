<?php

if ( ! function_exists( 'style_bugger_support' ) ) :
	function style_bugger_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
	add_action( 'after_setup_theme', 'style_bugger_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function style_bugger_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'style-bugger-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'style_bugger_scripts' );

<?php

if ( ! function_exists( 'emptytheme_support' ) ) :
	function emptytheme_support()  {

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
    }
    add_action( 'after_setup_theme', 'emptytheme_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function emptytheme_scripts() {
	wp_enqueue_style( 'emptytheme-styles', get_stylesheet_uri() );
	wp_enqueue_style( 'emptytheme-block-styles', get_template_directory_uri() . '/assets/alignments-frontend.css' );
}
add_action( 'wp_enqueue_scripts', 'emptytheme_scripts' );

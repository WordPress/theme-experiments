<?php

if ( ! function_exists( 'two_column_landing_page_support' ) ) :
	function two_column_landing_page_support()  {

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for custom Cover Block spacing.
		add_theme_support('custom-spacing');

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'style-shared.css', 
				'style-editor.css'
		) );
    }
    add_action( 'after_setup_theme', 'two_column_landing_page_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function two_column_landing_page_scripts() {
	wp_enqueue_style( 'two-column-landing-page-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'two_column_landing_page_scripts' );

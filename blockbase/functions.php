<?php

if ( ! function_exists( 'blockbase_support' ) ) :
	function blockbase_support()  {

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
		add_editor_style( array( 
			'style.css',
			'assets/alignments-editor.css'
		) );
    }
    add_action( 'after_setup_theme', 'blockbase_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function blockbase_scripts() {
	wp_enqueue_style( 'blockbase-styles', get_stylesheet_uri() );
	wp_enqueue_style( 'blockbase-block-styles', get_template_directory_uri() . '/assets/alignments-frontend.css' );
}
add_action( 'wp_enqueue_scripts', 'blockbase_scripts' );

<?php

if ( ! function_exists( 'blockbase_blocks_support' ) ) :
	function blockbase_blocks_support()  {

		// Make theme available for translation.
		load_theme_textdomain( 'blockbase', get_template_directory() . '/languages' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array(
			'style-editor.css',
			'./css/editor/variables.css',
			'./css/editor/editor-custom.css'
		) );
	}
	add_action( 'after_setup_theme', 'blockbase_blocks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function blockbase_blocks_enqueue() {
	wp_enqueue_style( 'blockbase-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'blockbase_blocks_enqueue' );

/**
 * Load base styles in edit-site.
 * (This unfortunately does not use the standard add_theme_support('editor-styles') method yet.)
 */
function blockbase_register_FSE_styles( $hook ) {
  if ( 'gutenberg_page_gutenberg-edit-site' == $hook ){
    wp_register_style( 'blockbase-styles-editor', get_template_directory_uri() . '/style-editor.css' );
    wp_enqueue_style( 'blockbase-styles-editor' );
  }
}
add_action( 'admin_enqueue_scripts', 'blockbase_register_FSE_styles' );

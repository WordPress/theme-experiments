<?php

if ( ! function_exists( 'two_column_landing_page_support' ) ) :
    function two_column_landing_page_support()  {

    	// Add featured image support.
    	add_theme_support( 'post-thumbnails' );

		// Make theme available for translation.
		load_theme_textdomain( 'two-column-landing-page', get_template_directory() . '/languages' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

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

		// Support a custom color palette.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Background', 'two-column-landing-page' ),
				'slug'  => 'background',
				'color' => '#ffffff',
			),
			array(
				'name'  => __( 'Foreground', 'two-column-landing-page' ),
				'slug'  => 'foreground',
				'color' => '#000000',
			),
			array(
				'name'  => __( 'Primary', 'two-column-landing-page' ),
				'slug'  => 'primary',
				'color' => '#10506b',
			),
			array(
				'name'  => __( 'Secondary', 'two-column-landing-page' ),
				'slug'  => 'secondary',
				'color' => '#ff4d4d',
			)
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

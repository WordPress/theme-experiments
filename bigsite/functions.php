<?php

if ( ! function_exists( 'bigsite_theme_blocks_support' ) ) :
	/**
	 * Initialize the theme supports.
	 */
	function bigsite_theme_blocks_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'bigsite-theme-blocks', get_template_directory() . '/languages' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Editor color palette.
		// All of these values will be overridden by the theme.json's global => preset => colors array.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'bigsite' ),
					'slug'  => 'primary',
					'color' => '#000',
				),
				array(
					'name'  => __( 'Background', 'bigsite' ),
					'slug'  => 'background',
					'color' => '#fff',
				),
				array(
					'name'  => __( 'Accent', 'bigsite' ),
					'slug'  => 'accent',
					'color' => '#f5f5f5',
				),
			)
		);
	}
    add_action( 'after_setup_theme', 'bigsite_theme_blocks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function bigsite_theme_blocks_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'bigsite-theme-blocks-styles', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'bigsite_theme_blocks_scripts' );

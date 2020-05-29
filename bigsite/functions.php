<?php

if ( ! function_exists( 'bigsite_theme_setup' ) ) :
	/**
	 * Initialize the theme supports.
	 */
	function bigsite_theme_setup() {
		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Adding support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue stylesheet for the editor.
		add_editor_style( get_stylesheet_uri() );

		// Editor color palette.
		// All of these values will be overridden by the theme.json's global => preset => colors array.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Valencia', 'bigsite' ),
					'slug'  => 'valencia',
					'color' => '#DB403B',
				),
				array(
					'name'  => __( 'Mustard', 'bigsite' ),
					'slug'  => 'mustard',
					'color' => '#FFDE69',
				),
				array(
					'name'  => __( 'Navy', 'bigsite' ),
					'slug'  => 'navy',
					'color' => '#022384',
				),
			)
		);

		// Editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'bigsite' ),
					'shortName' => __( 'S', 'bigsite' ),
					'size'      => 12,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'bigsite' ),
					'shortName' => __( 'M', 'bigsite' ),
					'size'      => 16,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'bigsite' ),
					'shortName' => __( 'L', 'bigsite' ),
					'size'      => 50,
					'slug'      => 'large',
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bigsite_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function bigsite_theme_blocks_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'bigsite-theme-blocks-styles', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'bigsite_theme_blocks_scripts' );

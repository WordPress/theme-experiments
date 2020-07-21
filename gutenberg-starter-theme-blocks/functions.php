<?php

if ( ! function_exists( 'gutenberg_starter_theme_blocks_support' ) ) :
    function gutenberg_starter_theme_blocks_support()  {

		// Make theme available for translation.
		load_theme_textdomain( 'gutenberg-starter-theme-blocks', get_template_directory() . '/languages' );

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

		// Support a custom color palette.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Strong Blue', 'gutenberg-starter-theme-blocks' ),
				'slug'  => 'primary',
				'color' => '#0073aa',
			),
			array(
				'name'  => __( 'Lighter Blue', 'gutenberg-starter-theme-blocks' ),
				'slug'  => 'primary-light',
				'color' => '#229fd8',
			),
			array(
				'name'  => __( 'Very Dark Gray', 'gutenberg-starter-theme-blocks' ),
				'slug'  => 'secondary',
				'color' => '#444',
			),
			array(
				'name'  => __( 'Very Light Gray', 'gutenberg-starter-theme-blocks' ),
				'slug'  => 'secondary-light',
				'color' => '#eee',
			)
		) );

		// Starter content
		add_theme_support('starter-content', [
			// Static front page set to Home, posts page set to Blog
			'options' => [
				'show_on_front' => 'page',
				'page_on_front' => '{{home}}',
			],
			// Starter pages to include
			'posts' => [
				'home',
				'blog' => [
					'post_title' => _x( 'Blog', 'gutenberg-starter-theme-blocks' ),
					'post_content' => '<!-- wp:template-part {"slug":"blog","theme":"gutenberg-starter-theme-blocks"} -->'
				],
			]
		]);
    }
    add_action( 'after_setup_theme', 'gutenberg_starter_theme_blocks_support' );
endif;

/**
 * Register Google Fonts
 */
function gutenberg_starter_theme_blocks_fonts_url() {
	$fonts_url = '';

	/*
	 *Translators: If there are characters in your language that are not
	 * supported by Noto Serif, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$notoserif = esc_html_x( 'on', 'Noto Serif font: on or off', 'gutenberg-starter-theme-blocks' );

	if ( 'off' !== $notoserif ) {
		$font_families = array();
		$font_families[] = 'Noto Serif:400,400italic,700,700italic';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function gutenberg_starter_theme_blocks_scripts() {
	wp_enqueue_style( 'gutenberg-starter-theme-blocks-styles', get_stylesheet_uri() );
	wp_enqueue_style( 'gutenberg-starter-theme-blocks-block-styles', get_template_directory_uri() . '/css/blocks.css' );
	wp_enqueue_style( 'gutenberg-starter-theme-blocks-fonts', gutenberg_starter_theme_blocks_fonts_url() );
}
add_action( 'wp_enqueue_scripts', 'gutenberg_starter_theme_blocks_scripts' );
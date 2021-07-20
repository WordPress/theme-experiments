<?php

if ( ! function_exists( '<%= themeInfo.themeSlug %>_support' ) ) :
    function <%= themeInfo.themeSlug %>_support()  {

		// Make theme available for translation.
		load_theme_textdomain( '<%= themeInfo.themeTextDomain %>', get_template_directory() . '/languages' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Support a custom color palette.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Strong Blue', '<%= themeInfo.themeTextDomain %>' ),
				'slug'  => 'strong-blue',
				'color' => '#0073aa',
			),
			array(
				'name'  => __( 'Lighter Blue', '<%= themeInfo.themeTextDomain %>' ),
				'slug'  => 'lighter-blue',
				'color' => '#229fd8',
			),
			array(
				'name'  => __( 'Very Light Gray', '<%= themeInfo.themeTextDomain %>' ),
				'slug'  => 'very-light-gray',
				'color' => '#eee',
			),
			array(
				'name'  => __( 'Very Dark Gray', '<%= themeInfo.themeTextDomain %>' ),
				'slug'  => 'very-dark-gray',
				'color' => '#444',
			),
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
					'post_title' => _x( 'Blog', '<%= themeInfo.themeTextDomain %>' ),
					'post_content' => '<!-- wp:template-part {"slug":"blog","theme":"<%= themeInfo.themeTextDomain %>"} -->'
				],
			]
		]);
    }
    add_action( 'after_setup_theme', '<%= themeInfo.themeSlug %>_support' );
endif;

/**
 * Register Google Fonts
 */
function <%= themeInfo.themeSlug %>_fonts_url() {
	$fonts_url = '';

	/*
	 *Translators: If there are characters in your language that are not
	 * supported by Noto Serif, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$notoserif = esc_html_x( 'on', 'Noto Serif font: on or off', '<%= themeInfo.themeTextDomain %>' );

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
function <%= themeInfo.themeSlug %>_scripts() {
	wp_enqueue_style( '<%= themeInfo.themeTextDomain %>-styles', get_stylesheet_uri() );
	wp_enqueue_style( '<%= themeInfo.themeTextDomain %>-block-styles', get_template_directory_uri() . '/css/blocks.css' );
	wp_enqueue_style( '<%= themeInfo.themeTextDomain %>-fonts', <%= themeInfo.themeSlug %>_fonts_url() );
}
add_action( 'wp_enqueue_scripts', '<%= themeInfo.themeSlug %>_scripts' );
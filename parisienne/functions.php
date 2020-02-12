<?php

if ( ! function_exists( 'parisienne_theme_support' ) ) :
    function parisienne_theme_support()  {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 660;
		}

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail size.
		set_post_thumbnail_size( 1200, 9999 );

		// Title tag
		add_theme_support( 'title-tag' );

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Starter content
		add_theme_support('starter-content', [
			// Static front page set to Home, posts page set to Blog
			'options' => [
				'show_on_front' => 'page',
				'page_on_front' => '{{home}}',
				'page_for_posts' => '{{blog}}',
			],
			// Starter pages to include
			'posts' => [
				'home' => [
					'post_content' => '<!-- wp:template-part {"slug":"cover","theme":"parisienne"} -->'
				],
				'about' => [
					'post_content' => '<!-- wp:template-part {"slug":"about","theme":"parisienne"} -->'
				],
				'contact' => [
					'post_content' => '<!-- wp:template-part {"slug":"contact","theme":"parisienne"} -->'
				],
				'blog'
			]
		]);

    }
    add_action( 'after_setup_theme', 'parisienne_theme_support' );
endif;

/**
 * Register and Enqueue Styles.
 */
function parisienne_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'parisienne-style', get_stylesheet_uri(), array(), $theme_version );
}

add_action( 'wp_enqueue_scripts', 'parisienne_register_styles' );


/**
 * Block Editor Settings.
 * Add custom colors to the block editor.
 */

function parisienne_block_editor_settings() {

	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Blue', 'parisienne' ),
			'slug'  => 'blue',
			'color'	=> '#59BACC',
		),
		array(
			'name'  => __( 'Green', 'parisienne' ),
			'slug'  => 'green',
			'color' => '#58AD69',
		),
		array(
			'name'  => __( 'Orange', 'parisienne' ),
			'slug'  => 'orange',
			'color' => '#FFBC49',
		),
		array(
			'name'	=> __( 'Red', 'parisienne' ),
			'slug'	=> 'red',
			'color'	=> '#E2574C',
		),
	) );
}
add_action( 'after_setup_theme', 'parisienne_block_editor_settings' );

<?php

if ( ! function_exists( 'twentynineteenblocks_theme_support' ) ) :
	function twentynineteenblocks_theme_support() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'twentynineteen-styles/style-editor.css' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen-blocks' ),
					'shortName' => __( 'S', 'twentynineteen-blocks' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen-blocks' ),
					'shortName' => __( 'M', 'twentynineteen-blocks' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen-blocks' ),
					'shortName' => __( 'L', 'twentynineteen-blocks' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen-blocks' ),
					'shortName' => __( 'XL', 'twentynineteen-blocks' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen-blocks' ),
					'slug'  => 'primary',
					'color' => '#0073AA',
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen-blocks' ),
					'slug'  => 'secondary',
					'color' => '#005177',
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen-blocks' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen-blocks' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen-blocks' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Starter content
		add_theme_support('starter-content', [
			// Static front page set to Home
			'options' => [
				'show_on_front' => 'page',
				'page_on_front' => '{{home}}',
			],
			// Starter pages to include
			'posts' => [
				'home',
				'blog' => array(
					'post_type'    => 'page',
					'post_title'   => __( 'Blog', 'twentynineteen-blocks' ),
					'post_content' => join(
						'',
						array(
							'<!-- wp:latest-posts {"postsToShow":100,"displayPostContent":true,"displayPostDate":true} /-->',
						)
					),
				),
			]
		]);

    }
    add_action( 'after_setup_theme', 'twentynineteenblocks_theme_support' );
endif;

/**
 * Register and Enqueue Styles.
 */
function twentynineteenblocks_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'twentynineteenblocks-style', get_stylesheet_uri(), array(), $theme_version );

}

add_action( 'wp_enqueue_scripts', 'twentynineteenblocks_register_styles' );

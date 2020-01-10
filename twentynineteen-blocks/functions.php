<?php

if ( ! function_exists( 'twentynineteenblocks_theme_support' ) ) :
    function twentynineteenblocks_theme_support()  {

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

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
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
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => '#0073AA',
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => '#005177',
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

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
					'post_content' => '<!-- wp:template-part {"slug":"home","theme":"twentynineteenblocks"} -->'
				],
				'about' => [
					'post_content' => '<!-- wp:template-part {"slug":"about","theme":"twentynineteenblocks"} -->'
				],
				'contact' => [
					'post_content' => '<!-- wp:template-part {"slug":"contact","theme":"twentynineteenblocks"} -->'
				],
				'blog'
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
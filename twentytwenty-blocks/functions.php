<?php
if ( ! function_exists( 'twentytwentyblocks_theme_support' ) ) :
    function twentytwentyblocks_theme_support()  {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'twentytwenty-styles/style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentytwenty' ),
					'shortName' => __( 'S', 'twentytwenty' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentytwenty' ),
					'shortName' => __( 'M', 'twentytwenty' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentytwenty' ),
					'shortName' => __( 'L', 'twentytwenty' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentytwenty' ),
					'shortName' => __( 'XL', 'twentytwenty' ),
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
					'name'  => __( 'Primary', 'twentytwenty' ),
					'slug'  => 'primary',
					'color' => '#0073AA',
				),
				array(
					'name'  => __( 'Secondary', 'twentytwenty' ),
					'slug'  => 'secondary',
					'color' => '#005177',
				),
				array(
					'name'  => __( 'Dark Gray', 'twentytwenty' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentytwenty' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentytwenty' ),
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
			],
			// Starter pages to include
			'posts' => [
				'home' => [
					'post_content' => '<!-- wp:template-part {"slug":"home","theme":"twentytwenty-blocks"} -->'
				],
				'about' => [
					'post_content' => '<!-- wp:template {"slug":"about","theme":"twentytwenty-blocks"} -->'
				],
				'exhibitions' => [
					'post_content' => '<!-- wp:template-part {"slug":"exhibitions","theme":"twentytwenty-blocks"} -->'
				],
				'exhibitions/from-signac-to-matisse' => [
					'post_content' => '<!-- wp:template-part {"slug":"signac","theme":"twentytwenty-blocks"} -->'
				],
				'contact' => [
					'post_content' => '<!-- wp:template-part {"slug":"contact","theme":"twentytwenty-blocks"} -->'
				],
				'blog' => [
					'post_content' => '<!-- wp:template-part {"slug":"blog","theme":"twentytwenty-blocks"} -->'
				],
			]
		]);
    }

    add_action( 'after_setup_theme', 'twentytwentyblocks_theme_support' );
endif;

/**
 * Register and Enqueue Styles.
 */
if ( function_exists( 'register_block_style' ) ) {
	function twentytwentyblocks_register_block_style_variations() {
		
		/**
		** Register stylesheet
		**/
		wp_register_style(
			'block-styles-stylesheet',
			get_template_directory_uri() . '/block-styles.css',
			array(),
			'1.1'
		);

		register_block_style(
			'core/heading',
				array(
					'name'					=> 'header-site-title',
					'label'					=> 'Header',
					'style_handle'	=> 'block-styles-stylesheet',
			)
		);

		register_block_style(
			'core/columns',
				array(
					'name'					=> 'landing-page-columns',
					'label'					=> 'Landing Page',
					'style_handle'	=> 'block-styles-stylesheet',
			)
		);

		register_block_style(
			'core/image',
				array(
					'name'					=> 'featured-media-home',
					'label'					=> 'Home',
					'style_handle'	=> 'block-styles-stylesheet',
			)
		);

		register_block_style(
			'core/navigation',
				array(
					'name'					=> 'header-nav',
					'label'					=> 'Header',
					'style_handle'	=> 'block-styles-stylesheet',
			)
		);

		register_block_style(
			'core/cover',
				array(
					'name'					=> 'header-cover',
					'label'					=> 'Header',
					'style_handle'	=> 'block-styles-stylesheet',
			)
		);
	}

	add_action( 'init', 'twentytwentyblocks_register_block_styles' );
}

function twentytwentyblocks_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'twentytwentyblocks-style', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyblocks_register_styles' );

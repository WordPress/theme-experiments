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
		add_editor_style( 'twentytwenty-styles/editor-style-block.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentytwenty-blocks' ),
					'shortName' => __( 'S', 'twentytwenty' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentytwenty-blocks' ),
					'shortName' => __( 'M', 'twentytwenty' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentytwenty-blocks' ),
					'shortName' => __( 'L', 'twentytwenty' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentytwenty-blocks' ),
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
					'name'  => __( 'Primary', 'twentytwenty-blocks' ),
					'slug'  => 'primary',
					'color' => '#0073AA',
				),
				array(
					'name'  => __( 'Secondary', 'twentytwenty-blocks' ),
					'slug'  => 'secondary',
					'color' => '#005177',
				),
				array(
					'name'  => __( 'Dark Gray', 'twentytwenty-blocks' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentytwenty-blocks' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentytwenty-blocks' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Starter content
		add_theme_support('starter-content', [
			// Static front page set to Front
			'options' => [
				'show_on_front' => 'page',
				'page_on_front' => '{{front}}',
			],

			// Create the custom image attachments used as post thumbnails for pages.
			'attachments' => array(
				'image-opening' => array(
					'post_title' => _x( 'The New UMoMA Opens its Doors', 'Theme starter content', 'twentytwenty-blocks' ),
					'file'       => 'assets/images/2020-landscape-1.png', // URL relative to the template directory.
				),
			),

			// Specify the core-defined pages to create and add custom thumbnails to some of them.
			'posts' => array(
				'front' => array(
					'post_type'    => 'page',
					'post_title'   => __( 'The New UMoMA Opens its Doors', 'twentytwenty-blocks' ),
					// Use the above featured image with the predefined about page.
					'thumbnail'    => '{{image-opening}}',
					'post_content' => join(
						'',
						array(
							'<!-- wp:image {"align":"wide","sizeSlug":"large","className":"is-style-default"} -->',
							'<figure class="wp-block-image alignwide size-large is-style-default"><img src="' . get_theme_file_uri() . '/assets/images/2020-landscape-1.png" alt=""/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:group {"align":"wide"} -->',
							'<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
							'<h2 class="has-text-align-center">' . __( 'The premier destination for modern art in Northern Sweden. Open from 10 AM to 6 PM every day during the summer months.', 'twentytwenty' ) . '</h2>',
							'<!-- /wp:heading --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:columns {"align":"wide"} -->',
							'<div class="wp-block-columns alignwide"><!-- wp:column -->',
							'<div class="wp-block-column"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-1.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __( 'Works and Days', 'twentytwenty' ) . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'August 1 -- December 1', 'twentytwenty' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-3.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __( 'Theatre of Operations', 'twentytwenty' ) . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'October 1 -- December 1', 'twentytwenty' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div>',
							'<!-- /wp:column -->',
							'<!-- wp:column -->',
							'<div class="wp-block-column"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-2.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __( 'The Life I Deserve', 'twentytwenty' ) . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'August 1 -- December 1', 'twentytwenty' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-three-quarters-4.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __( 'From Signac to Matisse', 'twentytwenty' ) . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'October 1 -- December 1', 'twentytwenty' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'twentytwenty' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div>',
							'<!-- /wp:column --></div>',
							'<!-- /wp:columns -->',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . get_theme_file_uri() . '/assets/images/2020-landscape-2.png" alt="" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:group {"align":"wide"} -->',
							'<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center","textColor":"accent"} -->',
							'<h2 class="has-accent-color has-text-align-center">' . __( '”Cyborgs, as the philosopher Donna Haraway established, are not reverent. They do not remember the cosmos.”', 'twentytwenty' ) . '</h2>',
							'<!-- /wp:heading --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:paragraph {"dropCap":true} -->',
							'<p class="has-drop-cap">' . __( 'With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political and philosophical issues are intrinsic to our programme. As visitor you are invited to guided tours artist talks, lectures, film screenings and other events with free admission', 'twentytwenty' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'The exhibitions are produced by UMoMA in collaboration with artists and museums around the world and they often attract international attention. UMoMA has received a Special Commendation from the European Museum of the Year, and was among the top candidates for the Swedish Museum of the Year Award as well as for the Council of Europe Museum Prize.', 'twentytwenty' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:paragraph -->',
							'<p></p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:group {"customBackgroundColor":"#ffffff","align":"wide"} -->',
							'<div class="wp-block-group alignwide has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
							'<h2 class="has-text-align-center">' . __( 'Become a Member and Get Exclusive Offers!', 'twentytwenty' ) . '</h2>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph {"align":"center"} -->',
							'<p class="has-text-align-center">' . __( 'Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.', 'twentytwenty' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"align":"center"} -->',
							'<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Join the Club', 'twentytwenty' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:gallery {"ids":[39,38],"align":"wide"} -->',
							'<figure class="wp-block-gallery alignwide columns-2 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" alt="" data-id="39" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" data-link="assets/images/2020-square-2/" class="wp-image-39"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" alt="" data-id="38" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" data-link="' . get_theme_file_uri() . '/assets/images/2020-square-1/" class="wp-image-38"/></figure></li></ul></figure>',
							'<!-- /wp:gallery -->',
						)
					),
				),
				'about',
				'contact',
				'blog' => array(
					'post_type'    => 'page',
					'post_title'   => __( 'Blog', 'twentytwenty-blocks' ),
					'post_content' => join(
						'',
						array(
							'<!-- wp:latest-posts {"postsToShow":100,"displayPostContent":true,"displayPostDate":true} /-->',
						)
					),
				),
			),
		]);
    }

    add_action( 'after_setup_theme', 'twentytwentyblocks_theme_support' );
endif;

/**
 * Register and Enqueue Styles.
 */
if ( function_exists( 'register_block_style' ) ) {
	function twentytwentyblocks_register_block_styles() {

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


/**
 * Register Block Patterns.
 */

if ( function_exists( 'register_pattern' ) ) {
	register_pattern (
	    'twentytwenty-blocks/exhibitions-pattern',
	    array (
	        'title'   => __( 'Two columns of mixed content', 'twentytwenty' ),
	        'content' => "<!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"sizeSlug\":\"large\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"https://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-1.png\" alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading -->\n<h2>Works and Days</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"fontSize\":\"larger\"} -->\n<p class=\"has-larger-font-size\">August 1 – December 1</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"sizeSlug\":\"large\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"https://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-2.png\" alt=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading -->\n<h2>The Life I Deserve</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"fontSize\":\"larger\"} -->\n<p class=\"has-larger-font-size\">August 1 – December 1</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link\">Read More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
	    )
	);
}
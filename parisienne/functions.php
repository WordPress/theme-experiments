<?php

if ( ! function_exists( 'parisienne_theme_support' ) ) :
    function parisienne_theme_support()  {

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Title tag
		add_theme_support( 'title-tag' );

		// Adding support for core block visual style
		add_theme_support( 'wp-block-styles' );

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for editor styles.
		add_theme_support( 'editor-styles' );

		// Editor Color Palette
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Background', 'parisienne' ),
				'slug'  => 'background',
				'color'	=> '#F3EBE8',
			),
			array(
				'name'  => __( 'Foreground', 'parisienne' ),
				'slug'  => 'foreground',
				'color' => '#141414',
			),
			array(
				'name'  => __( 'Primary', 'parisienne' ),
				'slug'  => 'primary',
				'color' => '#fff',
			),
		) );

		// Enqueue stylesheet for the editor.
		add_editor_style(
			array(
				parisienne_fonts_url(),
				get_stylesheet_uri(),
			)
		);
    }
add_action( 'after_setup_theme', 'parisienne_theme_support' );
endif;


/**
 * Register and Enqueue Styles.
 */
function parisienne_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	// Enqueue Google fonts
	wp_enqueue_style( 'parisienne-fonts', parisienne_fonts_url(), array(), null );

	// Enqueue Theme Styles
	wp_enqueue_style( 'parisienne-style', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'parisienne_register_styles' );

/**
 * Add Google webfonts
 *
 * @return string
 */
function parisienne_fonts_url() : string {
	$fonts_url = '';

	$font_families   = array();
	$font_families[] = 'family=Ibarra+Real+Nova:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$font_families[] = 'family=Pinyon+Script';
	$font_families[] = 'display=swap';

	// Make a single request for the theme fonts.
	$fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families );

	return $fonts_url;
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern_category(
		'parisienne',
		array( 'label' => __( 'Parisienne Theme', 'parisienne' ) )
	);

	register_block_pattern(
		'parisienne/cover-pattern',
		array(
			'title'   => __( 'Plan Your Visit', 'parisienne' ),
			'content' => '<!-- wp:cover {"url":"https://user-images.githubusercontent.com/5375500/72178518-09828c80-33b1-11ea-9ba9-818a64ed9398.png","id":273,"dimRatio":30,"overlayColor":"foreground","minHeight":647,"align":"wide"} --><div class="wp-block-cover alignwide has-background-dim-30 has-foreground-background-color has-background-dim" style="background-image:url(https://user-images.githubusercontent.com/5375500/72178518-09828c80-33b1-11ea-9ba9-818a64ed9398.png);min-height:647px"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} --><p class="has-text-align-center has-large-font-size">Open Daily at 7a</p><!-- /wp:paragraph --><!-- wp:button {"borderRadius":0,"style":{"color":{"background":"#817361"}},"align":"center","className":"is-style-fill"} --><div class="wp-block-button aligncenter is-style-fill"><a class="wp-block-button__link has-background no-border-radius" href="/contact" style="background-color:#817361">Plan Your Visit</a></div><!-- /wp:button --></div></div><!-- /wp:cover -->',
		)
	);

	register_block_pattern(
		'parisienne/contact-pattern',
		array(
			'title'   => __( 'Contact Us', 'parisienne' ),
			'content' => '<!-- wp:group {"align":"wide"} --><div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} --><h2 class="has-text-align-center">Contact Us</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} --><figure class="wp-block-image size-large"><img src="https://user-images.githubusercontent.com/5375500/72178520-09828c80-33b1-11ea-8a89-e08b0feb6d85.png" alt=""/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3>Reservations</h3><!-- /wp:heading --><!-- wp:paragraph --><p>For parties under six persons, seating is on a first come, first serve basis.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you are looking to make a reservation for a party of six or larger, please call us at 212 - 867 - 5409.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>We look forward to hosting you!</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>Address</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Visit or write us at:</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>337 Bedford Ave, Brooklyn, NY 11216</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div></div><!-- /wp:group -->',
		)
	);

	register_block_pattern(
		'parisienne/quote-image-pattern',
		array(
			'title'   => __( 'Quote Image', 'parisienne' ),
			'content' => '<!-- wp:media-text {"mediaPosition":"right","mediaId":311,"mediaType":"image"} --><div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://user-images.githubusercontent.com/5375500/72178519-09828c80-33b1-11ea-9b10-19885c2eaa78.png" alt="" class="wp-image-311"/></figure><div class="wp-block-media-text__content"><!-- wp:quote {"align":"right","className":"is-style-large"} --><blockquote class="wp-block-quote has-text-align-right is-style-large"><p>“When I sit down at Chez Maman’s, time stands still. It is like home to me.</p><cite>Harriett Stanton</cite></blockquote><!-- /wp:quote --></div></div><!-- /wp:media-text -->',
		)
	);
}

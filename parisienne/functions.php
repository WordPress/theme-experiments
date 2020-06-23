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
		if ( is_customize_preview() ) {
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
						'post_content' => '<!-- wp:cover {"url":"https://user-images.githubusercontent.com/5375500/72178518-09828c80-33b1-11ea-9ba9-818a64ed9398.png","id":273,"dimRatio":0,"minHeight":647,"align":"wide"} --> <div class="wp-block-cover alignwide" style="background-image:url(https://user-images.githubusercontent.com/5375500/72178518-09828c80-33b1-11ea-9ba9-818a64ed9398.png);min-height:647px"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} --> <p class="has-text-align-center has-large-font-size">Open Daily at 7a</p> <!-- /wp:paragraph --> <!-- wp:button {"borderRadius":0,"align":"center","className":"is-style-fill","style":{"color":{"background":"#817361"}}} --> <a class="wp-block-button aligncenter wp-block-button__link no-border-radius is-style-fill has-background" href="/contact" style="background-color:#817361">Plan Your Visit</a> <!-- /wp:button --> <!-- wp:paragraph --> <p></p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover -->'
					],
					'about' => [
						'post_content' => '<!-- wp:media-text {"mediaPosition":"right","mediaId":311,"mediaType":"image","isStackedOnMobile":false,"className":"alignwide is-stacked-on-mobile"} --> <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://user-images.githubusercontent.com/5375500/72178519-09828c80-33b1-11ea-9b10-19885c2eaa78.png" alt="cake on a platter" class="wp-image-311"/></figure><div class="wp-block-media-text__content"><!-- wp:quote {"align":"right","className":"is-style-large"} --> <blockquote class="wp-block-quote has-text-align-right is-style-large"><p>“When I sit down at Chez Maman’s, time stands still. It is like home to me.</p><cite>Harriett Stanton</cite></blockquote> <!-- /wp:quote --></div></div> <!-- /wp:media-text --> <!-- wp:separator {"className":"is-style-wide"} --> <hr class="wp-block-separator is-style-wide"/> <!-- /wp:separator --> <!-- wp:media-text {"mediaId":337,"mediaType":"image","mediaWidth":34,"verticalAlignment":"top","imageFill":false} --> <div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top" style="grid-template-columns:34% auto"><figure class="wp-block-media-text__media"><img src="https://user-images.githubusercontent.com/5375500/72178521-09828c80-33b1-11ea-9c3f-e17dd88b2d6c.png" alt="" class="wp-image-337"/></figure><div class="wp-block-media-text__content"><!-- wp:list --> <ul><li>Fresh bread baked daily with ancient yeasts and starter that’s been in the family for 50 years.</li><li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</li><li>Excepteur sint occaecat cupidatat non proident.</li><li>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</li></ul> <!-- /wp:list --></div></div> <!-- /wp:media-text -->'
					],
					'contact' => [
						'post_content' => '<!-- wp:columns {"align":"wide"} --> <div class="wp-block-columns alignwide"><!-- wp:column --> <div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} --> <figure class="wp-block-image size-large"><img src="https://user-images.githubusercontent.com/5375500/72178520-09828c80-33b1-11ea-8a89-e08b0feb6d85.png" alt=""/></figure> <!-- /wp:image --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:heading {"level":4} --> <h4>Reservations</h4> <!-- /wp:heading --> <!-- wp:paragraph --> <p>For parties under six persons, seating is on a first come, first serve basis.</p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>If you are looking to make a reservation for a party of six or larger, please call us at 212 - 867 - 5409.</p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>We look forward to hosting you!</p> <!-- /wp:paragraph --> <!-- wp:heading {"level":4} --> <h4>Address</h4> <!-- /wp:heading --> <!-- wp:paragraph --> <p>Visit or write us at:</p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>337 Bedford Ave, Brooklyn, NY 11216</p> <!-- /wp:paragraph --></div> <!-- /wp:column --></div> <!-- /wp:columns -->'
					],
					'blog'
				]
			]);
		}

		/**
		 * Register Block Patterns.
		 */
		if ( function_exists( 'register_pattern' ) ) {
			register_pattern(
				'parisienne/about-pattern',
				array (
					'title'   => __( 'A layout of images and text', 'parisienne' ),
					'content' => '<!-- wp:media-text {"mediaPosition":"right","mediaId":311,"mediaType":"image","isStackedOnMobile":false,"className":"alignwide is-stacked-on-mobile"} --> <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://user-images.githubusercontent.com/5375500/72178519-09828c80-33b1-11ea-9b10-19885c2eaa78.png" alt="cake on a platter" class="wp-image-311"/></figure><div class="wp-block-media-text__content"><!-- wp:quote {"align":"right","className":"is-style-large"} --> <blockquote class="wp-block-quote has-text-align-right is-style-large"><p>“When I sit down at Chez Maman’s, time stands still. It is like home to me.</p><cite>Harriett Stanton</cite></blockquote> <!-- /wp:quote --></div></div> <!-- /wp:media-text --> <!-- wp:separator {"className":"is-style-wide"} --> <hr class="wp-block-separator is-style-wide"/> <!-- /wp:separator --> <!-- wp:media-text {"mediaId":337,"mediaType":"image","mediaWidth":34,"verticalAlignment":"top","imageFill":false} --> <div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-top" style="grid-template-columns:34% auto"><figure class="wp-block-media-text__media"><img src="https://user-images.githubusercontent.com/5375500/72178521-09828c80-33b1-11ea-9c3f-e17dd88b2d6c.png" alt="" class="wp-image-337"/></figure><div class="wp-block-media-text__content"><!-- wp:list --> <ul><li>Fresh bread baked daily with ancient yeasts and starter that’s been in the family for 50 years.</li><li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</li><li>Excepteur sint occaecat cupidatat non proident.</li><li>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</li></ul> <!-- /wp:list --></div></div> <!-- /wp:media-text -->'
				)
			);

			register_pattern(
				'parisienne/cover-pattern',
				array (
					'title'   => __( 'A cover block with text and a button', 'parisienne' ),
					'content' => '<!-- wp:cover {"url":"https://user-images.githubusercontent.com/5375500/72178518-09828c80-33b1-11ea-9ba9-818a64ed9398.png","id":273,"dimRatio":0,"minHeight":647,"align":"wide"} --> <div class="wp-block-cover alignwide" style="background-image:url(https://user-images.githubusercontent.com/5375500/72178518-09828c80-33b1-11ea-9ba9-818a64ed9398.png);min-height:647px"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} --> <p class="has-text-align-center has-large-font-size">Open Daily at 7a</p> <!-- /wp:paragraph --> <!-- wp:button {"borderRadius":0,"align":"center","className":"is-style-fill","style":{"color":{"background":"#817361"}}} --> <a class="wp-block-button aligncenter wp-block-button__link no-border-radius is-style-fill has-background" href="/contact" style="background-color:#817361">Plan Your Visit</a> <!-- /wp:button --> <!-- wp:paragraph --> <p></p> <!-- /wp:paragraph --></div></div> <!-- /wp:cover -->'
				)
			);

			register_pattern(
			    'parisienne/contact-pattern',
			    array (
			        'title'   => __( 'A contact page pattern', 'parisienne' ),
					'content' => '<!-- wp:columns {"align":"wide"} --> <div class="wp-block-columns alignwide"><!-- wp:column --> <div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} --> <figure class="wp-block-image size-large"><img src="https://user-images.githubusercontent.com/5375500/72178520-09828c80-33b1-11ea-8a89-e08b0feb6d85.png" alt=""/></figure> <!-- /wp:image --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:heading {"level":4} --> <h4>Reservations</h4> <!-- /wp:heading --> <!-- wp:paragraph --> <p>For parties under six persons, seating is on a first come, first serve basis.</p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>If you are looking to make a reservation for a party of six or larger, please call us at 212 - 867 - 5409.</p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>We look forward to hosting you!</p> <!-- /wp:paragraph --> <!-- wp:heading {"level":4} --> <h4>Address</h4> <!-- /wp:heading --> <!-- wp:paragraph --> <p>Visit or write us at:</p> <!-- /wp:paragraph --> <!-- wp:paragraph --> <p>337 Bedford Ave, Brooklyn, NY 11216</p> <!-- /wp:paragraph --></div> <!-- /wp:column --></div> <!-- /wp:columns -->'
				)
			);
		}
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
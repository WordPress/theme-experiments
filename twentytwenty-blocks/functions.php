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
					'post_type'    => 'page',
					'post_title'   => __( 'The New UMoMA Opens its Doors', 'twentytwenty-blocks' ),
					'post_content' => '<!-- wp:columns {"align":"full","className":"background-white is-style-landing-page-columns"} -->
						<div class="wp-block-columns alignfull background-white is-style-landing-page-columns"><!-- wp:column {"width":10} -->
						<div class="wp-block-column" style="flex-basis:10%"></div>
						<!-- /wp:column -->
						<!-- wp:column {"width":80} -->
						<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"align":"center","level":1} -->
						<h1 class="has-text-align-center">Welcome to the Swedish Museum of Modern Art</h1>
						<!-- /wp:heading --></div>
						<!-- /wp:column -->
						<!-- wp:column {"width":10} -->
						<div class="wp-block-column" style="flex-basis:10%"></div>
						<!-- /wp:column --></div>
						<!-- /wp:columns -->
						<!-- wp:image {"align":"wide","sizeSlug":"large","className":"is-style-default"} -->
						<figure class="wp-block-image alignwide size-large is-style-default"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-landscape-1-1200x769.png" alt=""/></figure>
						<!-- /wp:image -->
						<!-- wp:heading {"align":"center","className":"alignwide"} -->
						<h2 class="has-text-align-center alignwide">The premier destination for modern art in Sweden. Open 10 AM → 6 PM every day during winter.</h2>
						<!-- /wp:heading -->
						<!-- wp:columns {"align":"wide"} -->
						<div class="wp-block-columns alignwide"><!-- wp:column -->
						<div class="wp-block-column"><!-- wp:image {"id":40,"sizeSlug":"full"} -->
						<figure class="wp-block-image size-full"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-1.png" alt="" class="wp-image-40"/></figure>
						<!-- /wp:image -->
						<!-- wp:heading -->
						<h2>Works and Days</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"larger"} -->
						<p class="has-larger-font-size">August 1 -- December 1</p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="/from-signac-to-matisse/">Read More</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:column -->
						<!-- wp:column -->
						<div class="wp-block-column"><!-- wp:image {"id":41,"sizeSlug":"full"} -->
						<figure class="wp-block-image size-full"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-2.png" alt="" class="wp-image-41"/></figure>
						<!-- /wp:image -->
						<!-- wp:heading -->
						<h2>The Life I Deserve</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"larger"} -->
						<p class="has-larger-font-size">August 1 -- December 1</p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="/from-signac-to-matisse/">Read More</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:column --></div>
						<!-- /wp:columns -->
						<!-- wp:columns {"align":"wide"} -->
						<div class="wp-block-columns alignwide"><!-- wp:column -->
						<div class="wp-block-column"><!-- wp:image {"id":42,"sizeSlug":"full"} -->
						<figure class="wp-block-image size-full"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-3.png" alt="" class="wp-image-42"/></figure>
						<!-- /wp:image -->
						<!-- wp:heading -->
						<h2>Theatre of Operations</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"larger"} -->
						<p class="has-larger-font-size">October 1 -- December 1</p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="/from-signac-to-matisse/">Read More</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:column -->
						<!-- wp:column -->
						<div class="wp-block-column"><!-- wp:image {"id":43,"sizeSlug":"full"} -->
						<figure class="wp-block-image size-full"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-4.png" alt="" class="wp-image-43"/></figure>
						<!-- /wp:image -->
						<!-- wp:heading -->
						<h2>From Signac to Matisse</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"larger"} -->
						<p class="has-larger-font-size">October 1 -- December 1</p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="/from-signac-to-matisse/">Read More</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:column --></div>
						<!-- /wp:columns -->
						<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->
						<figure class="wp-block-image alignfull size-full"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-landscape-2.png" alt="" class="wp-image-37"/></figure>
						<!-- /wp:image -->
						<!-- wp:group {"align":"wide"} -->
						<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center","textColor":"accent","className":"alignwide"} -->
						<h2 class="has-accent-color has-text-color has-text-align-center alignwide">”Cyborgs, as established by author Donna Haraway, are not reverent. They do not remember the cosmos.”</h2>
						<!-- /wp:heading --></div></div>
						<!-- /wp:group -->
						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator is-style-wide"/>
						<!-- /wp:separator -->
						<!-- wp:paragraph {"dropCap":true} -->
						<p class="has-drop-cap">With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political and philosophical issues are intrinsic to our programme. As visitor you are invited to guided tours artist talks, lectures, film screenings and other events with free admission</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>The exhibitions are produced by UMoMA in collaboration with artists and museums around the world and they often attract international attention. UMoMA has received a Special Commendation from the European Museum of the Year, and was among the top candidates for the Swedish Museum of the Year Award as well as for the Council of Europe Museum Prize.</p>
						<!-- /wp:paragraph -->
						<!-- wp:group {"customBackgroundColor":"#ffffff","align":"wide"} -->
						<div class="wp-block-group alignwide has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:group -->
						<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->
						<h2 class="has-text-align-center">Become a Member and Get Exclusive Offers!</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"align":"center"} -->
						<p class="has-text-align-center">Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.</p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"align":"center","className":"is-style-outline"} -->
						<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">Join the Club</a></div>
						<!-- /wp:button --></div></div>
						<!-- /wp:group --></div></div>
						<!-- /wp:group -->
						<!-- wp:gallery {"ids":[38,39],"align":"wide"} -->
						<figure class="wp-block-gallery alignwide columns-2 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-square-1.png" alt="" data-id="38" data-full-url="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-square-1.png" data-link="http://2020.wordpress.net/2020-square-1/" class="wp-image-38"/></figure></li><li class="blocks-gallery-item"><figure><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-square-2.png" alt="" data-id="39" data-full-url="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-square-2.png" data-link="http://2020.wordpress.net/2020-square-2/" class="wp-image-39"/></figure></li></ul></figure>
						<!-- /wp:gallery -->'
				],

				'exhibitions' => [
					'post_content' => '<!-- wp:columns {"align":"full","className":"background-white is-style-landing-page-columns"} -->
						<div class="wp-block-columns alignfull background-white is-style-landing-page-columns"><!-- wp:column {"width":10} -->
						<div class="wp-block-column" style="flex-basis:10%"></div>
						<!-- /wp:column -->
						<!-- wp:column {"width":80} -->
						<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"align":"center","level":1} -->
						<h1 class="has-text-align-center">Exhibitions</h1>
						<!-- /wp:heading --></div>
						<!-- /wp:column -->
						<!-- wp:column {"width":10} -->
						<div class="wp-block-column" style="flex-basis:10%"></div>
						<!-- /wp:column --></div>
						<!-- /wp:columns -->
						<!-- wp:group {"align":"wide"} -->
						<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->
						<h2 class="has-text-align-center">Here you can find all exhibitions currently on display at the UMOMA. To see our past exhibitions,&nbsp;<a href="/">click here.</a></h2>
						<!-- /wp:heading --></div></div>
						<!-- /wp:group -->
						<!-- wp:columns {"align":"wide"} -->
						<div class="wp-block-columns alignwide"><!-- wp:column -->
						<div class="wp-block-column"><!-- wp:image {"id":40,"sizeSlug":"full"} -->
						<figure class="wp-block-image size-full"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-1.png" alt="" class="wp-image-40"/></figure>
						<!-- /wp:image -->
						<!-- wp:heading -->
						<h2>Works and Days</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"larger"} -->
						<p class="has-larger-font-size">August 1 -- December 1</p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="/from-signac-to-matisse/">Read More</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:column -->
						<!-- wp:column -->
						<div class="wp-block-column"><!-- wp:image {"id":41,"sizeSlug":"full"} -->
						<figure class="wp-block-image size-full"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-three-quarters-2.png" alt="" class="wp-image-41"/></figure>
						<!-- /wp:image -->
						<!-- wp:heading -->
						<h2>The Life I Deserve</h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"fontSize":"larger"} -->
						<p class="has-larger-font-size">August 1 -- December 1</p>
						<!-- /wp:paragraph -->
						<!-- wp:button {"className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="/from-signac-to-matisse/">Read More</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:column --></div>
						<!-- /wp:columns -->'
				],

				'from-signac-to-matisse' => [
					'post_content' => '<!-- wp:columns {"align":"full","className":"background-white is-style-landing-page-columns"} -->
								<div class="wp-block-columns alignfull background-white is-style-landing-page-columns"><!-- wp:column {"width":10} -->
								<div class="wp-block-column" style="flex-basis:10%"></div>
								<!-- /wp:column -->
								<!-- wp:column {"width":80} -->
								<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"align":"center","level":1} -->
								<h1 class="has-text-align-center">From Signac to Matisse</h1>
								<!-- /wp:heading --></div>
								<!-- /wp:column -->
								<!-- wp:column {"width":10} -->
								<div class="wp-block-column" style="flex-basis:10%"></div>
								<!-- /wp:column --></div>
								<!-- /wp:columns -->
								<!-- wp:image {"align":"wide","sizeSlug":"large","className":"is-style-default"} -->
								<figure class="wp-block-image alignwide size-large is-style-default"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-landscape-3-1980x1196.png" alt=""/></figure>
								<!-- /wp:image -->
								<!-- wp:group {"align":"wide"} -->
								<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->
								<h2 class="has-text-align-center">“It would not be a commonplace portrait, but a carefully composed picture, with very carefully arranged colors and lines. A rhythmic and angular pose.”</h2>
								<!-- /wp:heading --></div></div>
								<!-- /wp:group -->
								<!-- wp:group {"backgroundColor":"primary","align":"wide"} -->
								<div class="wp-block-group alignwide has-primary-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:columns -->
								<div class="wp-block-columns"><!-- wp:column -->
								<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->
								<p class="has-text-color has-text-align-center has-large-font-size has-background-color"><em>Dates</em><br>Aug 1 — Dec 1</p>
								<!-- /wp:paragraph --></div>
								<!-- /wp:column -->
								<!-- wp:column -->
								<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->
								<p class="has-text-color has-text-align-center has-large-font-size has-background-color"><em>Location</em><br>Exhibit Hall B</p>
								<!-- /wp:paragraph --></div>
								<!-- /wp:column -->
								<!-- wp:column -->
								<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->
								<p class="has-text-color has-text-align-center has-large-font-size has-background-color"><em>Price</em><br>Included</p>
								<!-- /wp:paragraph --></div>
								<!-- /wp:column --></div>
								<!-- /wp:columns --></div></div>
								<!-- /wp:group -->
								<!-- wp:paragraph {"dropCap":true} -->
								<p class="has-drop-cap">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<!-- /wp:paragraph -->
								<!-- wp:template-part {"slug":"gallery","theme":"twentytwenty-blocks"} /-->
								<!-- wp:pullquote {"align":"left"} -->
								<figure class="wp-block-pullquote alignleft"><blockquote><p>The exhibition will feature some 160 objects, including major works that Fénéon admired.</p><cite>Exhibit Catalogue</cite></blockquote></figure>
								<!-- /wp:pullquote -->
								<!-- wp:paragraph -->
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								<!-- /wp:paragraph -->
								<!-- wp:image {"align":"full","id":37,"sizeSlug":"large"} -->
								<figure class="wp-block-image alignfull size-large"><img src="http://2020.wordpress.net/wp-content/uploads/2019/10/2020-landscape-2-1980x963.png" alt="" class="wp-image-37"/></figure>
								<!-- /wp:image -->
								<!-- wp:paragraph -->
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
								<!-- /wp:paragraph -->
								<!-- wp:separator {"className":"is-style-wide"} -->
								<hr class="wp-block-separator is-style-wide"/>
								<!-- /wp:separator -->
								<!-- wp:heading {"align":"center","level":6,"textColor":"accent"} -->
								<h6 class="has-accent-color has-text-color has-text-align-center">Other Exhibitions</h6>
								<!-- /wp:heading -->
								<!-- wp:template-part {"slug":"exhibitions-row-a","theme":"twentytwenty-blocks"} /-->'
							],

							'contact' => [
								'post_content' => '<!-- wp:columns {"align":"full","className":"background-white is-style-landing-page-columns"} -->
									<div class="wp-block-columns alignfull background-white is-style-landing-page-columns"><!-- wp:column {"width":10} -->
									<div class="wp-block-column" style="flex-basis:10%"></div>
									<!-- /wp:column -->
									<!-- wp:column {"width":80} -->
									<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"align":"center","level":1} -->
									<h1 class="has-text-align-center">Contact Us</h1>
									<!-- /wp:heading --></div>
									<!-- /wp:column -->
									<!-- wp:column {"width":10} -->
									<div class="wp-block-column" style="flex-basis:10%"></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->
									<!-- wp:group {"align":"wide"} -->
									<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->
									<h2 class="has-text-align-center">Do you have questions about the museum, our exhibitions or the store? Get in touch below!</h2>
									<!-- /wp:heading --></div></div>
									<!-- /wp:group -->
									<!-- wp:group {"backgroundColor":"primary","align":"wide"} -->
									<div class="wp-block-group alignwide has-primary-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading {"align":"center","level":6,"textColor":"background"} -->
									<h6 class="has-background-color has-text-color has-text-align-center">Address</h6>
									<!-- /wp:heading -->
									<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->
									<p class="has-text-color has-text-align-center has-large-font-size has-background-color">123 Main Street<br>New York, NY 10001</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->
									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading {"align":"center","level":6,"textColor":"background"} -->
									<h6 class="has-background-color has-text-color has-text-align-center">Our Hours</h6>
									<!-- /wp:heading -->
									<!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->
									<p class="has-text-color has-text-align-center has-large-font-size has-background-color">Weekdays  9:00 — 5:00<br>Weekends 11:00 — 3:00</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div></div>
									<!-- /wp:group -->'
				],

				'about',

				'blog',

			]
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

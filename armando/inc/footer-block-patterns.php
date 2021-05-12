<?php
/**
 * Block patterns
 *
 * @package Armando
 * @since 1.2.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'site-footer',
		array( 'label' => esc_html__( 'Site footers', 'armando' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	register_block_pattern(
		'armando/footer-one',
		array(
			'title'       => esc_html__( 'Default footer', 'armando' ),
			'categories'  => array( 'site-footer' ),
			'description' => esc_html__( 'The default footer. 3 Columns with social links, contact information and latest posts. Copyright below the columns.', 'armando' ),
			'content'     => '
				<!-- wp:group {"align":"full","style":{"color":{"link":"var:preset|color|white"}},"backgroundColor":"dark-blue","textColor":"white"} -->
				<div class="wp-block-group alignfull has-white-color has-dark-blue-background-color has-text-color has-background has-link-color" style="--wp--style--color--link:var(--wp--preset--color--white)">
				<!-- wp:columns {"align":"wide"} -->
				<div class="wp-block-columns alignwide">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:latest-posts /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"align":"center"} -->
						<p class="has-text-align-center"><strong>' . esc_html_x( 'Never miss the latest news', 'sample content', 'armando' ) . '</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons {"contentJustification":"center"} -->
						<div class="wp-block-buttons is-content-justification-center">
							<!-- wp:button {"backgroundColor":"light-blue","textColor":"dark-blue"} -->
							<div class="wp-block-button"><a class="wp-block-button__link has-dark-blue-color has-light-blue-background-color has-text-color has-background" href="#">' . esc_html_x( 'Join our mailing list', 'sample content', 'armando' ) . '</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:social-links {"align":"center"} -->
						<ul class="wp-block-social-links aligncenter">
							<!-- wp:social-link {"url":"#","service":"facebook"} /-->
							<!-- wp:social-link {"url":"#","service":"twitter"} /-->
							<!-- wp:social-link {"url":"#","service":"instagram"} /-->
						</ul>
						<!-- /wp:social-links -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:separator {"color":"silver","className":"is-style-wide"} -->
				<hr class="wp-block-separator has-text-color has-background has-silver-background-color has-silver-color is-style-wide" />
				<!-- /wp:separator -->
				<!-- wp:paragraph {"className":"is-style-armando-inline","fontSize":"extra-small"} -->
				<p class="is-style-armando-inline has-extra-small-font-size">' . esc_html__( 'Copyright', 'armando' ) . ' ' .
				/* translators: Copyright date format, see https://www.php.net/date */
				esc_html( date_i18n( _x( 'Y', 'copyright date format', 'armando' ) ) ) .
				' </p><!-- /wp:paragraph -->
				<!-- wp:site-title {"level":0,"className":"is-style-armando-inline","fontSize":"extra-small"} /-->
				</div><!-- /wp:group -->
				',
		)
	);

	register_block_pattern(
		'armando/footer-two',
		array(
			'title'      => esc_html__( 'Footer with call to action, social links, contact information and latest posts.', 'armando' ),
			'categories' => array( 'site-footer' ),
			'content'    => '
				<!-- wp:columns {"align":"full","backgroundColor":"light-blue"} -->
				<div class="wp-block-columns alignfull has-light-blue-background-color has-background"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph -->
				<p><strong>' . esc_html_x( 'Never miss the latest news', 'sample content', 'armando' ) . '</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background" href="#">' . esc_html_x( 'Join our mailing list', 'sample content', 'armando' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
				<!-- wp:social-links {"className":"items-justified-left"} -->
				<ul class="wp-block-social-links items-justified-left">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
				<!-- /wp:social-links --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph -->
				<p><strong>' . esc_html_x( 'Contact', 'sample content', 'armando' ) . '</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"extra-small"} -->
				<p class="has-extra-small-font-size">' . _x( 'Company name<br>Street<br>City', 'sample content', 'armando' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"extra-small"} -->
				<p class="has-extra-small-font-size">' . _x( 'Phone: 00 00 00 00<br>example@example.org', 'sample content', 'armando' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:group {"tagName":"article"} -->
				<article class="wp-block-group">
				<!-- wp:latest-posts {"postsToShow":3,"excerptLength":22,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":113,"featuredImageSizeHeight":113} /--></article>
				<!-- /wp:group --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
			',
		)
	);

	register_block_pattern(
		'armando/footer-three',
		array(
			'title'       => esc_html__( 'Minimalistic footer', 'armando' ),
			'categories'  => array( 'site-footer' ),
			'description' => esc_html__( 'A minimalistic footer with Copyright information.', 'armando' ),
			'content'     => '<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
			<!-- wp:separator {"color":"silver","align":"center"} -->
			<hr class="wp-block-separator aligncenter has-text-color has-background has-silver-background-color has-silver-color"/>
			<!-- /wp:separator -->
			<!-- wp:paragraph {"className":"is-style-armando-inline","fontSize":"extra-small"} -->
			<p class="is-style-armando-inline has-extra-small-font-size"> ' . esc_html__( 'Copyright', 'armando' ) . ' ' .
				/* translators: Copyright date format, see https://www.php.net/date */
				esc_html( date_i18n( _x( 'Y', 'copyright date format', 'armando' ) ) ) . ' </p>
			<!-- /wp:paragraph -->
			<!-- wp:site-title {"level":0,"className":"is-style-armando-inline","fontSize":"extra-small"} /--></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			',
		)
	);

	register_block_pattern(
		'armando/footer-four',
		array(
			'title'      => esc_html__( 'Footer with logo, contact information, social links and copyright.', 'armando' ),
			'categories' => array( 'site-footer' ),
			'content'    => '
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:site-logo {"className":"is-style-rounded"} /--></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph -->
			<p>' . _x( 'Company name<br>Street<br>City', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph -->
			<p>' . _x( 'Phone: 00 00 00 00<br>example@example.org', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:separator {"color":"silver","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-background has-silver-background-color has-silver-color is-style-wide"/>
			<!-- /wp:separator -->
			<!-- wp:social-links {"align":"center"} -->
			<ul class="wp-block-social-links aligncenter">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
			<!-- /wp:social-links -->
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.34%"} -->
			<div class="wp-block-column" style="flex-basis:33.34%"></div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"33.34%"} -->
			<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:group -->
			<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-armando-inline","fontSize":"extra-small"} -->
			<p class="is-style-armando-inline has-extra-small-font-size"> ' . esc_html__( 'Copyright', 'armando' ) . ' ' .
				/* translators: Copyright date format, see https://www.php.net/date */
				esc_html( date_i18n( _x( 'Y', 'copyright date format', 'armando' ) ) ) . ' </p>
			<!-- /wp:paragraph -->
			<!-- wp:site-title {"level":0,"className":"is-style-armando-inline","fontSize":"extra-small"} /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%"></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
		',
		)
	);
}

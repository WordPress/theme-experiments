<?php
/**
 * Block patterns
 *
 * @package Armando
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'sport',
		array( 'label' => esc_html__( 'Sport', 'armando' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	register_block_pattern(
		'armando/next-game',
		array(
			'title'      => esc_html__( 'Next game', 'armando' ),
			'categories' => array( 'sport' ),
			'content'    => '
				<!-- wp:group {"layout":{"inherit":false,"contentSize":"400px"}} -->
				<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"is-style-armando-border"} -->
				<p class="has-text-align-center is-style-armando-border"><strong>' . esc_html_x( 'Next game: April 15, 20:00 CEST', 'sample content', 'armando' ) . '</strong></p>
				<!-- /wp:paragraph -->
				<!-- wp:columns {"verticalAlignment":"center"} -->
				<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
				<h2 class="has-text-align-center has-large-font-size">' . esc_html_x( 'Team A', 'sample content', 'armando' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:image {"align":"center","id":1932,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="100" height="100"/></figure></div>
				<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
				<h2 class="has-text-align-center has-large-font-size">' . esc_html_x( 'Team B', 'sample content', 'armando' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:image {"align":"center","id":1932,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="100" height="100"/></figure></div>
				<!-- /wp:image --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-dark-blue-background-color has-background"><strong>' . esc_html_x( 'Read more', 'sample content', 'armando' ) . '</strong></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"borderRadius":0,"backgroundColor":"dark-blue"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-dark-blue-background-color has-background"><strong>' . esc_html_x( 'Watch online', 'sample content', 'armando' ) . '</strong></a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:group -->
			',
		)
	);

	register_block_pattern(
		'armando/game-results',
		array(
			'title'      => esc_html__( 'Latest Result', 'armando' ),
			'categories' => array( 'sport' ),
			'content'    => '
			<!-- wp:group {"layout":{"inherit":false,"contentSize":"400px"}} -->
			<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
			<h2 class="has-text-align-center has-large-font-size">' . esc_html_x( 'Team A', 'sample content', 'armando' ) . '</h2>
			<!-- /wp:heading -->
			<!-- wp:image {"align":"center","id":1932,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="100" height="100"/></figure></div>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"bottom"} -->
			<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
			<p class="has-text-align-center has-huge-font-size" style="line-height:1"><strong>' . esc_html_x( '3-1', 'sample content, match result', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
			<h2 class="has-text-align-center has-large-font-size">' . esc_html_x( 'Team B', 'sample content', 'armando' ) . '</h2>
			<!-- /wp:heading -->
			<!-- wp:image {"align":"center","id":1932,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="100" height="100"/></figure></div>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-dark-blue-background-color has-background"><strong>' . esc_html_x( 'Read more', 'sample content', 'armando' ) . '</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group -->
			',
		)
	);

	register_block_pattern(
		'armando/event-list',
		array(
			'title'      => __( 'List of results or upcoming games', 'armando' ),
			'categories' => array( 'sport' ),
			'content'    => '
			<!-- wp:columns {"align":"wide","className":"is-style-armando-columns-border"} -->
			<div class="wp-block-columns alignwide is-style-armando-columns-border"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'April 8', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Friendly', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'Team A', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"align":"center","id":56,"width":40,"height":40,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="40" height="40"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
			<p class="has-text-align-center has-huge-font-size" style="line-height:1"><strong>' . esc_html_x( '3-1', 'sample content, game result', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'Team B', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"align":"center","id":56,"width":40,"height":40,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="40" height="40"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-extra-small-font-size"} -->
			<div class="wp-block-button has-custom-font-size has-extra-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background"><strong>' . esc_html_x( 'Read more', 'sample content', 'armando' ) . '</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:columns {"align":"wide","className":"is-style-armando-column-borders is-style-armando-columns-border"} -->
			<div class="wp-block-columns alignwide is-style-armando-column-borders is-style-armando-columns-border"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'April 1', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Cup Semifinal', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'Team B', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"align":"center","id":56,"width":40,"height":40,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="40" height="40"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
			<p class="has-text-align-center has-huge-font-size" style="line-height:1"><strong>' . esc_html_x( '0-1', 'sample content, game result', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'Team A', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"align":"center","id":56,"width":40,"height":40,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="40" height="40"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-extra-small-font-size"} -->
			<div class="wp-block-button has-custom-font-size has-extra-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background"><strong>' . esc_html_x( 'Read more', 'sample content', 'armando' ) . '</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:columns {"align":"wide","className":"is-style-armando-column-borders is-style-armando-columns-border"} -->
			<div class="wp-block-columns alignwide is-style-armando-column-borders is-style-armando-columns-border"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'March 25', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'Team B', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"align":"center","id":56,"width":40,"height":40,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="40" height="40"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
			<p class="has-text-align-center has-huge-font-size" style="line-height:1"><strong>' . esc_html_x( '1-1', 'sample content, game result', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size" style="line-height:1"><strong>' . esc_html_x( 'Team A', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"align":"center","id":56,"width":40,"height":40,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="40" height="40"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:spacer {"height":20} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue", "className":"has-custom-font-size has-extra-small-font-size"} -->
			<div class="wp-block-button has-custom-font-size has-extra-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background"><strong>' . esc_html_x( 'Read more', 'sample content', 'armando' ) . '</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			',
		)
	);

	register_block_pattern(
		'armando/player-profile',
		array(
			'title'      => __( 'Player profile', 'armando' ),
			'categories' => array( 'sport' ),
			'content'    => '
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><strong>' . esc_html_x( 'First name', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"className":"is-style-armando-top-bottom-border","fontSize":"huge"} -->
			<h2 class="is-style-armando-top-bottom-border has-huge-font-size"><strong>' . esc_html_x( 'Last name', 'sample content', 'armando' ) . '</strong></h2>
			<!-- /wp:heading -->
			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:paragraph -->
			<p><strong>' . esc_html_x( 'Position', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '","id":56,"contentPosition":"bottom left"} -->
			<div class="wp-block-cover has-background-dim has-custom-content-position is-position-bottom-left"><img class="wp-block-cover__image-background wp-image-56" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size">' . esc_html_x( '#1 (Replace with shirt number)', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator is-style-wide"/>
			<!-- /wp:separator -->
			<!-- wp:paragraph -->
			<p><strong>' . esc_html_x( 'Stats', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Born:', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Height:', 'sample content', 'armando' ) . '<br>' . esc_html_x( 'Weight:', 'sample content', 'armando' ) . '<br><br>' . esc_html_x( 'Games:', 'sample content', 'armando' ) . '<br>' . esc_html_x( 'Goals:', 'sample content', 'armando' ) . '<br>' . esc_html_x( 'Saves:', 'sample content', 'armando' ) . '<br></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Seasons: 2019-', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Previous Clubs:', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator is-style-wide"/>
			<!-- /wp:separator -->
			<!-- wp:heading {"level":3} -->
			<h3>' . esc_html_x( 'Biography', 'sample content', 'armando' ) . '</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Lorem Ipsum', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3>' . esc_html_x( 'Gallery', 'sample content', 'armando' ) . '</h3>
			<!-- /wp:heading -->
			<!-- wp:gallery {"linkTo":"none"} -->
			<figure class="wp-block-gallery columns-0 is-cropped"><ul class="blocks-gallery-grid"></ul></figure>
			<!-- /wp:gallery -->
		',
		)
	);
}

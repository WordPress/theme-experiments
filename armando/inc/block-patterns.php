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
		'elements',
		array( 'label' => esc_html__( 'Design elements', 'armando' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'armando/media-overlap',
		array(
			'title'      => esc_html__( 'Overlapping Media and Text', 'armando' ),
			'categories' => array( 'elements' ),
			'content'    => '
			<!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media">
			<img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '"	alt="" class="wp-image-1932 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
			<p class="has-large-font-size"><strong>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"backgroundColor":"black","textColor":"white","className":"is-style-armando-media-overlap"} -->
			<div class="wp-block-group is-style-armando-media-overlap has-white-color has-black-background-color has-text-color has-background"><!-- wp:heading --><h2>' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2><!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:media-text -->
		',
		)
	);

	register_block_pattern(
		'armando/media-overlap-two',
		array(
			'title'      => esc_html__( 'Overlapping Media and Text with vertical heading', 'armando' ),
			'categories' => array( 'elements' ),
			'content'    => '
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":80} -->
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:group {"className":"is-style-armando-media-overlap"} -->
			<div class="wp-block-group is-style-armando-media-overlap"><!-- wp:paragraph {"className":"is-style-default","fontSize":"extra-large"} -->
			<p class="is-style-default has-extra-large-font-size"><strong>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</strong> </p>
			<!-- /wp:paragraph -->
			<!-- wp:media-text {"mediaPosition":"right","mediaId":1932,"mediaType":"image","verticalAlignment":"top","imageFill":false} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932 size-full"/></figure><div class="wp-block-media-text__content"></div></div>
			<!-- /wp:media-text --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:media-text --></div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"className":"is-style-armando-vertical-text","fontSize":"huge"} -->
			<h2 class="is-style-armando-vertical-text has-huge-font-size">' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
			<!-- /wp:heading --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
		',
		)
	);

	register_block_pattern(
		'armando/media-skewed',
		array(
			'title'      => esc_html__( 'Skewed Media and Text', 'armando' ),
			'categories' => array( 'elements' ),
			'content'    => '
			<!-- wp:media-text {"className":"is-style-armando-skewed"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-armando-skewed"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
			<p class="has-large-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div></div>
			<!-- /wp:media-text -->
			',
		)
	);

	register_block_pattern(
		'armando/column-with-circles',
		array(
			'title'      => esc_html__( 'Columns with circular images', 'armando' ),
			'categories' => array( 'elements' ),
			'content'    => '
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"align":"center","id":1932,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="200" height="200"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content. This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content. This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"align":"center","id":1932,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="200" height="200"/></figure></div>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"align":"center","id":1932,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="200" height="200"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content. This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
		',
		)
	);

	register_block_pattern(
		'armando/service-columns',
		array(
			'title'      => esc_html__( 'Service sections with circular images and buttons', 'armando' ),
			'categories' => array( 'elements' ),
			'content'    => '
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
			<!-- /wp:heading -->
			<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-extra-small-font-size"} -->
			<div class="wp-block-button has-custom-font-size has-extra-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'armando' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
			<!-- /wp:heading -->
			<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-extra-small-font-size"} -->
			<div class="wp-block-button has-custom-font-size has-extra-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'armando' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="has-text-align-center">' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
			<!-- /wp:heading -->
			<!-- wp:image {"align":"center","id":1932,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="120" height="120"/></figure></div>
			<!-- /wp:image -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-extra-small-font-size"} -->
			<div class="wp-block-button has-custom-font-size has-extra-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Button', 'sample content', 'armando' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
		',
		)
	);

	register_block_pattern(
		'armando/alternating',
		array(
			'title'      => esc_html__( 'Alternating rows with images and headings', 'armando' ),
			'categories' => array( 'elements' ),
			'content'    => '
				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":56,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="100" height="100"/></figure></div>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading -->
				<h2>' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
				<div class="wp-block-column" style="flex-basis:10%"></div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":56,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="100" height="100"/></figure></div>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading -->
				<h2>' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":56,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="100" height="100"/></figure></div>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading -->
				<h2>' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
				<div class="wp-block-column" style="flex-basis:10%"></div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"center","id":56,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-56" width="100" height="100"/></figure></div>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading -->
				<h2>' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>' . esc_html_x( 'This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
			',
		)
	);

}

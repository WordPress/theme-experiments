<?php
/**
 * Page layout block patterns
 *
 * @package Armando
 * @since 1.2
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'layout',
		array( 'label' => esc_html__( 'Page layouts', 'armando' ) )
	);
}

if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'armando/page-layout-one',
		array(
			'title'      => esc_html__( 'Page layout one', 'armando' ),
			'categories' => array( 'layout', 'columns' ),
			'content'    => '
			<!-- wp:media-text {"backgroundColor":"silver"} -->
			<div class="wp-block-media-text alignwide is-stacked-on-mobile has-silver-background-color has-background"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:image -->
			<figure class="wp-block-image"><img alt=""/></figure>
			<!-- /wp:image --></div></div>
			<!-- /wp:media-text -->
			<!-- wp:post-title {"style":{"typography":{"fontSize":"48px"}}} /-->
			<!-- wp:post-author {"byline":"Written by"} /-->
			<!-- wp:spacer {"height":30} -->
			<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide"><!-- wp:paragraph {"backgroundColor":"silver","fontSize":"small"} -->
			<p class="has-silver-background-color has-background has-small-font-size"><em>' . esc_html_x( 'Sample content. Replace the text with your own content. This text was added to show how you can create designs using block patterns.', 'sample content', 'armando' ) . '</em></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:spacer {"height":30} -->
			<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"dropCap":true} -->
			<p class="has-drop-cap">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Donec aliquam egestas nulla, ac lobortis nibh posuere at. Phasellus sed arcu tristique, suscipit velit interdum, finibus sapien.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . _x( '<strong>Quisque eros nulla, condimentum vitae commodo nec?</strong><br>-Aliquet congue lacus. Praesent euismod non enim nec venenatis.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:image -->
			<figure class="wp-block-image"><img alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Nullam et dolor nec ipsum pharetra luctus in eget mi. Quisque ac diam eu eros molestie tristique. Quisque ornare accumsan sollicitudin.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:quote {"align":"center","className":"is-style-large"} -->
			<blockquote class="wp-block-quote has-text-align-center is-style-large"><p>' . esc_html_x( '"Do you see over yonder, friend Sancho, thirty or forty hulking giants? I intend to do battle with them and slay them."', 'sample content', 'armando' ) . '</p><cite>' . esc_html_x( '— Don Quixote', 'sample content', 'armando' ) . '</cite></blockquote>
			<!-- /wp:quote --></div>
			<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph -->
			<p>' . esc_html_x( 'Vivamus tempor dui a tortor luctus blandit. Morbi fringilla massa mi, vitae placerat massa sodales et.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:image -->
			<figure class="wp-block-image"><img alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Suspendisse potenti. Proin finibus erat nec velit vehicula, ac venenatis velit placerat.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Nulla aliquet risus dolor, at rhoncus mauris auctor eget. Sed gravida euismod ex in viverra.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>' . esc_html_x( 'Mauris nec tortor vitae ligula malesuada porta.', 'sample content', 'armando' ) . '</strong> ' . esc_html_x( 'Suspendisse venenatis blandit ante, sed tempus orci tincidunt ut.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Duis congue ante justo, quis dapibus metus porta eu.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
		',
		)
	);

	register_block_pattern(
		'armando/page-layout-two',
		array(
			'title'      => esc_html__( 'Page layout two', 'armando' ),
			'categories' => array( 'layout', 'columns' ),
			'content'    => '
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":1932,"width":534,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="534" height="400"/><figcaption>' . esc_html_x( 'Image caption', 'sample content', 'armando' ) . '</figcaption></figure>
			<!-- /wp:image -->
			<!-- wp:post-title {"style":{"typography":{"fontSize":"48px"}}} /-->
			<!-- wp:post-author {"showAvatar":false,"showBio":true,"byline":"Written by","fontSize":"extra-large"} /-->
			<!-- wp:post-terms {"term":"category"} /--></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
			<!-- wp:image {"id":1932,"width":500,"height":700,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="500" height="700"/><figcaption>' . esc_html_x( 'Image caption', 'sample content', 'armando' ) . '</figcaption></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"dropCap":true} -->
			<p class="has-drop-cap">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Donec aliquam egestas nulla, ac lobortis nibh posuere at. Phasellus sed arcu tristique, suscipit velit interdum, finibus sapien.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . _x( '<strong>Quisque eros nulla, condimentum vitae commodo nec?</strong><br>-Aliquet congue lacus. Praesent euismod non enim nec venenatis.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:quote {"align":"center","className":"is-style-large"} -->
			<blockquote class="wp-block-quote has-text-align-center is-style-large"><p><span style="color:#6cace4" class="has-inline-color">' . esc_html_x( '"Do you see over yonder, friend Sancho, thirty or forty hulking giants? I intend to do battle with them and slay them."', 'sample content', 'armando' ) . '</span></p><cite>' . esc_html_x( '— Don Quixote', 'sample content', 'armando' ) . '</cite></blockquote>
			<!-- /wp:quote --></div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p>' . _x( '<strong>Cras efficitur venenatis mi vitae auctor?</strong><br>-Vestibulum non faucibus est. Suspendisse ac blandit metus. Sed nec rhoncus lectus. Aliquam sit amet aliquam nisi, et vehicula purus.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph -->
			<p>' . esc_html_x( 'Vivamus tempor dui a tortor luctus blandit. Morbi fringilla massa mi, vitae placerat massa sodales et.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:image -->
			<figure class="wp-block-image"><img alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Suspendisse potenti. Proin finibus erat nec velit vehicula, ac venenatis velit placerat.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Nulla aliquet risus dolor, at rhoncus mauris auctor eget. Sed gravida euismod ex in viverra.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><strong>' . esc_html_x( 'Mauris nec tortor vitae ligula malesuada porta.', 'sample content', 'armando' ) . '</strong> ' . esc_html_x( 'Suspendisse venenatis blandit ante, sed tempus orci tincidunt ut.', 'sample content', 'armando' ) . ' ' . esc_html_x( 'Suspendisse potenti. Proin finibus erat nec velit vehicula, ac venenatis velit placerat.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Duis congue ante justo, quis dapibus metus porta eu.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			',
		)
	);

	register_block_pattern(
		'armando/page-layout-three',
		array(
			'title'      => esc_html__( 'Page layout three: Vertical post title', 'armando' ),
			'categories' => array( 'layout' ),
			'content'    => '
			<!-- wp:media-text {"mediaPosition":"right","mediaType":"image","mediaWidth":66,"verticalAlignment":"top","imageFill":false} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top" style="grid-template-columns:auto 66%"><figure class="wp-block-media-text__media"><img src="" alt="" size-full"/></figure><div class="wp-block-media-text__content">
			<!-- wp:post-title {"style":{"typography":{"fontSize":"70px"}},"className":"is-style-armando-vertical-text"} /-->
			</div></div>
			<!-- /wp:media-text -->
			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:columns {"verticalAlignment":null} -->
			<div class="wp-block-columns"><!-- wp:column {"width":"120px"} -->
			<div class="wp-block-column" style="flex-basis:120px"><!-- wp:post-date /-->
			<!-- wp:post-author {"showAvatar":false} /--></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"align":"right","fontSize":"extra-small"} -->
			<p class="has-text-align-right has-extra-small-font-size"><em>' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'sample content', 'armando' ) . '</em></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:paragraph -->
			<p>' . _x( '<strong>Pellentesque efficitur nisi enim, sed fermentum quam efficitur sed.</strong> Donec pulvinar, ex vitae facilisis fringilla, quam nulla dictum mi, viverra scelerisque quam lectus vitae dolor. Quisque gravida sed tellus sed fringilla. Ut eu mattis erat.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Sed consequat, quam vel vulputate bibendum, sem ipsum feugiat purus, at porta elit lectus non eros. Aenean at lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut diam mi, semper quis molestie non, molestie quis purus. Mauris euismod gravida ligula, ut elementum velit consectetur eu. Donec volutpat pretium quam, eget convallis est bibendum venenatis. Quisque tincidunt massa et gravida suscipit.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			',
		)
	);

	register_block_pattern(
		'armando/page-layout-four',
		array(
			'title'         => esc_html__( 'Page layout four: Image columns, site title, tagline and the latest post', 'armando' ),
			'categories'    => array( 'layout' ),
			'viewportWidth' => 840,
			'content'       => '
			<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":1932,"width":340,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="340" height="400"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:site-title {"textAlign":"center"} /-->
			<!-- wp:site-tagline {"textAlign":"center"} /--></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":1932,"width":340,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="340" height="400"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"backgroundColor":"silver"} -->
			<div class="wp-block-group has-silver-background-color has-background"><!-- wp:query {"queryId":6,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only"},"layout":{"type":"list","columns":3}} -->
			<!-- wp:query-loop -->
			<!-- wp:post-title {"fontSize":"large"} /-->
			<!-- wp:post-date /-->
			<!-- wp:post-excerpt {"wordCount":19,"moreText":"Continue reading"} /-->
			<!-- /wp:query-loop -->
			<!-- /wp:query --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":1932,"width":340,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="340" height="400"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":1932,"width":340,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="340" height="400"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":1932,"width":340,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="340" height="400"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":1932,"width":340,"height":600,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="340" height="600"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":1932,"width":340,"height":400,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" alt="" class="wp-image-1932" width="340" height="400"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			',
		)
	);

	register_block_pattern(
		'armando/page-layout-five',
		array(
			'title'      => esc_html__( 'Page layout five', 'armando' ),
			'categories' => array( 'layout' ),
			'content'    => '
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '","id":1932,"contentPosition":"bottom right"} -->
			<div class="wp-block-cover has-background-dim has-custom-content-position is-position-bottom-right"><img class="wp-block-cover__image-background wp-image-1932" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote -->
			<blockquote class="wp-block-quote"><p></p></blockquote>
			<!-- /wp:quote --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:post-title /-->
			<!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size">' . esc_html_x( 'Mauris gravida purus in sapien consequat, eget mollis dui finibus. Integer neque neque, luctus eu dignissim et, pharetra ac lorem.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size">' . esc_html_x( 'Sed consequat, quam vel vulputate bibendum, sem ipsum feugiat purus, at porta elit lectus non eros. Aenean at lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:pullquote -->
			<figure class="wp-block-pullquote"><blockquote><p></p></blockquote></figure>
			<!-- /wp:pullquote -->
			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '","id":1932,"contentPosition":"bottom right"} -->
			<div class="wp-block-cover has-background-dim has-custom-content-position is-position-bottom-right"><img class="wp-block-cover__image-background wp-image-1932" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:quote -->
			<blockquote class="wp-block-quote"><p></p></blockquote>
			<!-- /wp:quote --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size">' . esc_html_x( 'Mauris gravida purus in sapien consequat, eget mollis dui finibus. Integer neque neque, luctus eu dignissim et, pharetra ac lorem.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size">' . esc_html_x( 'Sed consequat, quam vel vulputate bibendum, sem ipsum feugiat purus, at porta elit lectus non eros. Aenean at lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"extra-small"} -->
			<p class="has-extra-small-font-size">' . esc_html_x( 'Aenean at lobortis sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			',
		)
	);

	register_block_pattern(
		'armando/page-layout-six',
		array(
			'title'         => esc_html__( 'Page layout six: Cover image and large author profile', 'armando' ),
			'categories'    => array( 'layout' ),
			'viewportWidth' => 840,
			'content'       => '
			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"overlayColor":"dark-blue","contentPosition":"bottom left"} -->
			<div class="wp-block-cover has-dark-blue-background-color has-background-dim has-custom-content-position is-position-bottom-left"><div class="wp-block-cover__inner-container"><!-- wp:post-title {"style":{"typography":{"fontSize":"60px"}},"textColor":"white"} /--></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-author {"avatarSize":96,"showBio":true} /-->
			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:post-date {"fontSize":"extra-small"} /-->
			<!-- wp:post-terms {"term":"category","fontSize":"extra-small"} /-->
			<!-- wp:post-terms {"term":"post_tag","fontSize":"extra-small"} /-->
			<!-- wp:spacer {"height":40} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"dark-blue","className":"has-custom-font-size has-extra-small-font-size"} -->
			<div class="wp-block-button has-custom-font-size has-extra-small-font-size"><a class="wp-block-button__link has-dark-blue-background-color has-background">' . esc_html_x( 'Contact', 'sample content', 'armando' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
			<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"service":"wordpress"} /-->
			<!-- wp:social-link {"service":"twitter"} /-->
			<!-- wp:social-link {"service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:heading -->
			<h2>' . esc_html_x( 'Heading', 'sample content', 'armando' ) . '</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			',
		)
	);

	register_block_pattern(
		'armando/page-layout-seven',
		array(
			'title'         => esc_html__( 'Page layout seven: Post with cover block background', 'armando' ),
			'categories'    => array( 'layout' ),
			'viewportWidth' => 840,
			'content'       => '
			<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '","id":759,"dimRatio":30,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full"} -->
			<div class="wp-block-cover alignfull has-background-dim-30 has-background-dim" style="min-height:100vh"><img class="wp-block-cover__image-background wp-image-759" alt="" src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder.png' ) ) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"60px"}},"textColor":"white"} /-->
			<!-- wp:group {"layout":{"inherit":true}} -->
			<div class="wp-block-group"><!-- wp:group {"backgroundColor":"white","textColor":"black"} -->
			<div class="wp-block-group has-black-color has-white-background-color has-text-color has-background"><!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size"><strong>' . esc_html_x( 'Sample content. Replace the example cover block with your own image.', 'sample content', 'armando' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:post-author {"showAvatar":false,"byline":"Written by"} /-->
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator is-style-wide"/>
			<!-- /wp:separator -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph -->
			<p>' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph -->
			<p>' . esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et quam vel mi sodales euismod nec quis odio.', 'sample content', 'armando' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- wp:spacer {"height":30} -->
			<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:post-terms {"term":"category","fontSize":"extra-small"} /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->
			',
		)
	);
}

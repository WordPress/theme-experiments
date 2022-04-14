<?php
/* Patterns for headers */

$header_hero = '<!-- wp:group {"className":"is-style-mxs-header","layout":{"inherit":false}} -->
<div class="wp-block-group is-style-mxs-header"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"85%"} -->
<div class="wp-block-column" style="flex-basis:85%"><!-- wp:site-title /-->

<!-- wp:site-tagline {"textColor":"white"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:search {"label":"Search","placeholder":"Enter Your Query...","buttonText":"Search","buttonPosition":"no-button","align":"right","className":"is-style-search-header"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/bg_dots_ovg.png' ) ) . '","id":11892,"isRepeated":true,"dimRatio":50,"overlayColor":"magenta","focalPoint":{"x":"0.50","y":0.5},"isDark":false,"className":"is-style-rounded"} -->
<div class="wp-block-cover is-light is-repeated is-style-rounded" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/images/bg_dots_ovg.png' ) ) . ')"><span aria-hidden="true" class="has-magenta-background-color wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"white","fontSize":"large"} -->
<p class="has-text-align-center has-white-color has-text-color has-large-font-size">' . __( 'See what we have to offer.', 'mixin-styles-gb' ) . '</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:navigation {"ref":11595,"className":"is-style-default","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"},"fontSize":"normal"} /--></div>
<!-- /wp:group -->';

register_block_pattern(
	'mxs-patterns/header-hero',
	array(
		'title' => esc_html__( 'Header- Hero', 'mixin-styles-gb' ),
		'content' => trim( $header_hero ),
		'categories' => array( 'header', 'mixin-styles-gb' ),
		'viewportWidth' => 1366,
	)
);

$header_title_inside = '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-default header-hero","layout":{"inherit":true}} -->
<div class="wp-block-group is-style-default header-hero"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'assets/images/bg_concircles_rby.png' ) ) . '","id":11904,"isRepeated":true,"dimRatio":50,"overlayColor":"magenta","contentPosition":"top center","isDark":false,"align":"full","className":"is-style-rounded-full"} -->
<div class="wp-block-cover alignfull is-light is-repeated has-custom-content-position is-position-top-center is-style-rounded-full" style="background-image:url(' . esc_url( get_theme_file_uri( 'assets/images/bg_concircles_rby.png' ) ) . ')"><span aria-hidden="true" class="has-magenta-background-color wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:site-title /-->

<!-- wp:site-tagline {"textColor":"white"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:social-links {"align":"center","className":"is-style-semitransparent-dark","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter is-style-semitransparent-dark"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:navigation {"ref":11595} /--></div>
<!-- /wp:group -->';

register_block_pattern(
	'mxs-patterns/header-title-inside',
	array(
		'title' => esc_html__( 'Header- Hero (Title Inside)', 'mixin-styles-gb' ),
		'content' => trim( $header_title_inside ),
		'categories' => array( 'header', 'mixin-styles-gb' ),
		'viewportWidth' => 1366,
	)
);

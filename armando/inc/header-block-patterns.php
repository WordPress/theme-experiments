<?php
/**
 * Header block patterns
 *
 * @package Armando
 * @since 1.2.0
 */

/*
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'site-header',
		array( 'label' => esc_html__( 'Site headers', 'armando' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	register_block_pattern(
		'armando/header-default',
		array(
			'title'      => esc_html__( 'Default Header with menu and two background colors.', 'armando' ),
			'categories' => array( 'site-header' ),
			'content'    => '
				<!-- wp:columns {"align":"full","backgroundColor":"dark-blue","className":"is-style-armando-multi-color"} -->
				<div class="wp-block-columns alignfull is-style-armando-multi-color has-dark-blue-background-color has-background"><!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title {"style":{"color":{"link":"var:preset|color|white"}},"fontSize":"normal"} /--></div><!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"orientation":"horizontal","textColor":"white","backgroundColor":"dark-blue","itemsJustification":"right","align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- /wp:navigation --></div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"270px"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:270px"><!-- wp:group {"backgroundColor":"silver"} -->
				<div class="wp-block-group has-silver-background-color has-background">
				<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /--></div>
				<!-- /wp:group --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->
			',
		)
	);

	register_block_pattern(
		'armando/header-one',
		array(
			'title'      => esc_html__( 'Header with title to the left of a menu', 'armando' ),
			'categories' => array( 'site-header' ),
			'content'    => '
			<!-- wp:columns {"align":"full","backgroundColor":"dark-blue"} -->
			<div class="wp-block-columns alignfull has-dark-blue-background-color has-background">
				<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
				<!-- wp:site-title {"style":{"color":{"link":"var:preset|color|white"}},"fontSize":"normal"} /--></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
					<!-- wp:navigation {"orientation":"horizontal","textColor":"white","backgroundColor":"dark-blue","itemsJustification":"right","align":"full","fontSize":"normal","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
					<!-- wp:navigation-link /-->
					<!-- wp:navigation-link /-->
					<!-- wp:navigation-link /-->
					<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			',
		)
	);

	register_block_pattern(
		'armando/header-two',
		array(
			'title'      => esc_html__( 'Centered header with site title below a menu', 'armando' ),
			'categories' => array( 'site-header' ),
			'content'    => '
				<!-- wp:navigation {"orientation":"horizontal","textColor":"white","backgroundColor":"dark-blue","itemsJustification":"center","align":"full","fontSize":"normal","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true} /-->
				<!-- /wp:navigation -->
				<!-- wp:spacer {"height":20} -->
				<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:site-title {"textAlign":"center"} /-->
				<!-- wp:site-tagline {"textAlign":"center"} /-->
				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
			',
		)
	);

	register_block_pattern(
		'armando/header-three',
		array(
			'title'      => esc_html__( 'Centered header with title and tagline above a menu', 'armando' ),
			'categories' => array( 'site-header' ),
			'content'    => '
			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:site-title {"textAlign":"center"} /-->
				<!-- wp:site-tagline {"textAlign":"center"} /-->
				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
			</div><!-- /wp:group -->
			<!-- wp:navigation {"orientation":"horizontal","textColor":"white","backgroundColor":"dark-blue","itemsJustification":"center","align":"full","fontSize":"normal","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
			<!-- wp:navigation-link /-->
			<!-- wp:navigation-link /-->
			<!-- wp:navigation-link /-->
			<!-- wp:social-links -->
			<ul class="wp-block-social-links">
			<!-- wp:social-link {"service":"wordpress"} /-->
			<!-- wp:social-link {"service":"twitter"} /-->
			<!-- wp:social-link {"service":"facebook"} /-->
			<!-- wp:social-link {"service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->
			<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true} /-->
			<!-- /wp:navigation -->
			',
		)
	);

	register_block_pattern(
		'armando/header-four',
		array(
			'title'       => esc_html__( 'Header with two menus, logo and search', 'armando' ),
			'categories'  => array( 'site-header' ),
			'description' => esc_html__( 'A multiline header with two menus, logo and search.', 'armando' ),
			'content'     => '
			<!-- wp:group {"align":"full","backgroundColor":"dark-blue"} -->
			<div class="wp-block-group alignfull has-dark-blue-background-color has-background">
			<!-- wp:navigation {"orientation":"horizontal","textColor":"white","itemsJustification":"center","fontSize":"small", "style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- /wp:navigation --></div>
				<!-- /wp:group -->
				<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"20px"}}},"backgroundColor":"silver"} -->
				<div class="wp-block-group alignfull has-silver-background-color has-background" style="padding-bottom:20px">
				<!-- wp:site-logo {"align":"center","className":"is-style-rounded"} /-->
				<!-- wp:search {"label":"Search","showLabel":false,"width":25,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->
				<!-- wp:spacer {"height":30} -->
				<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:navigation {"orientation":"horizontal","textColor":"black","itemsJustification":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- /wp:navigation --></div>
			<!-- /wp:group -->
			',
		)
	);

	register_block_pattern(
		'armando/header-five',
		array(
			'title'       => esc_html__( 'Header with media background and call to action', 'armando' ),
			'categories'  => array( 'site-header' ),
			'description' => esc_html__( 'A header with a menu and a full width cover block with call to action.', 'armando' ),
			'content'     => '
				<!-- wp:columns {"align":"full","backgroundColor":"dark-blue","className":"is-style-armando-no-bottom-margin"} -->
				<div class="wp-block-columns alignfull has-dark-blue-background-color has-background is-style-armando-no-bottom-margin">
					<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
						<!-- wp:site-title {"style":{"color":{"link":"var:preset|color|white"}},"fontSize":"normal"} /--></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
						<!-- wp:navigation {"orientation":"horizontal","textColor":"white","backgroundColor":"dark-blue","itemsJustification":"right","align":"full","fontSize":"normal","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
						<!-- wp:navigation-link /-->
						<!-- wp:navigation-link /-->
						<!-- wp:navigation-link /-->
						<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true} /-->
						<!-- /wp:navigation -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:cover {"url":"","id":63,"contentPosition":"center center","align":"full","className":"is-style-armando-no-top-margin"} -->
				<div class="wp-block-cover alignfull has-background-dim is-style-armando-no-top-margin">
				<div class="wp-block-cover__inner-container">
				<!-- wp:heading {"textAlign":"center","align":"full","fontSize":"huge"} -->
				<h2 class="alignfull has-text-align-center has-huge-font-size">' . esc_html_x( 'HEADLINE', 'sample content', 'armando' ) . '</h2>
				<!-- /wp:heading -->
				<!-- wp:spacer {"height":20} -->
				<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:buttons {"contentJustification":"center"} -->
				<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"dark-blue","textColor":"white","width":50,"className":"is-style-fill"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-fill"><a class="wp-block-button__link has-white-color has-dark-blue-background-color has-text-color has-background"><strong>' . esc_html_x( 'CUSTOMIZE YOUR CALL TO ACTION', 'sample content', 'armando' ) . '</strong></a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div></div>
				<!-- /wp:cover -->
			',
		)
	);

}

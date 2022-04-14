<?php
/* Block patterns registered for this theme.
 * @package Mixin' Styles- GB.
 * @since 1.0
 */

function mixin_styles_gb_block_patterns() {
	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
		require_once get_template_directory() . '/inc/header-patterns.php';
		require_once get_template_directory() . '/inc/post-page-patterns.php';
	}
}

function mixin_styles_gb_register_block_pattern_cats() {
	if( function_exists( 'register_block_pattern_category' ) ) {
   	// Add new block pattern category for this theme.
   	register_block_pattern_category(
      	'mixin-styles-gb',
      	array( 'label' => esc_html__( 'Mixin Styles- GB', 'mixin-styles-gb' ) )
   	);
   }
}

add_action( 'init', 'mixin_styles_gb_block_patterns' );
add_action( 'init', 'mixin_styles_gb_register_block_pattern_cats' );

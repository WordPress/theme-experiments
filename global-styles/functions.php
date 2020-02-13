<?php

/**
 * Register and enqueue styles.
 */
function global_styles_experimental_theme_register_styles() {
	wp_enqueue_style(
		'global-styles-theme-style',
		get_stylesheet_uri(),
		array(),
		filemtime( dirname( __FILE__ ) . '/style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'global_styles_experimental_theme_register_styles' );

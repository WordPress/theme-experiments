<?php

/**
 * Register and enqueue styles.
 */
function global_styles_experimental_theme_register_styles() {
	wp_enqueue_style(
		'global-styles-theme-style-resets',
		get_stylesheet_directory_uri() . '/resets.css',
		array(),
		filemtime( dirname( __FILE__ ) . '/resets.css' )
	);
	wp_enqueue_style(
		'global-styles-theme-style',
		get_stylesheet_uri(),
		array(
			'global-styles-theme-style-resets'
		),
		filemtime( dirname( __FILE__ ) . '/style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'global_styles_experimental_theme_register_styles' );

// Load styles in edit-site,
// which doesn't use the add_editor_styles registration mechanism
// so styles aren't wrapped by .editor-styles-wrapper.
add_action( 'admin_enqueue_scripts', 'global_styles_experimental_theme_register_styles' );

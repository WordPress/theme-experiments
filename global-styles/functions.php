<?php

function global_styles_experimental_after_setup_theme() {
	add_theme_support('editor-styles');
	add_editor_style('resets.css');
}
add_action( 'after_setup_theme', 'global_styles_experimental_after_setup_theme' );

function global_styles_experimental_wp_enqueue_scripts() {
	wp_enqueue_style(
		'global-styles-theme-style-resets',
		get_stylesheet_directory_uri() . '/resets.css',
		array(),
		filemtime( dirname( __FILE__ ) . '/resets.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'global_styles_experimental_wp_enqueue_scripts' );

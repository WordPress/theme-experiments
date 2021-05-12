<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Armando
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'ARMANDO_VERSION', wp_get_theme()->get( 'Version' ) );

/** Check if the WordPress version is 5.5 or higher, and if the PHP version is at least 7.2. If not, do not activate. */
if ( version_compare( $GLOBALS['wp_version'], '5.5', '<' ) || version_compare( PHP_VERSION_ID, '70200', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Theme support.
require_once 'classes/class-theme-support.php';

// About page.
require_once 'classes/class-aboutpage.php';

// Block styles.
require_once 'inc/block-styles.php';

// Block patterns.
require_once 'inc/block-patterns.php';

// Header block patterns.
require_once 'inc/header-block-patterns.php';

// Footer block patterns.
require_once 'inc/footer-block-patterns.php';

// Page layout block patterns.
require_once 'inc/page-layout-block-patterns.php';

// Sport block patterns.
require_once 'inc/sport-block-patterns.php';

// Query block patterns.
require_once 'inc/query-block-patterns.php';

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function armando_styles() {
	wp_enqueue_style(
		'armando-style',
		get_stylesheet_uri(),
		'',
		ARMANDO_VERSION
	);
	wp_enqueue_style(
		'armando-shared-stylez',
		get_theme_file_uri( 'assets/css/style-shared.css' ),
		'',
		ARMANDO_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'armando_styles' );

/**
 * Show '(No title)' if post has no title.
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = __( '(No title)', 'armando' );
		}

		return $title;
	}
);

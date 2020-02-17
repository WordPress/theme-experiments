<?php
/**
 * Ambitious functions and definitions
 *
 * @package Ambitious
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ambitious_setup() {

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 800, 500, true );
}
add_action( 'after_setup_theme', 'ambitious_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ambitious_content_width() {

	// Default content width.
	$content_width = 800;

	// Set global variable for content width.
	$GLOBALS['content_width'] = apply_filters( 'ambitious_content_width', $content_width );
}
add_action( 'after_setup_theme', 'ambitious_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function ambitious_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'ambitious-stylesheet', get_stylesheet_uri(), array(), '1.0' );

	// Register and enqueue navigation.js.
	wp_enqueue_script( 'ambitious-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'ambitious_scripts' );


/**
* Enqueue theme fonts.
*/
function ambitious_theme_fonts() {
	wp_enqueue_style( 'ambitious-theme-fonts', get_template_directory_uri() . '/assets/css/theme-fonts.css', array(), '20200212' );
}
add_action( 'wp_enqueue_scripts', 'ambitious_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'ambitious_theme_fonts', 1 );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function ambitious_block_editor_assets() {
	wp_enqueue_style( 'ambitious-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), '1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'ambitious_block_editor_assets' );


/**
 * Registers support for various Gutenberg features.
 *
 * @return void
 */
function ambitious_gutenberg_support() {

	// Add theme support for wide and full images.
	add_theme_support( 'align-wide' );

	// Add theme support for block color palette.
	add_theme_support( 'editor-color-palette', apply_filters( 'ambitious_editor_color_palette_args', array(
		array(
			'name'  => esc_html_x( 'Primary', 'block color', 'ambitious' ),
			'slug'  => 'primary',
			'color' => '#003344',
		),
		array(
			'name'  => esc_html_x( 'Secondary', 'block color', 'ambitious' ),
			'slug'  => 'secondary',
			'color' => '#268f97',
		),
		array(
			'name'  => esc_html_x( 'Accent', 'block color', 'ambitious' ),
			'slug'  => 'accent',
			'color' => '#c9493b',
		),
		array(
			'name'  => esc_html_x( 'Highlight', 'block color', 'ambitious' ),
			'slug'  => 'highlight',
			'color' => '#f9d26e',
		),
		array(
			'name'  => esc_html_x( 'White', 'block color', 'ambitious' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
		array(
			'name'  => esc_html_x( 'Light Gray', 'block color', 'ambitious' ),
			'slug'  => 'light-gray',
			'color' => '#e4e4e4',
		),
		array(
			'name'  => esc_html_x( 'Gray', 'block color', 'ambitious' ),
			'slug'  => 'gray',
			'color' => '#848484',
		),
		array(
			'name'  => esc_html_x( 'Dark Gray', 'block color', 'ambitious' ),
			'slug'  => 'dark-gray',
			'color' => '#242424',
		),
		array(
			'name'  => esc_html_x( 'Black', 'block color', 'ambitious' ),
			'slug'  => 'black',
			'color' => '#000000',
		),
	) ) );

	// Add theme support for font sizes.
	add_theme_support( 'editor-font-sizes', apply_filters( 'ambitious_editor_font_sizes_args', array(
		array(
			'name' => esc_html_x( 'Small', 'block font size', 'ambitious' ),
			'size' => 16,
			'slug' => 'small',
		),
		array(
			'name' => esc_html_x( 'Medium', 'block font size', 'ambitious' ),
			'size' => 24,
			'slug' => 'medium',
		),
		array(
			'name' => esc_html_x( 'Large', 'block font size', 'ambitious' ),
			'size' => 36,
			'slug' => 'large',
		),
		array(
			'name' => esc_html_x( 'Extra Large', 'block font size', 'ambitious' ),
			'size' => 48,
			'slug' => 'extra-large',
		),
		array(
			'name' => esc_html_x( 'Huge', 'block font size', 'ambitious' ),
			'size' => 64,
			'slug' => 'huge',
		),
	) ) );
}
add_action( 'after_setup_theme', 'ambitious_gutenberg_support' );

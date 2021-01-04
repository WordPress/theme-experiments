<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage TT1_Blocks
 * @since 0.1
 */

if ( ! function_exists( 'tt1_blocks_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function tt1_blocks_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TT1 Blocks, use a find and replace
		 * to change 'tt1-blocks' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tt1-blocks', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			'./assets/css/blocks.css',
			'./assets/css/style-shared.css',
			'./assets/css/style-editor.css', 
		) );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'tt1-blocks' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'tt1-blocks' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'tt1-blocks' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'tt1-blocks' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'tt1-blocks' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'tt1-blocks' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'tt1-blocks' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'tt1-blocks' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra Large', 'tt1-blocks' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'tt1-blocks' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'tt1-blocks' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'tt1-blocks' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'tt1-blocks' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'tt1-blocks' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'tt1-blocks' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'tt1-blocks' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'tt1-blocks' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'tt1-blocks' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'tt1-blocks' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'tt1-blocks' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'tt1-blocks' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'tt1-blocks' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'tt1-blocks' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'tt1-blocks' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to Yellow', 'tt1-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ', ' . $yellow . ')',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Purple', 'tt1-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ', ' . $purple . ')',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to Yellow', 'tt1-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ', ' . $yellow . ')',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Green', 'tt1-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ', ' . $green . ')',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to Yellow', 'tt1-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ', ' . $yellow . ')',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Red', 'tt1-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ', ' . $red . ')',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to Red', 'tt1-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ', ' . $red . ')',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to Purple', 'tt1-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ', ' . $purple . ')',
					'slug'     => 'red-to-purple',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
}
add_action( 'after_setup_theme', 'tt1_blocks_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 0.1
 *
 * @return void
 */
function tt1_blocks_scripts() {
	wp_enqueue_style( 'tt1-blocks-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'tt1_blocks_scripts' );

/**
 * Enqueue block editor script.
 *
 * @since 0.1
 *
 * @return void
 */
function tt1_blocks_block_editor_script() {

	wp_enqueue_script( 'tt1-blocks-unregister-block-style', get_theme_file_uri( '/assets/js/unregister-block-style.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'enqueue_block_editor_assets', 'tt1_blocks_block_editor_script' );

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

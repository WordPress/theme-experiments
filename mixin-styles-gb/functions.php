<?php

//require_once ( get_theme_file_path( '/inc/editor-palette.php' ) );

if ( ! function_exists( 'mixin_styles_gb_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which runs
   * before the init hook. The init hook is too late for some features, such as indicating
   * support post thumbnails.
   */

   function mixin_styles_gb_setup() {
    /* for theme localization */
    load_theme_textdomain( 'mixin-styles-gb', get_template_directory_uri() . '/languages' );

    /**
     * Add HTML5 support for classic theme features.
     */
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Responsive videos.
     */
    add_theme_support( 'responsive-embeds' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'align-wide' );

    /**
     * Add support for editor styles.
     */
		add_theme_support( 'editor-styles' );

    /**
     * Enqueue editor styles.
     */
		add_editor_style( array(
      './assets/css/base-styles.css',
      './assets/css/blocks.css',
      './assets/css/block-colors.css',
      './assets/css/block-button-colors.css',
      './assets/css/block-navigation-colors.css',
      './assets/css/editor-overrides.css',
    ) );
  }
endif;
add_action( 'after_setup_theme', 'mixin_styles_gb_setup' );

// Add block pattern functions
require_once get_template_directory() . '/inc/block-patterns.php';

function mixin_styles_gb_block_styles() {
	wp_enqueue_script( 'mixin-styles-gb-block-styles', get_theme_file_uri( '/js/block-styles.js' ), array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ), filemtime( get_template_directory_uri() . '/js/blocks-styles.js' ) );
}
add_action( 'enqueue_block_editor_assets', 'mixin_styles_gb_block_styles' );

function mixin_styles_gb_scripts() {
  // Stylesheets
  wp_enqueue_style( 'mixin-styles-gb-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mixin_styles_gb_scripts' );

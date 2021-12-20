<?php // slick theme functions

#
# HOOKS
#

// add theme sutup
add_action( 'after_setup_theme', 'slick_setup' );

// enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'slick_enqueue' );  



#
# FUNCTIONS
#

// Sets up theme defaults and registers support for various WordPress features
function slick_setup() {

    // Add support for featured images.
    add_theme_support( 'post-thumbnails' );

    // Add support for core block visual styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

    // Add support for custom units.
    add_theme_support( 'custom-units' );
}



// Enqueue scripts and styles
function slick_enqueue() {

    // Add style.css
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}


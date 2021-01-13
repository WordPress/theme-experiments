<?php

if ( ! function_exists( 'cblock_support' ) ) :
	function cblock_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
	add_action( 'after_setup_theme', 'cblock_support' );
endif;



/**
 * Enqueue scripts and styles.
 */
function cblock_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'cblock-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue alignments stylesheet.
	wp_enqueue_style( 'cblock-alignments-style', get_template_directory_uri() . '/assets/alignments-front.css', array(), wp_get_theme()->get( 'Version' ) );





}
add_action( 'wp_enqueue_scripts', 'cblock_scripts' );


class CBlock_Custom_Colors {

	function __construct() {
		add_action( 'customize_register', array( $this, 'cblock_customize_custom_colors_register' ) );

		/**
		 * Enqueue color variables for customizer & frontend.
		 */
		add_action( 'wp_enqueue_scripts', array( $this, 'cblock_custom_color_variables' ) );


	}

	function cblock_custom_color_variables() {
		//Here I want to change the value of var(--wp--custom--cblock--mycolor)
		wp_add_inline_style( 'cblock-style', $this->cblock_generate_custom_color_variables() );
	
	}

	function cblock_generate_custom_color_variables ( $context=null ) {
 
		return ":root { --wp--custom--cblock--mycolor: " . get_theme_mod( "cblock_mycolor" ) . "; }";
	}

	function cblock_customize_custom_colors_register( $wp_customize ) {

		$wp_customize->add_section(
			'cblock_options',
			array(
				'capability' => 'edit_theme_options',
			    'title'      => esc_html__( 'Colors', 'cblock' ),
			)
		);

	     $wp_customize->add_setting(
         "cblock_mycolor",
         array(
           'default'           => esc_html( '#FF0000' ),
           'sanitize_callback' => 'sanitize_hex_color',
         )
       );
       $wp_customize->add_control(
         new WP_Customize_Color_Control(
           $wp_customize,
           "cblock_mycolor",
           array(
             'section'         => 'cblock_options',
             'label'           => 'MyColor',
           )
         )
       );


	}

}
new CBlock_Custom_Colors;
<?php

if ( ! function_exists( 'magazine_example_support' ) ) :
    function magazine_example_support()  {

    	// Add featured image support.
    	add_theme_support( 'post-thumbnails' );

		// Make theme available for translation.
		load_theme_textdomain( 'magazine-example', get_template_directory() . '/languages' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'style-shared.css', 
				'style-editor.css'
		) );

		// Support a custom color palette.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Background', 'magazine-example' ),
				'slug'  => 'background',
				'color' => '#f5efe0',
			),
			array(
				'name'  => __( 'Foreground', 'magazine-example' ),
				'slug'  => 'foreground',
				'color' => '#000',
			),
			array(
				'name'  => __( 'Primary', 'magazine-example' ),
				'slug'  => 'primary',
				'color' => '#cd2653',
			),
			array(
				'name'  => __( 'Secondary', 'magazine-example' ),
				'slug'  => 'secondary',
				'color' => '#6d6d6d',
			)
		) );
    }
    add_action( 'after_setup_theme', 'magazine_example_support' );

    // Starter content
	if ( is_customize_preview() ) {
		add_theme_support('starter-content', [

			// Create the custom image attachments used as post thumbnails for pages.
			'attachments' => array(
				'don-quixote-01' => array(
					'post_title' => _x( 'Thou Hast Seen Nothing Yet', 'Theme starter content', 'magazine-example' ),
					'file'       => 'assets/images/don-quixote-01.jpg',
				),
				'don-quixote-02' => array(
					'post_title' => _x( 'Such Ardour and Avidity', 'Theme starter content', 'magazine-example' ),
					'file'       => 'assets/images/don-quixote-02.jpg',
				),
				'don-quixote-03' => array(
					'post_title' => _x( 'Pearls in his Sight', 'Theme starter content', 'magazine-example' ),
					'file'       => 'assets/images/don-quixote-03.jpg',
				),
				'don-quixote-04' => array(
					'post_title' => _x( 'The Above-Named Gentleman', 'Theme starter content', 'magazine-example' ),
					'file'       => 'assets/images/don-quixote-04.jpg',
				),
				'don-quixote-05' => array(
					'post_title' => _x( 'Feliciano de Silva', 'Theme starter content', 'magazine-example' ),
					'file'       => 'assets/images/don-quixote-05.jpg',
				),
			),

			// Starter pages to include
			'posts' => [
				'post-01' => array(
					'post_type'    => 'post',
					'post_title'   => __( 'Thou Hast Seen Nothing Yet', 'magazine-example' ),
					'thumbnail'    => '{{don-quixote-01}}',
					'post_content' => 'They must know, then, that the above-named gentleman whenever he was at leisure (which was mostly all the year round) gave himself up to reading books of chivalry with such ardour and avidity that he almost entirely neglected the pursuit of his field-sports, and even the management of his property; and to such a pitch did his eagerness and infatuation go that he sold many an acre of tillageland to buy books of chivalry to read, and brought home as many of them as he could get.'
				),
				'post-02' => array(
					'post_type'    => 'post',
					'post_title'   => __( 'Such Ardour and Avidity', 'magazine-example' ),
					'thumbnail'    => '{{don-quixote-02}}',
					'post_content' => 'They must know, then, that the above-named gentleman whenever he was at leisure (which was mostly all the year round) gave himself up to reading books of chivalry with such ardour and avidity that he almost entirely neglected the pursuit of his field-sports, and even the management of his property; and to such a pitch did his eagerness and infatuation go that he sold many an acre of tillageland to buy books of chivalry to read, and brought home as many of them as he could get.'
				),
				'post-03' => array(
					'post_type'    => 'post',
					'post_title'   => __( 'Pearls in his Sight', 'magazine-example' ),
					'thumbnail'    => '{{don-quixote-03}}',
					'post_content' => 'They must know, then, that the above-named gentleman whenever he was at leisure (which was mostly all the year round) gave himself up to reading books of chivalry with such ardour and avidity that he almost entirely neglected the pursuit of his field-sports, and even the management of his property; and to such a pitch did his eagerness and infatuation go that he sold many an acre of tillageland to buy books of chivalry to read, and brought home as many of them as he could get.'
				),
				'post-04' => array(
					'post_type'    => 'post',
					'post_title'   => __( 'The Above-Named Gentleman', 'magazine-example' ),
					'thumbnail'    => '{{don-quixote-04}}',
					'post_content' => 'They must know, then, that the above-named gentleman whenever he was at leisure (which was mostly all the year round) gave himself up to reading books of chivalry with such ardour and avidity that he almost entirely neglected the pursuit of his field-sports, and even the management of his property; and to such a pitch did his eagerness and infatuation go that he sold many an acre of tillageland to buy books of chivalry to read, and brought home as many of them as he could get.'
				),
				'post-05' => array(
					'post_type'    => 'post',
					'post_title'   => __( 'Feliciano de Silva', 'magazine-example' ),
					'thumbnail'    => '{{don-quixote-05}}',
					'post_content' => 'They must know, then, that the above-named gentleman whenever he was at leisure (which was mostly all the year round) gave himself up to reading books of chivalry with such ardour and avidity that he almost entirely neglected the pursuit of his field-sports, and even the management of his property; and to such a pitch did his eagerness and infatuation go that he sold many an acre of tillageland to buy books of chivalry to read, and brought home as many of them as he could get.'
				),
			]
		]);
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function magazine_example_scripts() {
	wp_enqueue_style( 'magazine-example-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'magazine_example_scripts' );

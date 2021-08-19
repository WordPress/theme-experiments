<?php
/**
 * Theme support
 *
 * @package Armando
 * @since 1.0.0
 */

namespace Armando;

/**
 * Add theme support
 *
 * @since 1.0.0
 */
class Theme_Support {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'action_setup' ] );
		add_action( 'after_setup_theme', [ $this, 'action_content_width' ], 0 );
	}

	/**
	 * Adds theme-supports.
	 *
	 * @access public
	 * @since 1.0.0
	 * @return void
	 */
	public function action_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );

		/*
		* Switch default core markup to output valid HTML5.
		* The comments block uses the markup from the comments template.
		*/
		add_theme_support(
			'html5',
			[
				'comment-form',
				'comment-list',
			]
		);

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

			// Enqueue editor styles.
		add_theme_support( 'editor-styles' );
		add_editor_style(
			array(
				'./assets/css/style-shared.css',
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 *
	 * @global int $content_width Content width.
	 * @since 1.0.0
	 * @access public
	 */
	public function action_content_width() {
		// This variable is intended to be overruled from themes.
		// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
		$GLOBALS['content_width'] = apply_filters( 'armando_content_width', 720 );
	}

}

new Theme_Support();

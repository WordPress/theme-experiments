<?php
/**
 * Enqueue theme's scripts
 *
 * @package probd-blocks
 */

namespace ProBD\Blocks;

defined( 'ABSPATH' ) || die();


class Enqueue_escripts {

	/**
	 * Version number of the theme
	 * 
	 * @var string
	 */
	private $theme_version;

	function __construct() {
		$this->theme_version = wp_get_theme()->get( 'Version' );

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_theme_assets' ) );
	}

	public function enqueue_theme_assets() {
		wp_enqueue_style( 'probd-blocks-style', get_template_directory_uri() . '/assets/css/probd-blocks-main.min.css', array(), $this->theme_version );
		wp_enqueue_style( 'probd-blocks-style', get_template_directory_uri() . '/style.css', array(), $this->theme_version );
	}
	
}

<?php
/**
 * Theme core features
 *
 * @package probd-blocks
 */

namespace ProBD\Blocks;

defined( 'ABSPATH' ) || die();


class Setup {

	/**
	 * instence of editor_color_codes
	 * 
	 * @var array
	 */
	private $color_codes;

	function __construct() {
		$this->color_codes = $this->editor_color_codes();

		add_action( 'after_setup_theme', array( $this, 'blocks_setup' ) );
	}

	public function blocks_setup() {
		$this->core_theme_suppoets();
		
		$this->editor_font_size();

		$this->editor_color_palette();

		$this->editor_gradient_palette();
	}

	/**
	 * Theme's most importent supports.
	 * 
	 * @return void
	 */
	public function core_theme_suppoets() {
		load_theme_textdomain( 'probd-blocks', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'post-thumbnails' );
		// set_post_thumbnail_size( 1568, 9999 );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// not done...
		// Enqueue editor styles.
		add_editor_style(
			array(
				'./assets/css/probd-blocks-editor.min.css'
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}

	/**
	 * Add custom editor font sizes.
	 * 
	 * @return void
	 */
	public function editor_font_size() {
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'probd-blocks' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'probd-blocks' ),
					'size'      => 12,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'probd-blocks' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'probd-blocks' ),
					'size'      => 14,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'probd-blocks' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'probd-blocks' ),
					'size'      => 16,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'probd-blocks' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'probd-blocks' ),
					'size'      => 20,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra Large', 'probd-blocks' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'probd-blocks' ),
					'size'      => 25,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'probd-blocks' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'probd-blocks' ),
					'size'      => 35,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'probd-blocks' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'probd-blocks' ),
					'size'      => 50,
					'slug'      => 'gigantic',
				),
			)
		);
	}

	/**
	 * Editor color codes.
	 * 
	 * @return void
	 */
	public function editor_color_codes() {
		array(
			'light_cyan'=> '#36d0ff',
			'black'     => '#000000',
			'dark_gray' => '#28303D',
			'gray'      => '#39414D',
			'green'     => '#D1E4DD',
			'blue'      => '#2525fd',
			'purple'    => '#7e027e',
			'red'       => '#f70404',
			'orange'    => '#fda502',
			'yellow'    => '#fdfd04',
			'white'     => '#FFFFFF',
		);
	}

	/**
	 * Editor color palette.
	 * 
	 * @return void
	 */
	public function editor_color_palette() {
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Light Cyan', 'probd-blocks' ),
					'slug'  => 'light_cyan',
					'color' => $this->color_codes['light_cyan'],
				),
				array(
					'name'  => esc_html__( 'Black', 'probd-blocks' ),
					'slug'  => 'black',
					'color' => $this->color_codes['black'],
				),
				array(
					'name'  => esc_html__( 'Dark Gray', 'probd-blocks' ),
					'slug'  => 'dark-gray',
					'color' => $this->color_codes['dark_gray'],
				),
				array(
					'name'  => esc_html__( 'Gray', 'probd-blocks' ),
					'slug'  => 'gray',
					'color' => $this->color_codes['gray'],
				),
				array(
					'name'  => esc_html__( 'Green', 'probd-blocks' ),
					'slug'  => 'green',
					'color' => $this->color_codes['green'],
				),
				array(
					'name'  => esc_html__( 'Blue', 'probd-blocks' ),
					'slug'  => 'blue',
					'color' => $this->color_codes['blue'],
				),
				array(
					'name'  => esc_html__( 'Purple', 'probd-blocks' ),
					'slug'  => 'purple',
					'color' => $this->color_codes['purple'],
				),
				array(
					'name'  => esc_html__( 'Red', 'probd-blocks' ),
					'slug'  => 'red',
					'color' => $this->color_codes['red'],
				),
				array(
					'name'  => esc_html__( 'Orange', 'probd-blocks' ),
					'slug'  => 'orange',
					'color' => $this->color_codes['orange'],
				),
				array(
					'name'  => esc_html__( 'Yellow', 'probd-blocks' ),
					'slug'  => 'yellow',
					'color' => $this->color_codes['yellow'],
				),
				array(
					'name'  => esc_html__( 'White', 'probd-blocks' ),
					'slug'  => 'white',
					'color' => $this->color_codes['white'],
				),
			)
		);
	}

	/**
	 * Editor gradient palette.
	 * 
	 * @return void
	 */
	public function editor_gradient_palette() {
		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to Yellow', 'probd-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $this->color_codes['purple'] . ', ' . $this->color_codes['yellow'] . ')',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Purple', 'probd-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $this->color_codes['yellow'] . ', ' . $this->color_codes['purple'] . ')',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to Yellow', 'probd-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $this->color_codes['green'] . ', ' . $this->color_codes['yellow'] . ')',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Green', 'probd-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $this->color_codes['yellow'] . ', ' . $this->color_codes['green'] . ')',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to Yellow', 'probd-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $this->color_codes['red'] . ', ' . $this->color_codes['yellow'] . ')',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to Red', 'probd-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $this->color_codes['yellow'] . ', ' . $this->color_codes['red'] . ')',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to Red', 'probd-blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $this->color_codes['purple'] . ', ' . $this->color_codes['red'] . ')',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to Purple', 'probd_blocks' ),
					'gradient' => 'linear-gradient(160deg, ' . $this->color_codes['red'] . ', ' . $this->color_codes['purple'] . ')',
					'slug'     => 'red-to-purple',
				),
			)
		);
	}

}

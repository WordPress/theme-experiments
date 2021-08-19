<?php
/**
 * Block styles.
 *
 * @package Armando
 * @since 1.0.0
 */

/**
 * Register block styles
 */
function armando_register_block_styles() {
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'armando-rounded-corners',
			'label'        => __( 'Rounded corners (Requires background color)', 'armando' ),
			'inline_style' => '
			.is-style-armando-rounded-corners {
				border-radius: 6px;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'armando-rounded-corners',
			'label' => __( 'Rounded corners (Requires background color)', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/cover',
		array(
			'name'         => 'armando-circular-cover',
			'label'        => __( 'Circular image', 'armando' ),
			'inline_style' => '
			.is-style-armando-circular-cover.wp-block-cover,
			.is-style-armando-circular-cover .wp-block-cover__image-background,
			.is-style-armando-circular-cover.wp-block-cover-image,
			.is-style-armando-circular-cover.wp-block-cover-image:before,
			.is-style-armando-circular-cover.wp-block-cover.has-background-dim:not(.has-background-gradient):before {
				border-radius: 50% !important;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'armando-box-shadow',
			'label'        => __( 'Box shadow', 'armando' ),
			'inline_style' => '
			.is-style-armando-box-shadow {
				padding: 1.25em 2.375em;
				border-radius: 2px;
				box-shadow: 0 2px 5px rgb(0 0 0 / 2%), 0 4px 10px rgb(0 0 0 / 4%);
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'         => 'armando-box-shadow-no-padding',
			'label'        => __( 'Box shadow', 'armando' ),
			'inline_style' => '
			.is-style-armando-box-shadow-no-padding {
				border-radius: 2px;
				box-shadow: 0 2px 5px rgb(0 0 0 / 2%), 0 4px 10px rgb(0 0 0 / 4%);
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'armando-box-shadow',
			'label' => __( 'Box shadow', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'armando-box-shadow',
			'label' => __( 'Box shadow', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'armando-box-shadow',
			'label' => __( 'Box shadow', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'armando-border',
			'label'        => __( 'Border', 'armando' ),
			'inline_style' => '
			.is-style-armando-border {
				border: 2px solid currentColor;
				padding: 0.5rem;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'armando-border',
			'label' => __( 'Border', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'         => 'armando-top-bottom-border',
			'label'        => __( 'Top and bottom border', 'armando' ),
			'inline_style' => '
			.is-style-armando-top-bottom-border {
				border-top: 2px solid currentColor;
				border-bottom: 2px solid currentColor;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'armando-top-bottom-border',
			'label' => __( 'Top and bottom border', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'armando-top-bottom-border',
			'label' => __( 'Top and bottom border', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'         => 'armando-vertical-text',
			'label'        => __( 'Vertical', 'armando' ),
			'inline_style' => '
			.is-style-armando-vertical-text {
				writing-mode: vertical-lr;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'armando-vertical-text',
			'label' => __( 'Vertical', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'armando-vertical-text',
			'label' => __( 'Vertical', 'armando' ),

		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'  => 'armando-vertical-text',
			'label' => __( 'Vertical', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'         => 'armando-column-border',
			'label'        => __( 'Inner borders', 'armando' ),
			'inline_style' => '
			.is-style-armando-column-border {
				border: 1px solid currentColor;
				padding: 1.25em 2.375em;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'         => 'armando-columns-border',
			'label'        => __( 'Border', 'armando' ),
			'inline_style' => '
			.is-style-armando-columns-border {
				border: 1px solid currentColor;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'         => 'armando-column-r-l-borders',
			'label'        => __( 'Right and left borders', 'armando' ),
			'inline_style' => '
			.is-style-armando-column-r-l-borders {
				border-left: 1px solid currentColor;
				border-right: 1px solid currentColor;
				padding: 1.25em 2.375em;
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/media-text',
		array(
			'name'         => 'armando-skewed',
			'label'        => __( 'Skewed', 'armando' ),
			'inline_style' => '
			.is-style-armando-skewed {
				transform: rotate(-0.8deg);
			}',
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'armando-skewed',
			'label' => __( 'Skewed', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'armando-skewed',
			'label' => __( 'Skewed', 'armando' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'armando-sticky-header',
			'label' => __( 'Sticky header', 'armando' ),
		)
	);
}
add_action( 'init', 'armando_register_block_styles' );

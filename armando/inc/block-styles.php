<?php
/**
 * Block styles.
 *
 * @package Armando
 * @since 1.0.0
 */

function armando_register_block_styles() {
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/gallery',
		array(
			'name'         => 'armando-hide-caption',
			'label'        => __( 'Hide caption', 'armando' )
			)
		);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/gallery',
		array(
			'name'         => 'armando-gallery-rounded',
			'label'        => __( 'Rounded corners', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'armando-rounded-corners',
			'label'        => __( 'Rounded corners (Requires background color)', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'         => 'armando-rounded-corners',
			'label'        => __( 'Rounded corners (Requires background color)', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'         => 'armando-rounded-corners',
			'label'        => __( 'Rounded corners (Requires background color)', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'armando-box-shadow',
			'label'        => __( 'Box shadow', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'         => 'armando-box-shadow',
			'label'        => __( 'Box shadow', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'         => 'armando-box-shadow',
			'label'        => __( 'Box shadow', 'armando' )
		)
	);


	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/paragraph',
		array(
			'name'         => 'armando-border',
			'label'        => __( 'Border', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'         => 'armando-border',
			'label'        => __( 'Border', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'         => 'armando-border',
			'label'        => __( 'Border', 'armando' )
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/social-links',
		array(
			'name'  => 'armando-social-icons-color',
			'label' => esc_html__( 'Dark blue', 'armando' ),
			'inline_style' => '
			.wp-block-social-links.is-style-armando-social-icons-color a {
				color: var(--wp--preset--color--dark-blue);
			}
			.wp-block-social-links.is-style-armando-social-icons-color .wp-social-link button {
				color: var(--wp--preset--color--dark-blue);
			}
			.wp-block-social-links.is-style-armando-social-icons-color .wp-social-link {
				background: none;
			}',
		)
	);
}
add_action( 'init', 'armando_register_block_styles' );

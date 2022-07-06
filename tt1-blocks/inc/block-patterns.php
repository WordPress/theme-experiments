<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package TT1_Blocks
 * @since 0.1
 */

/**
 * Register Block Pattern Category.
 */
register_block_pattern_category(
	'tt1-blocks',
	array( 'label' => esc_html__( 'TT1 Blocks', 'tt1-blocks' ) )
);

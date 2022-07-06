<?php
/**
 * Title: Media and Text Article Title
 * Slug: tt1-blocks/media-text-article-title
 * Categories: tt1-blocks
 * Block Types: core/media-text
 * Description: A Media & Text block with a big image on the left and a heading on the right. The heading is followed by a separator and a description paragraph.
 * ViewportWidth: 1440
 *
 * @package TT1_Blocks
 * @since 0.4.9
 */
?>

<!-- wp:media-text {"mediaId":1752,"mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/playing-in-the-sand.jpg","mediaType":"image","className":"is-style-twentytwentyone-border"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-twentytwentyone-border">
	<figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/playing-in-the-sand.jpg" alt="<?php esc_attr_e( '&#8220;Playing in the Sand&#8221; by Berthe Morisot', 'tt1-blocks' ); ?>" class="wp-image-1752"/></figure><div class="wp-block-media-text__content">
		<!-- wp:heading {"align":"center"} --><h2 class="has-text-align-center"><?php esc_html_e( 'Playing in the Sand', 'tt1-blocks' ); ?></h2><!-- /wp:heading -->
		<!-- wp:separator {"className":"is-style-dots"} --><hr class="wp-block-separator is-style-dots"/>
		<!-- /wp:separator -->
		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><?php echo wp_kses_post( __( 'Berthe Morisot<br>(French, 1841-1895)', 'tt1-blocks' ) ); ?></p><!-- /wp:paragraph -->
	</div>
</div><!-- /wp:media-text -->


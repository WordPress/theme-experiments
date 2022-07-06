<?php
/**
 * Title: Two Images Showcase
 * Slug: tt1-blocks/two-images-showcase
 * Categories: tt1-blocks
 * Block Types: core/columns
 * Description: A Media & Text block with a big image on the left and a smaller one with bordered frame on the right.
 * ViewportWidth: 1440
 *
 * @package TT1_Blocks
 * @since 0.4.9
 */

?>
<!-- wp:media-text {"mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Daffodils.jpg","mediaType":"image"} --><div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Daffodils.jpg" alt="<?php esc_attr_e( '&#8220;Daffodils&#8221; by Berthe Morisot', 'tt1-blocks' ); ?>" /></figure>
<div class="wp-block-media-text__content"><!-- wp:image {"align":"center","width":400,"height":512,"sizeSlug":"large","className":"is-style-twentytwentyone-image-frame"} --><figure class="wp-block-image aligncenter size-large is-resized is-style-twentytwentyone-image-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/self-portrait-1885.jpg" alt="<?php esc_attr_e( '&#8220;Self portrait&#8221; by Berthe Morisot', 'tt1-blocks' ); ?>" width="400" height="512"/></figure><!-- /wp:image -->
</div></div><!-- /wp:media-text -->

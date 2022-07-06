<?php
/**
 * Title: Overlapping Images and Text
 * Slug: tt1-blocks/overlapping-images-and-text
 * Categories: tt1-blocks
 * Block Types: core/columns
 * Description: An overlapping columns block with two images and a text description.
 * ViewportWidth: 1024
 *
 * @package TT1_Blocks
 * @since 0.4.9
 */

?>
<!-- wp:columns {"verticalAlignment":null,"align":"wide","className":"is-style-twentytwentyone-columns-overlap"} -->
<div class="wp-block-columns alignwide is-style-twentytwentyone-columns-overlap">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {sizeSlug":"full"} --><figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/the-garden-at-bougival-1884.jpg" alt="<?php esc_attr_e( '&#8220;The Garden at Bougival&#8221; by Berthe Morisot', 'tt1-blocks' ); ?>"/></figure>
		<!-- /wp:image -->
	</div><!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"bottom"} -->
	<div class="wp-block-column is-vertically-aligned-bottom">
		<!-- wp:group {"className":"is-style-twentytwentyone-border","backgroundColor":"green"} -->
		<div class="wp-block-group is-style-twentytwentyone-border has-green-background-color has-background">
			<div class="wp-block-group__inner-container">
				<!-- wp:paragraph {"fontSize":"extra-large","style":{"typography":{"lineHeight":"1.4"}}} -->
				<p class="has-extra-large-font-size" style="line-height:1.4"><?php esc_html_e( 'Beautiful gardens painted by Berthe Morisot in the late 1800s', 'tt1-blocks' ); ?></p><!-- /wp:paragraph -->
			</div>
		</div><!-- /wp:group -->
	</div><!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {sizeSlug":"full"} --><figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/villa-with-orange-trees-nice.jpg" alt="<?php esc_attr_e( '&#8220;Villa with Orange Trees, Nice&#8221; by Berthe Morisot', 'tt1-blocks' ); ?>"/></figure><!-- /wp:image -->
	</div><!-- /wp:column -->
</div>
<!-- /wp:columns -->

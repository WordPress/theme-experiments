<?php
/**
 * Title: Overlapping Images
 * Slug: tt1-blocks/overlapping-images
 * Categories: tt1-blocks
 * Block Types: core/columns
 * Description: Three images inside an overlapping columns block.
 * ViewportWidth: 1440
 *
 * @package TT1_Blocks
 * @since 0.4.9
 */

?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-twentytwentyone-columns-overlap"} --><div class="wp-block-columns alignwide are-vertically-aligned-center is-style-twentytwentyone-columns-overlap">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"align":"full","sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="<?php esc_attr_e( '&#8220;Roses Trémières&#8221; by Berthe Morisot', 'tt1-blocks' ); ?>"/>
		</figure><!-- /wp:image -->
		<!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
		<!-- wp:image {"align":"full","sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-the-bois-de-boulogne.jpg" alt="<?php esc_attr_e( '&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'tt1-blocks' ); ?>"/></figure><!-- /wp:image -->
	</div><!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
		<!-- wp:image {"align":"full",sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/young-woman-in-mauve.jpg" alt="<?php esc_attr_e( '&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'tt1-blocks' ); ?>"/></figure>
			<!-- /wp:image -->
	</div><!-- /wp:column -->
</div><!-- /wp:columns -->

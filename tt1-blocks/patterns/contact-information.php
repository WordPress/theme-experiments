<?php
/**
 * Title: Contact Information
 * Slug: tt1-blocks/contact-information
 * Categories: tt1-blocks
 * Block Types: core/columns, core/social-links
 * Keywords: contact
 * Description: A block with 3 columns that display contact information and social media links.
 *
 * @package TT1_Blocks
 * @since 0.4.9
 */

?>
<!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph --><p><a href="mailto:#"><?php esc_html_e( 'example@example.com', 'tt1-blocks' ); ?><br></a>
		<?php esc_html_e( '123-456-7890', 'tt1-blocks' ); ?></p><!-- /wp:paragraph -->
	</div><!-- /wp:column -->
	<!-- wp:column --><div class="wp-block-column">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( '123 Main Street', 'tt1-blocks' ); ?><br>
		<?php esc_html_e( 'Cambridge, MA, 02139', 'tt1-blocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div><!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:social-links {"align":"right"} -->
		<ul class="wp-block-social-links alignright">
		<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
		<!-- wp:social-link {"url":"https://www.facebook.com/WordPress/","service":"facebook"} /-->
		<!-- wp:social-link {"url":"https://twitter.com/WordPress","service":"twitter"} /-->
		<!-- wp:social-link {"service":"instagram"} /--><!-- wp:social-link {"service":"linkedin"} /-->
		<!-- wp:social-link {"service":"youtube"} /-->
		<!-- wp:social-link {"url":"https://www.youtube.com/wordpress","service":"youtube"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div><!-- /wp:column -->
</div><!-- /wp:columns -->

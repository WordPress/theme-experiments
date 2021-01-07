<?php
/**
 * The template for displaying comments.
 * This file is temporary, to prevent breaking.
 *
 * @package Armando
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

if ( have_comments() ) :
	?>
	<?php the_comments_navigation(); ?>

	<ol class="comment-list">
		<?php
		wp_list_comments(
			array(
				'style'      => 'ul',
				'short_ping' => true,
			)
		);
		?>
	</ol><!-- .comment-list -->

	<?php
	the_comments_navigation();
endif; // Check for have_comments().

// If comments are closed let's leave a little note, shall we?
if ( ! comments_open() ) :
	?>
	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'armando' ); ?></p>
	<?php
endif;

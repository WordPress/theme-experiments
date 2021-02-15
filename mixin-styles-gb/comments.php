<?php
if ( post_password_required() ) { ?>
	<p class="nocomments"><?php esc_html_e( 'This post is password protected. Enter the password to view comments.', 'mixin-styles-gb' ); ?></p>
	<?php return;
}

if ( have_comments() ) : ?>
<div id="comments_wrapper">
<h4 id="comments">
<?php comments_number(
	__( 'No Comments', 'mixin-styles-gb'),
	__( 'One Comment', 'mixin-styles-gb'),
	__( '% Comments', 'mixin-styles-gb')
	); ?>
</h4>
<ul class="commentlist">
	<?php wp_list_comments() ?>
</ul>
	<?php if( get_comments_number() > get_option( 'comments_per_page' ) ) : ?>

	<div class="comments-navigation">
		<div class="navleft"><?php previous_comments_link(); ?></div>
		<div class="navright"><?php next_comments_link(); ?></div>
	</div>

	<?php endif; ?>
</div> <!-- closes #comments_wrapper -->

<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) :
		// If comments are open, but there are no comments.
		echo '<div id="comments_wrapper"><p>';
		esc_html_e( 'Be the first to comment!', 'mixin-styles-gb' );
		echo '</p></div>';
	else : // comments are closed
		return;
	endif;
endif;

comment_id_fields();
comment_form();
?>

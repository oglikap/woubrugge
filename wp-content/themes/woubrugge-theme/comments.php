<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Nul Energie Huis Woubrugge
 * @since Nul Energie Huis Woubrugge 1.0
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _n( 'One comment', '%1$s comments', get_comments_number(), 'woubrugge' ),
        number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
          'style'      => 'ul',
  				'short_ping' => true,
  				'avatar_size'=> 0,
					'callback' => 'woubrugge_comments'
				) );
			?>
		</ol><!-- .comment-list -->

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'woubrugge' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- .comments-area -->

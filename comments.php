<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raduga10
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<!--=============================================
=            Comment section         =
=============================================-->

										
<div id="comments" class="comments-area comment-section mb-md-30 mb-sm-30">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="comments-title comment-counter">

			<?php
			$raduga10_comment_count = get_comments_number();
			if ( '1' === $raduga10_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( '1 комментарий к &ldquo;%1$s&rdquo;', 'raduga10' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s комментарий к &ldquo;%2$s&rdquo;', '%1$s комментариев к &ldquo;%2$s&rdquo;', $raduga10_comment_count, 'comments title', 'raduga10' ) ),
					number_format_i18n( $raduga10_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<!--=======  comment container  =======-->
		<div class="comment-container mb-40">


			<!-- <ol class="comment-list"> -->
				<?php
				// wp_list_comments(
				// 	array(
				// 		'style'      => 'ol',
				// 		'short_ping' => true,
				// 	)
				// );
				wp_list_comments( [
					'walker'            => null,
					'max_depth'         => '',
					'style'             => 'div',
					'callback'          => null,
					'end-callback'      => null,
					'type'              => 'all',
					'reply_text'        => 'Reply',
					'page'              => '',
					'per_page'          => '',
					'avatar_size'       => 32,
					'reverse_top_level' => null,
					'reverse_children'  => '',
					'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
					'short_ping'        => false,    // С версии 3.6,
					'echo'              => true,     // true или false
				] ); 
				?>

			<!-- </ol> -->
			<!-- .comment-list -->
		
		</div>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'raduga10' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raduga10
 */

?>

<!--=======  single blog post  =======-->
<div class="single-blog-post mb-35">
	<div class="row">
		<div class="col-md-6">
				<div class="single-blog-post-media mb-20">
						<div class="image">
							
								<?php raduga10_post_thumbnail(); ?>
						</div>
				</div>
		</div>
		<div class="col-md-6">
				<div class="single-blog-post-content">
						<h3 class="post-title"> 
							<a href="<?php echo get_the_permalink(); ?>"> 
								<?php the_title(); ?>
							</a>
						</h3>
						<div class="post-meta">
							<p>
								<span><i class="fa fa-user-circle"></i> </span>
								<?php
									
									raduga10_posted_by();
								?>

								<span class="separator">|</span>

								<span><i class="fa fa-calendar"></i></span>
								<?php raduga10_posted_on(); ?>
							</p>
								<!-- <p><span><i class="fa fa-user-circle"></i> </span>  <span class="separator">|</span> <span><i class="fa fa-calendar"></i> <a href="#">24 August, 2018</a></span></p> -->
						</div>

						<p class="post-excerpt">
							<?php
								the_excerpt();
								// the_content(
								// 	sprintf(
								// 		wp_kses(
								// 			/* translators: %s: Name of current post. Only visible to screen readers */
								// 			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'raduga10' ),
								// 			array(
								// 				'span' => array(
								// 					'class' => array(),
								// 				),
								// 			)
								// 		),
								// 		wp_kses_post( get_the_title() )
								// 	)
								// );

								// wp_link_pages(
								// 	array(
								// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'raduga10' ),
								// 		'after'  => '</div>',
								// 	)
								// );
							?>
						</p>
						<a href="<?php echo get_the_permalink(); ?>" class="blog-readmore-btn">Читать</a>
						
				</div>
		</div>
	</div>
</div>
<!--=======  End of single blog post-<?php the_ID(); ?>  =======-->




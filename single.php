<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package raduga10
 */

get_header();
?>

<!--=============================================
	=            breadcrumb area         =
	=============================================-->

	<?php
	/**
	 * breadcrumbs_parts hook.
	 *
	 * @hooked raduga10_breadcrumbs_chunk - 15
	 *
	 */
	do_action( 'raduga10_breadcrumbs_parts' ); 
	?>

	<!--=====  End of breadcrumb area  ======-->

	<!--=============================================
    =            blog page content         =
    =============================================-->



	<div class="blog-page-content blog-page mb-50">
		<div class="container">
			<div class="row">
			
				<div class="col-12 col-lg-9">
					<!--=======  blog post container  =======-->
					
					<div class="blog-single-post-container mb-30">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'blog');

							// the_post_navigation(
							// 	array(
							// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'raduga10' ) . '</span> <span class="nav-title">%title</span>',
							// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'raduga10' ) . '</span> <span class="nav-title">%title</span>',
							// 	)
							// );

							// If comments are open or we have at least one comment, load up the comment template.

						?>

					</div>

						<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					
				</div>
				
				<div class="col-12 col-lg-3">
						<!--=======  page sidebar   =======-->

						<?php 
							get_sidebar('blog');
						?>
					
				</div>

			</div>	
		</div>
	</div>

<?php
//get_sidebar();
get_footer();

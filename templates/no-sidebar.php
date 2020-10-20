<?php
/**
 * Template Name: Полная ширина
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

	<div class="page-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
					<?php
					while ( have_posts() ) :
						the_post();

						the_content();

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div><!-- #div -->

<?php
//get_sidebar();
get_footer();
<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package raduga10
 */

get_header();
?>

	<!--=============================================
	=            breadcrumb area         =
	=============================================-->
	
	<div class="breadcrumb-area pt-15 pb-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  breadcrumb container  =======-->
					
					<div class="breadcrumb-container">
						<nav>
							<ul>
								<li class="parent-page"><a href="/">Главная</a></li>
							
							</ul>
						</nav>
					</div>
					
					<!--=======  End of breadcrumb container  =======-->
				</div>
			</div>
		</div>
	</div>
	
    <!--=====  End of breadcrumb area  ======-->
    
    <!--=============================================
    =            shop page content         =
    =============================================-->
    
    <div class="shop-page-content mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--=======  page sidebar   =======-->
                    <?php
											get_sidebar();
										?>
                    
                    <!--=======  End of page sidebar   =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">

									<?php if ( have_posts() ) : ?>

									<!--=======  slider banner  =======-->
									<div class="slider-banner home-one-banner banner-bg banner-bg-1 mb-30">
										<div class="banner-text">
												<h1>
													<?php
													/* translators: %s: search query. */
													printf( esc_html__( 'Search Results for: %s', 'raduga10' ), '<span>' . get_search_query() . '</span>' );
													?>
												</h1>
												<!-- <p class="big-text">Lamps Light Color</p>
												<p>Only from $209</p> -->
										</div>
									</div>
									<!--=======  End of slider banner  =======-->

							
								
									<!--=======  shop product display area  =======-->
									<div class="blog-post-container search-container">
										<div class="row">
											

												<?php
													/* Start the Loop */
													while ( have_posts() ) :
														the_post();

														/**
														 * Run the loop for the search to output the results.
														 * If you want to overload this in a child theme then include a file
														 * called content-search.php and that will be used instead.
														 */
														get_template_part( 'template-parts/content', 'search' );

													endwhile;

												?>

												<!--=======  pagination area  =======-->
											
												<!-- <div class="pagination-area mb-md-50 mb-sm-50"> -->
														<!-- <ul>
																<li><a class="active" href="#">1</a></li>
																<li><a href="#">2</a></li>
																<li><a href="#">3</a></li>
																<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
														</ul> -->
														<?php 
																the_posts_navigation();
														?>
												<!-- </div> -->
														
												<!--=======  End of pagination area  =======-->


												<?php
													else :

														get_template_part( 'template-parts/content', 'none' );

													endif;
												?>
											
											
										</div>
									</div>
									
		
									<!--=======  End of shop product display area  =======-->

								
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of shop page content  ======-->




<?php

get_footer();

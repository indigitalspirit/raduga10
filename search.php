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

									<!--=======  Shop header  =======-->
						
									<div class="shop-header mb-30">
											<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
															<!--=======  view mode  =======-->
															
															<div class="view-mode-icons mb-xs-10">
																	<a class="active" href="#" data-target="grid"><i class="icon ion-md-apps"></i></a>
																	<a href="#" data-target="list"><i class="icon ion-ios-list"></i></a>
															</div>
															
															<!--=======  End of view mode  =======-->
															
													</div>
													<div class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
															<!--=======  Sort by dropdown  =======-->
															
															<div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
																	<p class="mr-10 mb-0">Сортировать по: </p>
																	<select name="sort-by" id="sort-by" class="nice-select">
																			<option value="0">Популярности</option>
																			<option value="0">Рейтингу</option>
																			<option value="0">Новизне</option>
																			<option value="0">Цене: по возрастанию</option>
																			<option value="0">Цене: по убыванию</option>
																	</select>
															</div>
															
															<!--=======  End of Sort by dropdown  =======-->

															<p class="result-show-message">Показаны 1–12 из 41 результатов</p>
													</div>
											</div>
									</div>
									
									<!--=======  End of Shop header  =======-->



								
									<!--=======  shop product display area  =======-->
									<div class="shop-product-wrap grid row mb-30 no-gutters">
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

										<!--=============================================
	=            Quick view modal         =
	=============================================-->
	<!-- TODO -->

									<?php


									else :

										get_template_part( 'template-parts/content', 'none' );

									endif;
									?>
											
									</div>
									
		
									<!--=======  End of shop product display area  =======-->

								
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of shop page content  ======-->




<?php

get_footer();

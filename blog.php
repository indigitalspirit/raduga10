<?php
/**
 * Template Name: Страница блога
 * 
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

	<div class="blog-page-content blog-page bl mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="blog-page__title">
					
						<?php
							the_title( '<h1 class="page-title">', '</h1>' );
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
          <!--=======  page sidebar   =======-->

					<?php 
						get_sidebar('blog');
					?>
				
				</div>

				<div class="col-lg-9 order-1 order-lg-2">
					<!--=======  blog post container  =======-->
					
					<div class="blog-post-container">
						<div class="row">
							<div class="col-md-12">
						
								<?php 

									// $posts_query = new WP_Query( array(
									// 	'post_type' => 'post',
									// 	'posts_per_page' => '5',
									// 	'paged' => get_query_var('paged') ?: 1 // страница пагинации
									// ) );

									$posts_query = get_posts( array(
										'numberposts' => 5,
										'category'    => 0,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'include'     => array(),
										'exclude'     => array(),
										'meta_key'    => '',
										'meta_value'  =>'',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									) );


							
											// формат вывода the_title() ...
									
								
								if ( $posts_query ) {
									/* Start the Loop */
									foreach( $posts_query as $post ) {
										setup_postdata($post);
									// while ( $posts_query->have_posts() ) :
									// 	$posts_query->the_post();

										/*
										* Include the Post-Type-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Type name) and that will be used instead.
										*/
										get_template_part( 'template-parts/content', 'archive' );

									//endwhile;
									


									$pagination_args = array(
										'show_all'           => false, // показаны все страницы участвующие в пагинации
										'end_size'           => 1,     // количество страниц на концах
										'mid_size'           => 1,     // количество страниц вокруг текущей
										'prev_next'          => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
										'prev_text'          => __('<i class="fa fa-angle-double-left"></i>'),
										'next_text'          => __('<i class="fa fa-angle-double-right"></i>'),
										'add_args'           => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
										'add_fragment'       => '',     // Текст который добавиться ко всем ссылкам.
										'screen_reader_text' => __( '' ),
										'aria_label'         => __( '' ), // aria-label="" для nav элемента. С WP 5.3
										'class'              => 'pagination',  // class="" для nav элемента. С WP 5.5
									);
								?>
								<!--=======  pagination area  =======-->
								<div class="pagination-area mb-sm-50 mb-md-50">
									<ul>
											<li>
												
												<?php previous_posts_link('<i class="fa fa-angle-double-left"></i>', 0); ?>
											</li>
											<li>
												
												<?php next_posts_link('<i class="fa fa-angle-double-right"></i>', 0); ?>
											</li>								
									</ul>
									<?php 
									//posts_nav_link(); 
									//the_posts_pagination();

									
										//the_posts_navigation();
									?>
								</div>

								

								<?php
								wp_reset_postdata(); // сбрасываем переменную $post
									

									//echo get_the_posts_pagination($pagination_args);
									//the_posts_navigation();
								
								} 
							}
							else {

									get_template_part( 'template-parts/content', 'none' );
								}
							
								//endif;
								?>
							
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php

get_footer();

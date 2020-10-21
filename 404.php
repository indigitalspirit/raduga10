<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package raduga10
 */

get_header();
?>

	<div class="page-section mb-50">
		<div class="container">
			<div class="row">

				<div class="col-12 text-center">
				
					<div class="error-404 not-found">
						
						<h1 class="page-title">К сожалению, страница не найдена</h1>
					
						<div class="page-content">
							<p>
							Попробуйте воспользоваться поиском на сайте
							</p>

								<?php
								get_search_form();
								?>

						</div><!-- .page-content -->
					</div><!-- .error-404 -->
				
				</div>

			</div>
		</div>	
	</div><!-- #main -->

<?php
get_footer();

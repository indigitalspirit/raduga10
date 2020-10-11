<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raduga10
 */

?>


<!--=======  slider banner  =======-->
<div class="slider-banner home-one-banner banner-bg banner-bg-1 mb-30">
	<div class="banner-text">
			<h1>
			<?php esc_html_e( 'Nothing Found', 'raduga10' ); ?>
			</h1>
			<!-- <p class="big-text">Lamps Light Color</p>
			<p>Only from $209</p> -->

			
	</div>
</div>
<!--=======  End of slider banner  =======-->


<div class="shop-page-content mb-50">
	<div class="container">
			<div class="row">
				<div class="col-12">
					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'raduga10' ); ?></p>
					<?php
						get_search_form();
					?>
				</div>
			</div>
	</div>
</div>



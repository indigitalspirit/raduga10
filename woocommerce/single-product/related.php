<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<!--=============================================
    =            related product slider         =
    =============================================-->
	<!-- 	<section class="related products"> -->
	<div class="related products related-product-slider-area mb-50">
        <div class="container">
            <div class="row">

				<?php
				$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

				if ( $heading ) :
					?>
					<div class="col-lg-12">
					<!--=======  section title  =======-->
					
						<div class="section-title">
							<h2><?php echo esc_html( $heading ); ?></h2>
						</div>

						<!--=======  End of section title  =======-->
					</div>
					
				<?php endif; ?>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<!--=======  tab product slider  =======-->
						<div class="fl-slider tab-product-slider slick-initialized slick-slider">
							<button class="slick-prev slick-arrow" style="">
								<i class="fa fa-angle-left"></i>
							</button>
<!-- 							<div class="slick-list draggable">
								<div class="slick-track" style="opacity: 1; width: 3712px; transform: translate3d(-928px, 0px, 0px);"> -->
									

						<?php //woocommerce_product_loop_start(); ?>

							<?php foreach ( $related_products as $related_product ) : ?>

									<?php
									$post_object = get_post( $related_product->get_id() );

									setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

									wc_get_template_part( 'content', 'product' );
									?>

							<?php endforeach; ?>
										
<!-- 								</div>
							</div> -->
						</div>
						<?php //woocommerce_product_loop_end(); ?>
						<!--=======  End of tab product slider  =======-->
					</div>
					
				</div>
			</div>
		</div>
	
	<?php
endif;

wp_reset_postdata();

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>





<!--=============================================
	=            Quick view modal         =
	=============================================-->
	
	<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25 product-image-slider__wrapper">
							<div class="product-image-slider fl-product-image-slider fl3-product-image-slider quickview-product-image-slider">
								<?php
								
								
								// $attachment_id = get_post_thumbnail_id( $product->get_id() );
								// $product_thumb = wp_get_attachment_image_url( $attachment_id, 'shop_single');
								?>
								<!-- <img src="<?php //echo $product_thumb; ?>" alt=" " class="img-responsive" /> -->
							</div>
							<!-- end of single product tabstyle one image gallery -->
						</div>
						<div class="col-lg-7 col-md-6 col-xs-12">
							<!-- product quick view description -->
							<div class="product-feature-details">
								<h2 class="product-title mb-15"><?php //echo $product->get_name(); ?></h2>
								<?php 
									// $regular_price = $product->get_regular_price();
									// $price = $product->get_price();
									// $sale_price = $product->get_sale_price();
									
								?>
								<h2 class="product-price mb-15">
									
							
								</h2>

								<p class="product-description mb-20">
									<?php //echo $product->get_description(); ?>
								</p>
								<div class="cart-buttons mb-20">
									<div class="pro-qty mr-10">
										<input type="text" value="1">
										<a href="#" class="inc qty-btn">+</a>
										<a href="#" class="dec qty-btn">-</a>
									</div>

									<a href="#" data-quantity="1" class="button  add_to_cart_button ajax_add_to_cart w3ls-cart fl-btn"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>

									<!-- <a href="https://raduga10.anastasia-pavlova.com/product/hoodie/" data-quantity="1" class="button product_type_variable add_to_cart_button ajax_add_to_cart w3ls-cart fl-btn" data-product_id="58" data-product_sku="woo-hoodie" aria-label="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo."><i class="fa fa-shopping-cart"></i>Подробнее</a> -->

										<?php
										// printf( '<a href="%s" data-quantity="%s" class="%s" %s><i class="fa fa-shopping-cart"></i>%s</a>',
										// 	esc_url( $product->add_to_cart_url() ),
										// 	esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
										// 	'button product_type_'. $product->get_type() .' add_to_cart_button ajax_add_to_cart w3ls-cart fl-btn',
										// 	'data-product_id="' . $product->get_id() . '" data-product_sku="' . $product->get_sku() . '" aria-label="'. $product->get_description() .'"',
										// 	esc_html( $product->add_to_cart_text() )
										// )
										?>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					
				</div>
				
				<!-- ====== Preloader ======  -->
				<div class="loading">
					<div class="load-circle"></div>
				</div>
				<!-- ======End Preloader ======  -->

			</div>

		</div>
	</div>
	<!--=====  End of Quick view modal  ======-->
	
	
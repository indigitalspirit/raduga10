<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_action( 'wp_ajax_ajax_quick_view', 'estore_quick_view_product_callback' );
add_action( 'wp_ajax_nopriv_ajax_quick_view', 'estore_quick_view_product_callback' );
function estore_quick_view_product_callback(){
	
	if ( ! wp_verify_nonce( $_POST['nonce'], 'quick-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}
	
	$product = wc_get_product(esc_attr($_POST['id']));
	ob_start();
	?>
	
<!-- 	<div class="modal-body"> -->
		<div class="row">
			<div class="col-lg-5 col-md-6 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25">
				<?php
				$attachment_id = get_post_thumbnail_id( $product->get_id() );
				$product_thumb = wp_get_attachment_image_url( $attachment_id, 'shop_single');
				?>
				<img src="<?php echo $product_thumb; ?>" alt=" " class="img-responsive" />
			<!-- end of single product tabstyle one image gallery -->
			</div>
			<div class="col-lg-7 col-md-6 col-xs-12">
				<!-- product quick view description -->
				<div class="product-feature-details">
					<h2 class="product-title mb-15"><?php echo $product->get_name(); ?></h2>
					<?php 
						$regular_price = $product->get_regular_price();
						$price = $product->get_price();
						$sale_price = $product->get_sale_price();
						
					?>
					<h2 class="product-price mb-15">
						<?php if( $regular_price !== '' ):?>
						<span class="main-price discounted"><?php echo $regular_price; ?></span>
						<?php endif;?>
						
						<?php if( $sale_price !== '' ):?>
						<span class="discounted-price"><?php echo $sale_price; ?></span>
						<?php endif;?>
						
						<span class="discount-percentage">Save 8%</span>
						<?php //echo $product->get_price_html();
						//get_pr(  $product, $die = false );
						?>
					</h2>

					<p class="product-description mb-20">
						<?php echo $product->get_description(); ?>
					</p>
					
					<div class="cart-buttons mb-20">
						<div class="pro-qty mr-10">
							<input type="text" value="1">
							<a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a>
						</div>
<!-- 						<div class="add-to-cart-btn">
							<a href="#" class="fl-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
						</div> -->
							<?php
							printf( '<a href="%s" data-quantity="%s" class="%s" %s><i class="fa fa-shopping-cart"></i>%s</a>',
								esc_url( $product->add_to_cart_url() ),
								esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
								'button product_type_'. $product->get_type() .' add_to_cart_button ajax_add_to_cart w3ls-cart fl-btn',
								'data-product_id="' . $product->get_id() . '" data-product_sku="' . $product->get_sku() . '" aria-label="'. $product->get_description() .'"',
								esc_html( $product->add_to_cart_text() )
							)?>
<!-- 						</div> -->
					</div>
				</div>
			</div>
		</div>
<!-- 	</div> -->
	<?php
	$data['product'] = ob_get_clean();
	wp_send_json($data);
	wp_die();
	
// 	$product = wc_get_product(esc_attr($_POST['id']));
// 	$product_id = esc_attr($_POST['id']);
	//ob_start();
	
// 	$data['product'] = esc_attr($_POST['id']);
// 	echo json_encode($sql);
// 	wp_send_json($data);
// 	$return = array(
// 		'message'   => 'Сохранено',
// 		'id'        => $product_id
// 	);

// 	wp_send_json( $return );
// 	//echo json_encode($return);
// 	wp_die();
}
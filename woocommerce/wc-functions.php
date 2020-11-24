<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


	add_action( 'woocommerce_before_main_content', 'raduga10_add_breadcrumbs', 20 );
	function raduga10_add_breadcrumbs(){
	?>
	<div class="breadcrumb-area pt-15 pb-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  breadcrumb container  =======-->
					
					<div class="breadcrumb-container">
			      <?php woocommerce_breadcrumb(); ?>
            </div>
					
					<!--=======  End of breadcrumb container  =======-->
				</div>
			</div>
		</div>
	</div>
<?php
	}



	


/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
 function raduga10_woocommerce_scripts() {
	//wp_enqueue_style( 'raduga10-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION );
	wp_enqueue_style( 'raduga10-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'raduga10-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'raduga10_woocommerce_scripts' ); 


/// UPDATE MINI-CART AFTER ORDER IN QUICK VIEW WINDOW ///
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

 


function iconic_cart_count_fragments( $fragments ) {

    


    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';

    


    return $fragments;

    

}



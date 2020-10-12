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



	add_action( 'woocommerce_before_single_product', 'estore_wrapper_product_start', 5 );
	function estore_wrapper_product_start() {
?>
  <!--=============================================
    =            single product content         =
    =============================================-->
    <div class="single-product-content-area mb-50">
      
        
<?php
	}


	add_action( 'woocommerce_after_single_product', 'estore_wrapper_product_end', 5 );
	function estore_wrapper_product_end() {
  ?>
        
      
	</div>
<?php
	}



	add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_image_start', 5 );
	function estore_wrapper_product_image_start() {
?>
  <div class="container"> 
        <div class="row">
  <div class="col-lg-5 col-md-6 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25">
	
<?php
	}
	add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_image_end', 25 );
	function estore_wrapper_product_image_end() {
?>
  
  </div>
	
<?php
	}

	add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_entry_start', 30 );
	function estore_wrapper_product_entry_start() {
?>

	<div class="col-lg-7 col-md-6 col-xs-12">
<?php
	}
	add_action( 'woocommerce_after_single_product_summary', 'estore_wrapper_product_entry_end', 5 );
	function estore_wrapper_product_entry_end() {
?>
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




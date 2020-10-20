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



add_filter( 'woocommerce_short_description', 'raduga10_short_description', 10 );
function raduga10_short_description($content){
?>
	<div class="product-description mb-20">
		<?php echo $content;?>
	</div>
<?php
}


/*
 * Tabs single product
 */


add_filter( 'woocommerce_product_tabs', 'raduga10_product_tabs_filter', 100 );
function raduga10_product_tabs_filter( $tabs ) {
	if ( ! empty( $tabs ) ) : ?>
		
		<div class="woocommerce-tabs wc-tabs-wrapper product-description-review-area mb-50">
			<div class="container">
            	<div class="row">
                	<div class="col-lg-12">
                    <!--=======  product description review container  =======-->
			
		
					<div class="tab-slider-wrapper product-description-review-container">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<?php foreach ( $tabs as $key => $tab ) : ?>
									<a class="nav-item nav-link active" id="<?php echo esc_attr( $key ); ?>_tab" data-toggle="tab" href="#product-<?php echo esc_attr( $key ); ?>" role="tab" aria-selected="true"><?php echo apply_filters( 'woocommerce_product_' . $key .
																		'_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
									
								<?php endforeach; ?>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<?php foreach ( $tabs as $key => $tab ) : ?>
							
							<div class="tab-pane fade active show" id="product-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="<?php echo esc_attr( $key ); ?>-tab">
                                <!--=======  product description  =======-->
								<div class="product-description">
							
									<?php if ( isset( $tab['callback'] ) ) {
										call_user_func( $tab['callback'], $key, $tab );
									} ?>
									
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
//                 jQuery(document).ready(function () {
//                     jQuery('#horizontalTab1').easyResponsiveTabs({
//                         type: 'default', //Types: default, vertical, accordion
//                         width: 'auto', //auto or any width like 600px
//                         fit: true   // 100% fit in a container
//                     });
//                 });
			</script>
		</div>
	</div>
	
	<?php endif;
}

add_filter( 'woocommerce_product_additional_information_heading', 'raduga10_heading_tab_desc_remove' );
add_filter( 'woocommerce_product_description_heading', 'raduga10_heading_tab_desc_remove' );
function raduga10_heading_tab_desc_remove($header){
	$header = false;
	return $header;
}
/*
 * Tabs reviews single product
 */
add_filter( 'woocommerce_review_gravatar_size', 'raduga10_resize_gravatar' );
function raduga10_resize_gravatar(){
return '80';
}

remove_filter( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10 );
add_action( 'woocommerce_review_after_comment_text', 'woocommerce_review_display_rating', 10 );







/***** archive pages ****/
add_action( 'woocommerce_before_main_content', 'raduga10_add_sidebar_only_archive', 50 );
function raduga10_add_sidebar_only_archive() {
	if ( ! is_product() ) {
		woocommerce_get_sidebar();
	}
}

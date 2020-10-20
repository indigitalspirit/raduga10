<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'woocommerce_before_main_content', 'raduga10_archive_wrapper_start', 40 );
function raduga10_archive_wrapper_start(){
	if ( ! is_product() ) {
?>

<!--=============================================
    =            shop page content         =
    =============================================-->
	<div class="shop-page-content mb-50">
        <div class="container">
            <div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
<?php
	
	
		woocommerce_get_sidebar();
	
?>
	</div>
<?php
		}
					
}
add_action( 'woocommerce_after_main_content', 'raduga10_archive_wrapper_end', 30 );
function raduga10_archive_wrapper_end(){
?>
				
			</div>
		</div>
	</div>

<!--=====  End of shop page content  ======-->


	<?php
}

add_action( 'woocommerce_before_main_content', 'raduga10_archive_content_wrapper_start', 60 );
function raduga10_archive_content_wrapper_start(){
	?>
	<div class="col-lg-9 order-1 order-lg-2">
	<?php
}
add_action( 'woocommerce_after_main_content', 'raduga10_archive_content_wrapper_end', 25 );
function raduga10_archive_content_wrapper_end(){
	?>
	</div>
	<?php
}




add_filter( 'woocommerce_show_page_title', 'raduga10_hide_title_shop' );
function raduga10_hide_title_shop( $hide ) {
	if ( is_shop() ) {
		//$hide = false;
	}
	
	return $hide;
}




add_filter( 'post_class', 'raduga10_add_classes_product', 10, 3  );
function raduga10_add_classes_product($classes){
	if( is_shop() || is_product_taxonomy()) {
		//get_pr($classes, $die=false);
		$classes[] = 'col-lg-3 col-md-6 col-sm-6 col-12';
		
	}
	
	return $classes;

}




/*** product card hooks ***/

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

add_action( 'woocommerce_before_shop_loop_item', 'raduga10_loop_product_div_open' , 5);
function raduga10_loop_product_div_open(){
	?>
	<div class="fl-product shop-grid-view-product">
		<div class="image">
	<?php
		//echo '<a href="' . get_permalink() . '">';
}

add_action( 'woocommerce_after_shop_loop_item', 'raduga10_loop_product_div_close' , 20);
function raduga10_loop_product_div_close(){
	?>
		</div>
	<?php
}


remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title',10 );
add_action( 'woocommerce_shop_loop_item_title', 'raduga10_template_loop_product_title' , 9);
function raduga10_template_loop_product_title(){
	//echo '</a>';
	?>
		
	</div>	
	<div class="content">
	<?php
	echo '<h2 class="product-title"> <a href="'. get_permalink() .'">' . get_the_title() . '</a></h2>';
	
}


add_action( 'woocommerce_after_shop_loop_item', 'raduga10_loop_product_content_close' , 11);
function raduga10_loop_product_content_close(){
	?>
		
	</div>
		
	<?php
}

add_action( 'woocommerce_shop_loop_item', 'raduga10_loop_product_image_close' , 5);
function raduga10_loop_product_image_close(){
	?>
	
	<?php
}
		
		
		
		
		
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart',10 );
add_action( 'woocommerce_after_shop_loop_item', 'raduga10_template_loop_product_add_to_cart' , 9);
function raduga10_template_loop_product_add_to_cart(){
	?>
	<div class="hover-icons">
			<ul>
				<li><a href="<?php global $product; echo $product->add_to_cart_url();?>" data-tooltip="Добавить в корзину"><i class="icon ion-md-cart"></i></a></li>
<!-- 				<li><a href="#" data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li> -->
				<li><a href="#" class="quick-view-modal-container" data-toggle="modal" data-target="#quick-view-modal-container" data-tooltip="Quick View" data-product-id="<?php echo $product->get_id();?>"><i class="icon ion-md-open"></i></a></li>
			</ul>
		</div>
	<?php
// 	echo '<h2 class="product-title"> <a href="'. get_permalink() .'">' . get_the_title() . '</a></h2>';
	
}



remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail',10 );
		
add_action( 'woocommerce_before_shop_loop_item_title', 'estore_loop_product_thumbnail_image_open', 9);
function estore_loop_product_thumbnail_image_open(){
	echo '<a href="' . get_permalink() . '">';
	
	//echo woocommerce_get_product_thumbnail();
}	

add_action( 'woocommerce_before_shop_loop_item_title', 'estore_loop_product_thumbnail_image_close', 31);
function estore_loop_product_thumbnail_image_close(){
	echo '</a>';
}
		
		
add_action( 'woocommerce_before_shop_loop_item_title', 'estore_loop_product_div_image_close', 30);
function estore_loop_product_div_image_close(){
	global $product;
	$attachment_ids = $product->get_gallery_image_ids();
	$attachment_ids_counter = 0;
	
	if ( $attachment_ids && has_post_thumbnail() ) {
		foreach ( $attachment_ids as $attachment_id ) {
			$attachment_ids_counter = $attachment_ids_counter + 1;
			
// 			echo '<span>' . $attachment_ids_counter . '</span>' . wp_get_attachment_image( $attachment_id, 'shop_catalog');
           echo wp_get_attachment_image( $attachment_id, 'shop_catalog');
		}
	}
	
}




remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_result_count',20  );
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30  );

add_action( 'woocommerce_before_shop_loop', 'estore_wrapper_count_and_ordering_start', 15 );
function estore_wrapper_count_and_ordering_start(){
	?>
	<!--=======  Shop header  =======-->
	<div class="shop-header mb-30">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
			<!--=======  view mode  =======-->
				<?php woocommerce_result_count();?>
			</div>
				<?php
}

add_action( 'woocommerce_before_shop_loop', 'estore_wrapper_count_and_ordering_close', 35 );
function estore_wrapper_count_and_ordering_close(){
	?>
			<div class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
				<?php woocommerce_catalog_ordering();?>
			</div>
		</div>
	</div>
	<!--=======  End of Shop header  =======-->
	<?php
}


/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */

add_action( 'woocommerce_after_shop_loop', 'estore_wrapper_pagination_open', 9 );
function estore_wrapper_pagination_open(){
	
	?>
	<!--=======  pagination area  =======-->
	<div class="pagination-area mb-md-50 mb-sm-50">
	<?php

	
}

add_action( 'woocommerce_after_shop_loop', 'estore_wrapper_pagination_close', 11 );
function estore_wrapper_pagination_close(){
	?>
	</div>
	<!--=======  End of pagination area  =======-->
	<?php
}
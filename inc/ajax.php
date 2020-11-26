<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/** AJAX SEARCH */

add_action('wp_ajax_search_action', 'esp_search_ajax_action_callback');
add_action('wp_ajax_nopriv_search_action', 'esp_search_ajax_action_callback');
function esp_search_ajax_action_callback(){
	
	if (!wp_verify_nonce($_POST['nonce'], 'search-nonce')){
		wp_die('Данные отправлены с левого адреса');
	}
	
	$arg = array(
		'post_type' => array('post', 'product'),
		'post_status' => 'publish',
		's' => $_POST['s']
	);
	$query_ajax = new WP_Query($arg);
	$json_data = array();//ob_start(PHP_OUTPUT_HANDLER_CLEANABLE);

	if ( $query_ajax->have_posts()) {
		while ($query_ajax->have_posts()) {
			$query_ajax->the_post();
			if( get_the_title() ) {
				$json_data[] = '<a href="'.get_the_permalink().'" target="_blank">'.get_the_title().'</a>';
			}
			
			
			//<!-- <div class="title-searche"><?php echo get_the_title();</div> -->

		}
	}
	//$json_data['out'] .= ob_get_clean();
	wp_send_json($json_data);
	wp_die();
}





/** AJAX QUICK VIEW CARD */

add_action( 'wp_ajax_ajax_quick_view', 'estore_quick_view_product_callback' );
add_action( 'wp_ajax_nopriv_ajax_quick_view', 'estore_quick_view_product_callback' );
function estore_quick_view_product_callback(){
	
	if ( ! wp_verify_nonce( $_POST['nonce'], 'quick-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}
	
	$product = wc_get_product(esc_attr($_POST['id']));
	//ob_start();
	$product_attachment_ids = $product->get_gallery_image_ids();
													//get_pr($attachment_ids);
													//var_dump($attachment_ids); 
														
	$data = array();
	
	
	$data['attachment_id'] = get_post_thumbnail_id( $product->get_id() );
	//$data['product_thumb'] = wp_get_attachment_image_url( $data['attachment_id'], 'shop_single');
	$data['product_name'] = $product->get_name();
	
	$product_thumb = wp_get_attachment_image_url( $data['attachment_id'], 'shop_single');
	
	if($product_thumb) {
		$data['product_thumb'] = $product_thumb;
	}
	else {
		$data['product_thumb'] = 'https://raduga10.ru/wp-content/uploads/woocommerce-placeholder-300x300.png';
	}
	
	
	
	
	if ( !empty($product_attachment_ids) ) {
		
		$product_images = array();
		
		foreach( $product_attachment_ids as $attachment_id ) {
			
			$product_images[] = wp_get_attachment_image_url( $attachment_id, 'shop_catalog');
		}
		
		$data['product_images'] = $product_images;
		
	}
	
	

	$data['regular_price'] = $product->get_regular_price();
	$data['price'] = $product->get_price();
	$data['sale_price'] = $product->get_sale_price();
				
	$data['product_descr'] = $product->get_description();	
	$data['product_add_to_cart'] = $product->add_to_cart_url();
	$data['cart_button_class'] = 'product_type_'. $product->get_type();
	$data['data_product_id'] = $product->get_id();
	$data['data_product_sku'] = $product->get_sku();
	$data['data_product_label'] = $product->get_description();



	
	//$data['product'] = ob_get_clean();
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
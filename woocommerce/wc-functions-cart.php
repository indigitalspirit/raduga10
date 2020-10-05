<?php 
/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'raduga10_woocommerce_header_cart' ) ) {
			raduga10_woocommerce_header_cart();
		}
	?>
 */

// if ( ! function_exists( 'raduga10_woocommerce_cart_link_fragment' ) ) {
// 	/**
// 	 * Cart Fragments.
// 	 *
// 	 * Ensure cart contents update when products are added to the cart via AJAX.
// 	 *
// 	 * @param array $fragments Fragments to refresh via AJAX.
// 	 * @return array Fragments to refresh via AJAX.
// 	 */
// 	function raduga10_woocommerce_cart_link_fragment( $fragments ) {
// 		ob_start();
// 		raduga10_woocommerce_cart_link();
// 		$fragments['a.cart-contents'] = ob_get_clean();

// 		return $fragments;
// 	}
// }
// add_filter( 'woocommerce_add_to_cart_fragments', 'raduga10_woocommerce_cart_link_fragment' );



if ( ! function_exists( 'raduga10_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function raduga10_woocommerce_cart_link() {
    ?>
    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'raduga10' ); ?>" id="cart-icon">
    <?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d товаров', WC()->cart->get_cart_contents_count(), 'raduga10' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
								<span class="image"><i class="icon ion-md-cart"></i></span>
								<h5><?php //echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?> <i class="fa fa-angle-down"></i></h5>
								<p><?php echo esc_html( $item_count_text ); ?></p>
							</a> 
    
		<?php
	}
}

// if ( ! function_exists( 'raduga10_woocommerce_header_cart' ) ) {
// 	/**
// 	 * Display Header Cart.
// 	 *
// 	 * @return void
// 	 */
// 	function raduga10_woocommerce_header_cart() {
// 		if ( is_cart() ) {
// 			$class = 'current-menu-item';
// 		} else {
// 			$class = '';
// 		}
 		?>
<!-- // 		<ul id="site-header-cart" class="site-header-cart">
// 			<li class="<?php //echo esc_attr( $class ); ?>">
// 				<?php //raduga10_woocommerce_cart_link(); ?>
// 			</li>
// 			<li> -->
 				<?php
// 				$instance = array(
// 					'title' => '',
// 				);

// 				the_widget( 'WC_Widget_Cart', $instance );
// 				?>
<!-- // 			</li>
// 		</ul> -->
 		<?php
// 	}
// }
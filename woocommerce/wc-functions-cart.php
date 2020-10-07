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

if ( ! function_exists( 'raduga10_woocommerce_cart_link_fragment' ) ) {	
	/**	
	 * Cart Fragments.	
	 *	
	 * Ensure cart contents update when products are added to the cart via AJAX.	
	 *	
	 * @param array $fragments Fragments to refresh via AJAX.	
	 * @return array Fragments to refresh via AJAX.	
	 */	
	function raduga10_woocommerce_cart_link_fragment( $fragments ) {	
		ob_start();	
		raduga10_woocommerce_cart_link();	
		$fragments['a.cart-contents'] = ob_get_clean();	


		return $fragments;	
	}	
}	
add_filter( 'woocommerce_add_to_cart_fragments', 'raduga10_woocommerce_cart_link_fragment' );	


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
		<!-- <span class="image"><a href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="icon ion-md-cart"></i></a></span> -->
		
		<a class="cart-contents" id="cart-icon" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'raduga10' ); ?>">	
			<?php	
			$item_count_text = sprintf(	
				/* translators: number of items in the mini cart. */	
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'raduga10' ),	
				WC()->cart->get_cart_contents_count()	
			);	
			?>	
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>	
			
		</a>	
		<span id="cart-icon">
			<i class="fa fa-angle-down"></i>
		</span>
		

		
		<?php	
	}	
}	


if ( ! function_exists( 'raduga10_woocommerce_header_cart' ) ) {	
	/**	
	 * Display Header Cart.	
	 *	
	 * @return void	
	 */	
	function raduga10_woocommerce_header_cart() {	
		if ( is_cart() ) {	
			$class = 'current-menu-item';	
		} else {	
			$class = '';	
		}	
		?>	
		<?php raduga10_woocommerce_cart_link(); ?>
			<div class="cart-floating-box hidden" id="cart-floating-box" style="">							
				<ul id="site-header-cart" class="site-header-cart cart-items">	
					<li>	
						<?php	
						$instance = array(	
							'title' => '',	
						);	

						the_widget( 'WC_Widget_Cart', $instance );	
						?>	
					</li>	
				</ul>
			</div>	
		<?php	
	}	
}
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raduga10
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title>Furnilife - Furniture eCommerce Bootstrap4 Template</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--=============================================
	=            header container         =
	=============================================-->
	
	<div class="header-container header-sticky">

		<!--=============================================
		=            header top         =
		=============================================-->
		
		<div class="header-top pt-15 pb-15">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-10">
						<div class="header-top-text header-top-text__left text-center text-lg-left mb-0 mb-md-15 mb-sm-15">
								<p>
									<!-- <i class="icon ion-md-alarm"></i>  -->
									<i class="fa fa-phone"></i> 
									<span class="support-no">
										<a href="tel:89814024614">+79814024614</a>
									</span>
								</p>
						</div>

						<div class="header-top-text header-top-text__left text-center text-lg-left mb-0 mb-md-15 mb-sm-15">
							<p>
								<i class="icon ion-md-alarm"></i> 
								<!-- <i class="fa fa-phone"></i>  -->
								<span class="support-no">
									Ежедневно: с 10:00 до 19:00
								</span>
							</p>
						</div>

						<div class="header-top-text header-top-text__left text-center text-lg-left mb-0 mb-md-15 mb-sm-15">
							<p>
								<!-- <i class="icon ion-md-alarm"></i>  -->
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<span class="support-no">
									<a href="/contacts">Адрес магазина: г. Сегежа, ул. Северная д. 3 ТЦ "Радуга"</a>
								</span>
							</p>
						</div>
					</div>

					<div class="col-12 col-lg-2">
						<div class="header-top-text header-top-text__right text-center text-lg-right mb-0 mb-md-15 mb-sm-15">
							<p>
								<!-- <i class="icon ion-md-alarm"></i>  -->
								<a href="https://api.whatsapp.com/send?phone=+78004441755" target="_blank">
									<i class="fa fa-whatsapp"></i>
								</a>
								<a href="https://vk.com/salon_mebeli_segeza" target="_blank">
									<i class="fa fa-vk"></i> 
								</a>
								
								
							</p>
					</div>
					</div>

		
			
				</div>
			</div>
		</div>
		
		<!--=====  End of header top  ======-->
	
		<!--=============================================
		=            navigation menu top            =
		=============================================-->
		
	
		<div class="navigation-menu-top pt-35 pb-35 pt-md-15 pb-md-15 pt-sm-15 pb-sm-15">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6 col-lg-2 col-md-6 col-sm-6 order-1 order-lg-1">
						<!--=======  logo  =======-->
						
						<div class="logo">
							<!-- <a href="index.html">
								<img src="assets/images/logo.png" class="img-fluid" alt="">
							</a> -->
							<?php
								the_custom_logo();
							
				?>
						</div>
						
						<!--=======  End of logo  =======-->
					</div>
					<div class="col-12 col-lg-8 col-md-12 col-sm-12 order-3 order-lg-2">
						<!--=======  header feature container  =======-->
						
						<div class="header-feature-container mt-md-15 mt-sm-15">
							<!--=======  single feature  =======-->
							
							<div class="single-feature d-flex">
								<div class="image">
									<i class="icon ion-md-globe"></i>
								</div>
								<div class="content">
									<h5>Доставим заказ 
										до подъезда</h5>
									<p></p>
								</div>
							</div>
							
							<!--=======  End of single feature  =======-->	
							<!--=======  single feature  =======-->
							
							<div class="single-feature d-flex">
								<div class="image">
									<i class="icon ion-md-checkmark-circle-outline"></i>
								</div>
								<div class="content">
									<h5>соберем мебель 
										за вас</h5>
									<!-- <p>Back guarantee under 7 days</p> -->
								</div>
							</div>
							
							<!--=======  End of single feature  =======-->	
							<!--=======  single feature  =======-->
							
							<div class="single-feature d-flex mb-sm-0">
								<div class="image">
									<i class="icon ion-md-notifications-outline"></i>
								</div>
								<div class="content">
									<h5>привезем мебель 
										под заказ</h5>
									<!-- <p>On every order over $120.00</p> -->
								</div>
							</div>
							
							<!--=======  End of single feature  =======-->	
	
							
						</div>
						
						<!--=======  End of header feature container  =======-->
	
						
					</div>
					<div class=" col-6 col-lg-2 col-md-6 col-sm-6 order-2 order-lg-3">
						<!--=======  cart icon  =======-->
						
						<div class="minicart-section">
							<!-- <a href="#" id="cart-icon">
								<span class="image"><i class="icon ion-md-cart"></i></span>
								<h5>$215.00 <i class="fa fa-angle-down"></i></h5>
								<p>3 items</p>
							</a> -->
	
							<!-- cart floating box -->
							<!-- <div class="cart-floating-box hidden" id="cart-floating-box">
								<div class="cart-items">
									<div class="cart-float-single-item d-flex">
										<span class="remove-item" id="remove-item"><a href="#"><i class="icon ion-md-close"></i></a></span>
										<div class="cart-float-single-item-image">
											<a href="single-product.html"><img src="assets/images/products/product01.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="cart-float-single-item-desc">
											<p class="product-title"> <a href="single-product.html">Duis pulvinar obortis eleifend </a></p>
											<p class="quantity"> Qty: 1</p>
											<p class="price">$20.50</p>
										</div>
									</div>
									<div class="cart-float-single-item d-flex">
										<span class="remove-item"><a href="#"><i class="icon ion-md-close"></i></a></span>
										<div class="cart-float-single-item-image">
											<a href="single-product.html"><img src="assets/images/products/product02.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="cart-float-single-item-desc">
											<p class="product-title"> <a href="single-product.html">Fusce ultricies dolor vitae</a></p>
											<p class="quantity"> Qty: 1</p>
											<p class="price">$20.50</p>
										</div>
									</div>
								</div>
								<div class="cart-calculation">
									<div class="calculation-details">
										<p class="total">Subtotal <span>$22</span></p>
									</div>
									<div class="floating-cart-btn text-center">
										<a class="fl-btn pull-left" href="cart.html">View Cart</a>
										<a class="fl-btn pull-right" href="checkout.html">Checkout</a>
									</div>
								</div>
							</div> -->
							<!-- end of cart floating box -->
							<?php
							if ( function_exists( 'raduga10_woocommerce_cart_link' ) ) {
								raduga10_woocommerce_cart_link();
							}
						?>
						</div>

					
						
						<!--=======  End of cart icon  =======-->
					</div>
				</div>
			</div>
		</div>
		
		<!--=======  End of navigation menu top  =======-->
	
		<!--=============================================
		=            navigation menu         =
		=============================================-->
		
		<div class="navigation-menu">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-12 col-lg-3 col-md-12 col-sm-12">
						<!--=======  category menu  =======-->
						
						<div class="hero-side-category">
							<!-- Category Toggle Wrap -->
							<div class="category-toggle-wrap">
								<!-- Category Toggle -->
								<button class="category-toggle"> <i class="fa fa-bars"></i> <?php esc_html_e( 'Каталог', 'raduga10' ); ?>  </button>
							</div>
	
							<!-- Category Menu -->
							<nav class="category-menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-categories',
										'menu'        => '',
										'container' => false,
										'walker' => new Raduga_Walker_Nav_Menu(),
										


									)
								);
								?>
								<!-- <ul>
									<li><a href="shop-left-sidebar.html">1</a></li>
									<li class="menu-item-has-children"><a href="shop-left-sidebar.html">1</a> -->
										<!-- category submenu -->
										<!-- <ul class="category-mega-menu">
											<li><a href="shop-left-sidebar.html">1.1</a></li>
											<li><a href="shop-left-sidebar.html">1.2</a></li>
											<li><a href="shop-left-sidebar.html">1.3</a></li>
										</ul> -->
									<!-- </li>
									<li class="menu-item-has-children"><a href="shop-left-sidebar.html">2</a>
									</li>
									<li><a href="#" id="more-btn">... Посмотреть все</a></li>
								</ul> -->
							</nav>
						</div>
						
						<!--=======  End of category menu =======-->

						<!--=======  sticky logo  =======-->
						
						<div class="sticky-logo">
							<!-- <a href="index.html">
								<img src="assets/images/logo.png" class="img-fluid" alt="">
							</a> -->
							<?php
								the_custom_logo();
							
				?>
						</div>
						
						<!--=======  End of sticky logo  =======-->

						<!--=======  search icon for tablet  =======-->
                                
						<div class="search-icon-menutop-tablet text-right d-inline-block d-lg-none">
							<a href="#" id="search-overlay-active-button">
								<i class="icon ion-md-search"></i>
							</a>
						</div>
						
						<!--=======  End of search icon for tablet  =======-->
					</div>
					<div class="col-12 col-lg-6">
						<!-- navigation section -->
						<div class="main-menu">
							<nav>
								<!-- <ul>
									<li class="active menu-item-has-children"><a href="index.html">Главная</a>
										
									</li>
									<li class="menu-item-has-children"><a href="shop-left-sidebar.html">Каталог</a>
									
									</li>
									
									<li class="menu-item-has-children"><a href="#">О нас</a>
									
									</li>
									<li class="menu-item-has-children"><a href="#">Акции</a>
									
									</li>
									<li><a href="contact.html">Контакты</a></li>
								</ul> -->
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-main',
										'menu'        => '',
										'container' => false,
									)
								);
								?>
							</nav>
						</div>
						<!-- end of navigation section -->
					</div>
					<div class="col-12 col-lg-3">
						<!--=======  navigation search bar  =======-->
						
						<div class="navigation-search d-none d-lg-block">
						<?php get_search_form(); ?>
						</div>
						
						<!--=======  End of navigation search bar  =======-->
					</div>
					<div class="col-12 d-block d-lg-none">
						<!-- Mobile Menu -->
						<div class="mobile-menu">
						<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-main',
										'menu'        => '',
										'container'       => 'nav', 
										'container_class' => 'mean-nav', 
										//'container_id'    => '',
										//'menu_class'      => 'menu', 
										//'menu_id'         => '',
									)
								);
								?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--=====  End of navigation menu  ======-->
			
	</div>
	<!--=====  End of header container  ======-->




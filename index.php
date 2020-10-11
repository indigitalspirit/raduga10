<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raduga10
 */

get_header();
?>



<!--=============================================
	=            hero slider         =
	=============================================-->
	
	<div class="hero-area mb-30">
		<!--=======  slider container  =======-->
			
		<div class="slider-container">
			<!--=======  hero slider one  =======-->
				
			<div class="hero-slider">
				<!--=======  slider item  =======-->
					
				<div class="hero-slider-item slider-bg-1">
					

					<!--=======  slider content  =======-->
						
					<div class="d-flex flex-column justify-content-center align-items-start h-100">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="slider-content">
										<!-- <p>Exclusive Offer -60% Off This Week </p> -->
										<h1>Салон мебели “Радуга” <span> </span></h1>
										<p class="slider-price">Мягкая и корпусная мебель по доступным ценам <span></span></p>
										<a href="shop-left-sidebar.html" class="slider-btn">Выбрать</a>
									</div>
								</div>
							</div>
						</div>
					</div>
						
					<!--=======  End of slider content  =======-->
				</div>
					
				<!--=======  End of slider item  =======-->

				<!--=======  slider item  =======-->
				

			</div>
			
			<!--=======  End of hero slider one  =======-->
		</div>
		
		<!--=======  End of slider container  =======-->
	</div>
	
	<!--=====  End of hero slider  ======-->



<!--=============================================
	=            shop feature area         =
	=============================================-->
	<div class="shop-feature-area mb-45">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  header feature container  =======-->
						
					<div class="header-feature-container">
						<!--=======  single feature  =======-->
						
						<div class="single-feature d-flex">
							<div class="image">
								<i class="icon ion-md-globe"></i>
							</div>
							<div class="content">
								<h5>доставим заказ 
									до подъезда</h5>
								<!-- <p>Free shipping on all order</p> -->
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
								<h5>привезем мебель под заказ</h5>
								<!-- <p>On every order over $120.00</p> -->
							</div>
						</div>
						
						<!--=======  End of single feature  =======-->	
						<!--=======  single feature  =======-->
						
						<!-- <div class="single-feature d-flex mb-sm-0">
							<div class="image">
								<i class="icon ion-md-time"></i>
							</div>
							<div class="content">
								<h5>ONLINE SUPPORT</h5>
								<p>Support online 24 hours a day</p>
							</div>
						</div> -->
						
						<!--=======  End of single feature  =======-->	

						
					</div>
					
					<!--=======  End of header feature container  =======-->
				</div>
			</div>
		</div>
	</div>

	

	<!--=============================================
	=            slider with banner and sidebar         =
	=============================================-->
	
	<div class="slider-banner-sidebar-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  slider with banner and sidebar container  =======-->
					
					<div class="slider-banner-sidebar-container">
						<div class="row no-gutters">
							<div class="col-lg-3 col-xl-2 col-md-4">
								<!--=======  sidebar  =======-->
								
								<div class="slider-sidebar">
									<h3 class="slider-sidebar-title">Диваны</h3>
									<div class="sidebar-list">
										<ul>
											<li><a href="shop-left-sidebar.html">Коллекция 1</a></li>
											<li><a href="shop-left-sidebar.html">Коллекция 2</a></li>
											<li><a href="shop-left-sidebar.html">Коллекция 3</a></li>
											<li><a href="shop-left-sidebar.html">Коллекция 4</a></li>
											<li><a href="shop-left-sidebar.html">Коллекция 5</a></li>
											<!-- <li><a href="shop-left-sidebar.html">Коллекция 6</a></li>
											<li><a href="shop-left-sidebar.html">Коллекция 7</a></li>
											<li><a href="shop-left-sidebar.html">Small Beds</a></li>
											<li><a href="shop-left-sidebar.html">Larger Beds</a></li> -->
										</ul>
									</div>
								</div>
								
								<!--=======  End of sidebar  =======-->
							</div>
							<div class="col-lg-9 col-xl-10 col-md-8">
								<!--=======  banner slider  =======-->
								
								<div class="fl-slider banner-slider">
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Диван 1</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product02.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product02-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Диван 2</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product03.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product03-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Диван 3</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product04.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product04-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Диван 4</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product05.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product05-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Диван 5</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product06.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product06-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Диван 6</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								
								<!--=======  End of banner slider  =======-->

								<!--=======  slider banner  =======-->
								
								<!-- <div class="slider-banner home-one-banner banner-bg banner-bg-1">
									<div class="banner-text">
										<p>Look of The Week</p>
										<p class="big-text">Wood Frame Bedroom</p>
										<p>Only from $209</p>
									</div>
								</div> -->
								
								<!--=======  End of slider banner  =======-->
							</div>
						</div>
					</div>
					
					<!--=======  End of slider with banner and sidebar container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of slider with banner and sidebar  ======-->

	<!--=============================================
	=            slider with banner and sidebar         =
	=============================================-->
	
	<div class="slider-banner-sidebar-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  slider with banner and sidebar container  =======-->
					
					<div class="slider-banner-sidebar-container">
						<div class="row no-gutters">
							<div class="col-lg-3 col-xl-2 col-md-4">
								<!--=======  sidebar  =======-->
								
								<div class="slider-sidebar">
									<h3 class="slider-sidebar-title">Столы</h3>
									<div class="sidebar-list">
										<ul>
											<li><a href="shop-left-sidebar.html">Категория столов 1</a></li>
											<li><a href="shop-left-sidebar.html">Категория столов 2</a></li>
											<li><a href="shop-left-sidebar.html">Категория столов 3</a></li>
											<li><a href="shop-left-sidebar.html">Категория столов 4</a></li>
											<!-- <li><a href="shop-left-sidebar.html">Bedroom Sets</a></li>
											<li><a href="shop-left-sidebar.html">Mattretsser</a></li>
											<li><a href="shop-left-sidebar.html">Armories</a></li>
											<li><a href="shop-left-sidebar.html">Small Beds</a></li>
											<li><a href="shop-left-sidebar.html">Larger Beds</a></li> -->
										</ul>
									</div>
								</div>
								
								<!--=======  End of sidebar  =======-->
							</div>
							<div class="col-lg-9 col-xl-10 col-md-8">
								<!--=======  banner slider  =======-->
								
								<div class="fl-slider banner-slider">
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Cтол 1</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product02.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product02-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Cтол 2</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product03.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product03-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Cтол 3</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product04.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product04-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Cтол 4</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product05.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product05-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Cтол 5</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product06.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product06-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Cтол 6</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								
								<!--=======  End of banner slider  =======-->

								<!--=======  slider banner  =======-->
								
								<!-- <div class="slider-banner home-one-banner banner-bg banner-bg-2">
									<div class="banner-text">
										<p>Look of The Week</p>
										<p class="big-text">Minimal Chair Modern</p>
										<p>Only from $209</p>
									</div>
								</div> -->
								
								<!--=======  End of slider banner  =======-->
							</div>
						</div>
					</div>
					
					<!--=======  End of slider with banner and sidebar container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of slider with banner and sidebar  ======-->



	<!--=============================================
	=            tab slider section         =
	=============================================-->
	
	<div class="tab-product-slider-container mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  tab slider wraspper  =======-->
					
					<div class="tab-slider-wrapper">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="featured-tab" data-toggle="tab" href="#featured" role="tab"
									aria-selected="true">Новинки</a>
								<a class="nav-item nav-link" id="new-arrival-tab" data-toggle="tab" href="#new-arrivals" role="tab"
									aria-selected="false">Скидка</a>
								<a class="nav-item nav-link" id="nav-onsale-tab" data-toggle="tab" href="#on-sale" role="tab"
									aria-selected="false">Уцененный товар</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
								<!--=======  tab product slider  =======-->
								
								<div class="fl-slider tab-product-slider">
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Диван</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product02.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product02-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Стол</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product03.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product03-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Стул</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product04.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product04-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Гарнитур</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product05.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product05-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Кровать</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product06.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product06-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Кресло</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
								</div>
								
								<!--=======  End of tab product slider  =======-->
							</div>
							
							<div class="tab-pane fade" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrival-tab">
								<!--=======  tab product slider  =======-->
								
								<div class="fl-slider tab-product-slider" data-row="1">
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product02.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product02-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Пуф</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>
	
											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Кресло 2</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<!--=======  End of single product  =======-->
								</div>
								
								<!--=======  End of tab product slider  =======-->
							</div>

							<div class="tab-pane fade" id="on-sale" role="tabpanel" aria-labelledby="nav-onsale-tab">
								<!--=======  tab product slider  =======-->
								
								<div class="fl-slider tab-product-slider">
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Стол 3</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product02.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product02-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Стол 4</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image sale-product">
											<a href="single-product.html">
												<img src="assets/images/products/product03.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product03-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Стол 5</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<!--=======  single product  =======-->
									
									<div class="fl-product">
										<div class="image">
											<a href="single-product.html">
												<img src="assets/images/products/product04.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product04-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span>
										</div>
										<div class="content">
											<h2 class="product-title"> <a href="single-product.html">Стол 6</a></h2>
											<div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="product-price">
												<span class="main-price discounted">$71</span>
												<span class="discounted-price">$65</span>
											</p>

											<div class="hover-icons">
												<ul>
													<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
													<li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li>
													<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									
								</div>
								
								<!--=======  End of tab product slider  =======-->
							</div>
						</div>
					</div>
					
					<!--=======  End of tab slider wraspper  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of tab slider section  ======-->



	<!--=============================================
	=            blog post slider         =
	=============================================-->
	
	<div class="blog-post-slider-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->
					
					<div class="section-title">
						<h2>Новости</h2>
					</div>
					
					<!--=======  End of section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog post slider container  =======-->
					 
					<div class="fl-slider blog-post-slider-container">
						<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
								<div class="image">
									<a href="blog-post-left-sidebar.html">
										<img src="assets/images/sliders/blog/01.jpg" class="img-fluid" alt="">
									</a>
								</div>

								<div class="content">
									<h3><a href="blog-post-left-sidebar.html">Заголовок новости</a></h3>
									<p>
										<!-- <span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span> -->
										<span class="post-author"> <i class="icon ion-md-contact"></i>  <a href="blog-left-sidebar.html">Автор поста</a></span>
									</p>
									<p class="post-excerpt">
										Короткий текст поста
									</p>
									<a class="fl-button" href="blog-post-left-sidebar.html">Подробнее</a>
								</div>
							</div>
						</div>
						
						<!--=======  End of single-blog-post  =======-->
						<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
								<div class="image">
									<a href="blog-post-left-sidebar.html">
										<img src="assets/images/sliders/blog/02.jpg" class="img-fluid" alt="">
									</a>
								</div>

								<div class="content">
									<h3><a href="blog-post-left-sidebar.html">Заголовок новости</a></h3>
									<p>
										<!-- <span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span> -->
										<span class="post-author"> <i class="icon ion-md-contact"></i>  <a href="blog-left-sidebar.html">Автор поста</a></span>
									</p>
									<p class="post-excerpt">
										Короткий текст поста
									</p>
									<a class="fl-button" href="blog-post-left-sidebar.html">Подробнее</a>
								</div>
							</div>
						</div>
						
						<!--=======  End of single-blog-post  =======-->
						<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
							<div class="image">
								<a href="blog-post-left-sidebar.html">
									<img src="assets/images/sliders/blog/03.jpg" class="img-fluid" alt="">
								</a>
							</div>

							<div class="content">
								<h3><a href="blog-post-left-sidebar.html">Заголовок новости</a></h3>
								<p>
									<!-- <span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span> -->
									<span class="post-author"> <i class="icon ion-md-contact"></i>  <a href="blog-left-sidebar.html">Автор поста</a></span>
								</p>
								<p class="post-excerpt">
									Короткий текст поста
								</p>
								<a class="fl-button" href="blog-post-left-sidebar.html">Подробнее</a>
							</div>
						</div>
						</div>
						
						<!--=======  End of single-blog-post  =======-->
						<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
								<div class="image">
									<a href="blog-post-left-sidebar.html">
										<img src="assets/images/sliders/blog/04.jpg" class="img-fluid" alt="">
									</a>
								</div>

								<div class="content">
									<h3><a href="blog-post-left-sidebar.html">3 things everyone knows about furniture</a></h3>
									<p>
										<!-- <span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span> -->
										<span class="post-author"> <i class="icon ion-md-contact"></i>  <a href="blog-left-sidebar.html">Автор поста</a></span>
									</p>
									<p class="post-excerpt">
										Короткий текст поста
									</p>
									<a class="fl-button" href="blog-post-left-sidebar.html">Подробнее</a>
								</div>
							</div>
						</div>
						<!--=======  End of single-blog-post  =======-->
						<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
								<div class="image">
									<a href="blog-post-left-sidebar.html">
										<img src="assets/images/sliders/blog/05.jpg" class="img-fluid" alt="">
									</a>
								</div>

								<div class="content">
									<h3><a href="blog-post-left-sidebar.html">Top 10 tips with furniture</a></h3>
									<p>
										<!-- <span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span> -->
										<span class="post-author"> <i class="icon ion-md-contact"></i>  <a href="blog-left-sidebar.html">Автор поста</a></span>
									</p>
									<p class="post-excerpt">
										Короткий текст поста
									</p>
									<a class="fl-button" href="blog-post-left-sidebar.html">read more</a>
								</div>
							</div>
						</div>
						
						<!--=======  End of single-blog-post  =======-->
						<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
							<div class="image">
								<a href="blog-post-left-sidebar.html">
									<img src="assets/images/sliders/blog/06.jpg" class="img-fluid" alt="">
								</a>
							</div>

							<div class="content">
								<h3><a href="blog-post-left-sidebar.html">Заголовок поста</a></h3>
								<p>
									<!-- <span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span> -->
									<span class="post-author"> <i class="icon ion-md-contact"></i> <a href="blog-left-sidebar.html">Автор</a></span>
								</p>
								<p class="post-excerpt">
									Короткий текст поста
								</p>
								<a class="fl-button" href="blog-post-left-sidebar.html">Подробнее</a>
							</div>
							</div>
						</div>
						
						<!--=======  End of single-blog-post  =======-->
						
					</div>
					
					<!--=======  End of blog post slider container  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of blog post slider  ======-->


	<!--=============================================
	=           lead form 
	=============================================-->
	
	<div class="lead-contacts mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!--=======  contact form content  =======-->
					
					<div class="contact-form-content">
						<h2 class="contact-page-title">Есть вопросы?</h2>
						<p>
							Напишите нам, заполнив форму ниже, или позвоните по тел. ХХХХХХХ
						</p>

						<div class="contact-form">
							<form id="contact-form" action="assets/php/mail.php" method="post">
								<div class="form-group">
									<label>Ваше имя: <span class="required">*</span></label>
									<input type="text" name="customerName" id="customername" required="">
								</div>
								<div class="form-group">
									<label>Ваш email: <span class="required">*</span></label>
									<input type="email" name="customerEmail" id="customerEmail" required="">
								</div>
								<div class="form-group">
									<label>Ваш телефон:</label>
									<input type="phone" name="contactPhone" id="contactPhone">
								</div>
								<div class="form-group">
									<label>Сообщение:</label>
									<textarea name="contactMessage" id="contactMessage"></textarea>
								</div>
								<div class="form-group mb-0">
									<button type="submit" value="submit" id="submit" class="fl-btn" name="submit">Отправить</button>
									<span class="contact-form__caption">
										Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="#">"Политикой конфиденциальности"</a>
									</span>
								</div>
							</form>
						</div>
						<p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
					</div>
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>


	<!--=============================================
	=           lead-seo text 
	=============================================-->
	
	<div class="lead-seo mb-90">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!--=======  lead-seo content  =======-->
					
					<div class="lead-seo-content">
						<div class="section-title">
							<h2>Здесь будет текст для поисковика</h2>
						</div>
				
						<p>
							lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
						</p>

						<p>
							lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
						</p>

						
					</div>
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>







	<!-- <main id="primary" class="site-main"> -->

		<?php
		// if ( have_posts() ) :

		// 	if ( is_home() && ! is_front_page() ) :
				?>
				<!-- <header>
					<h1 class="page-title screen-reader-text"><?php //single_post_title(); ?></h1>
				</header> -->
				<?php
		// 	endif;

		// 	/* Start the Loop */
		// 	while ( have_posts() ) :
		// 		the_post();

		// 		/*
		// 		 * Include the Post-Type-specific template for the content.
		// 		 * If you want to override this in a child theme, then include a file
		// 		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		// 		 */
		// 		get_template_part( 'template-parts/content', get_post_type() );

		// 	endwhile;

		// 	the_posts_navigation();

		// else :

		// 	get_template_part( 'template-parts/content', 'none' );

		// endif;
		?>

	<!-- </main> -->
	<!-- #main -->

<?php
//get_sidebar();
get_footer();

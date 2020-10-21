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

<?php 
	//Screen 1 ACF fields
	$main_sc1_title = get_field("main_sc1_title", 97 );
	$main_sc1_subtitle = get_field("main_sc1_subtitle", 97 );
	$main_sc1_button = get_field("main_sc1_button", 97 );
	$main_sc1_img = get_field("main_sc1_title", 97 );

	//echo '	$main_sc1_img' . 	$main_sc1_img;

	//Screen 2 ACF fields
	$main_sc2_block_1 = get_field("main_sc2_block_1", 97 );
	$main_sc2_block_2 = get_field("main_sc2_block_2", 97 );
	$main_sc3_block_3 = get_field("main_sc3_block_3", 97 );

	//Screen 3 ACF fields
	$main_sc3_categories = get_field("main_sc3_categories", 97 );

	//Screen 4 ACF fields
	$main_sc4_tabs = get_field("main_sc4_tabs", 97 );

	//Screen 5 ACF fields
	$main_sc5_title = get_field("main_sc5_title", 97 );
	$main_sc5_news = get_field("main_sc5_news", 97 );

	//Screen 6 ACF fields
	$main_sc6_title = get_field("main_sc6_title", 97 );
	$main_sc6_subtitle = get_field("main_sc6_subtitle", 97 );

	//Screen 7 ACF fields
	$main_sc7_title = get_field("main_sc7_title", 97 );
	$main_sc7_text = get_field("main_sc7_text", 97 );

?>



<!--=============================================
	=            hero slider         =
	=============================================-->
	
	<div class="hero-area mb-30">
		<!--=======  slider container  =======-->
			
		<div class="hero-block-container">
			<!--=======  hero slider one  =======-->
				
			<div class="hero-block">
				<!--=======  slider item  =======-->
					
				<div class="hero-block-photo" style="background-image: url(<?php echo $main_sc1_img; ?>);">
					

					<!--=======  slider content  =======-->
						
					<div class="d-flex flex-column justify-content-center align-items-start h-100">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="slider-content">
										<h1>
											<?php echo $main_sc1_title; ?>
										</h1>
										<p class="slider-price">
											<?php echo $main_sc1_subtitle; ?>
										</p>
										<a href="shop-left-sidebar.html" class="slider-btn">
											<?php echo $main_sc1_button; ?>
										</a>
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
								<h5>
									<?php echo $main_sc2_block_1; ?>
								</h5>
							</div>
						</div>
						
						<!--=======  End of single feature  =======-->	
						<!--=======  single feature  =======-->
						
						<div class="single-feature d-flex">
							<div class="image">
								<i class="icon ion-md-checkmark-circle-outline"></i>
							</div>
							<div class="content">
								<h5>
									<?php echo $main_sc2_block_1; ?>
								</h5>
							</div>
						</div>
						
						<!--=======  End of single feature  =======-->	
						<!--=======  single feature  =======-->
						
						<div class="single-feature d-flex mb-sm-0">
							<div class="image">
								<i class="icon ion-md-notifications-outline"></i>
							</div>
							<div class="content">
								<h5>
									<?php echo $main_sc2_block_1; ?>
								</h5>
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
									<h3 class="slider-sidebar-title">
										<?php echo $main_sc3_categories; ?>
									</h3>
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
									aria-selected="true">
									<?php echo $main_sc4_tabs; ?>
								</a>
								<a class="nav-item nav-link" id="new-arrival-tab" data-toggle="tab" href="#new-arrivals" role="tab"
									aria-selected="false">
									<?php echo $main_sc4_tabs; ?>
								</a>
								<a class="nav-item nav-link" id="nav-onsale-tab" data-toggle="tab" href="#on-sale" role="tab"
									aria-selected="false">
									<?php echo $main_sc4_tabs; ?>
								</a>
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
						<h2>
							<?php echo $main_sc5_title; ?>
						</h2>
					</div>
					
					<!--=======  End of section title  =======-->
				</div>
			</div>

			<?php if( $main_sc5_news ): ?>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog post slider container  =======-->
					 
					<!-- <div class="fl-slider blog-post-slider-container"> -->
					<div class="blog-post-slider-container">

						<?php 
							for($i = 0; $i < count($main_sc5_news); $i++ ) {
						
						?>
							<!--=======  single-blog-post  =======-->
							<div class="col">
								<div class="single-blog-post">
									<div class="image">
										<a href="blog-post-left-sidebar.html">
											<img src="assets/images/sliders/blog/01.jpg" class="img-fluid" alt="">
										</a>
									</div>

									<div class="content">
										<h3>
											<a href="blog-post-left-sidebar.html">
											<?php echo $main_sc5_news; ?>
											</a>
											</h3>
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
							<?php } ?>

					</div>
					
					<!--=======  End of blog post slider container  =======-->
				</div>
			</div>
			<?php endif; ?>
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
						<h2 class="contact-page-title">
							<?php echo $main_sc6_title; ?>
						</h2>
						<p>
							<?php echo $main_sc6_subtitle; ?>
						</p>

						<div class="contact-form">
							<!-- <form id="contact-form" action="assets/php/mail.php" method="post">
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
							</form> -->
							<?php echo do_shortcode('[contact-form-7 id="182" title="Заявка на главной"]'); ?>
						</div>
						<!-- <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p> -->
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
							<h2>
								<?php echo $main_sc7_title; ?>
							</h2>
						</div>
				
						<div>
							<?php echo $main_sc7_text; ?>
						</div>						
					</div>
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>



<?php
//get_sidebar();
get_footer();

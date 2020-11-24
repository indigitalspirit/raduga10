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
	$main_sc1_image = get_field("main_sc1_image", 97 );

	//echo '	$main_sc1_img' . 	$main_sc1_img;

	//Screen 2 ACF fields
	$main_sc2_block_1 = get_field("main_sc2_block_1", 97 );
	$main_sc2_block_2 = get_field("main_sc2_block_2", 97 );
	$main_sc2_block_3 = get_field("main_sc2_block_3", 97 );

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
	
	
	<div class="hero-area main-slider mb-45">
		<!--=======  slider container  =======-->
			
		<div class="hero-block-container">
			<!--=======  hero slider one  =======-->
				
			<div class="hero-block">
				<!--=======  slider item  =======-->
					
				<div class="hero-block-photo" style="background-image: url(<?php echo $main_sc1_image; ?>);">
					

					<!--=======  slider content  =======-->
						
					<div class="d-flex flex-column justify-content-center align-items-start h-100 hero-block-photo__descr">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="slider-content hero-block__title">
										<!-- <h1>
											<?php echo $main_sc1_title; ?>
										</h1>
										<p class="slider-price hero-block__subtitle">
											<?php echo $main_sc1_subtitle; ?>
										</p>
										<a href="shop-left-sidebar.html" class="slider-btn  hero-block__btn">
											<?php echo $main_sc1_button; ?>
										</a> -->


										<p class="slider-price hero-block__subtitle">
										<?php echo $main_sc1_title; ?> 
										</p>
										<h1>
											<?php echo $main_sc1_subtitle; ?>
										</h1>
									
										<a href="/shop" class="slider-btn  hero-block__btn">
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
							<?php echo $main_sc2_block_1['main_sc2_block_1_icon']; ?>
							</div>
							<div class="content">
								<h5>
									<?php echo $main_sc2_block_1['main_sc2_block_1_text']; ?>
								</h5>
							</div>
						</div>
						
						<!--=======  End of single feature  =======-->	
						<!--=======  single feature  =======-->
						
						<div class="single-feature d-flex">
							<div class="image">
							<?php echo $main_sc2_block_2['main_sc2_block_2_icon']; ?>
							</div>
							<div class="content">
								<h5>
								<?php echo $main_sc2_block_2['main_sc2_block_2_text']; ?>
								</h5>
							</div>
						</div>
						
						<!--=======  End of single feature  =======-->	
						<!--=======  single feature  =======-->
						
						<div class="single-feature d-flex mb-sm-0">
							<div class="image">
							<?php echo $main_sc2_block_3['main_sc2_block_3_icon']; ?>
							</div>
							<div class="content">
								<h5>
								<?php echo $main_sc2_block_3['main_sc2_block_3_text']; ?>
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

	<?php 
	//get_pr($main_sc3_categories);
	//$prod_categories = array();
	//$prod_categories = $main_sc3_categories;
	//get_pr($main_sc3_categories);
	// $prod_categories[] = trim($main_sc3_categories['main_sc3_category_2']);
	// $prod_categories[] = trim($main_sc3_categories['main_sc3_category_3']);
	// $prod_categories[] = trim($main_sc3_categories['main_sc3_category_4']);

	foreach($main_sc3_categories as $main_prod_cat) {
		if($main_prod_cat) {


			$prod_args = array(
				'category' => $main_prod_cat,
				'orderby'  => 'name',
			);

			$products_by_cat = wc_get_products( $prod_args );

			if($products_by_cat){
	?>
	
	<div class="slider-banner-sidebar-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  slider with banner and sidebar container  =======-->
					<?php
						$slider_prod_cat = get_term_by( 'slug', $main_prod_cat, 'product_cat' );
					?>
					
					<div class="slider-banner-sidebar-container">
						<div class="row no-gutters">
						
							<div class="col-lg-3 col-xl-2 col-md-4">
								<!--=======  sidebar  =======-->
								
								<div class="slider-sidebar">
									<h3 class="slider-sidebar-title">
										<?php 
											if( $slider_prod_cat ){
													echo $slider_prod_cat->name;
													//get_pr($prod_cat);
											}
										?>
									</h3>
									<?php 
										
										// Get subcategories of the current category
										$slider_prod_taxonomy = 'product_cat';
										$slider_prod_subcategories = get_terms([
												'taxonomy'    => $slider_prod_taxonomy,
												'hide_empty'  => true,
												'child_of'      => $slider_prod_cat->term_id
										]);

										if($slider_prod_subcategories) {
										// Loop through product subcategories WP_Term Objects
																						
									?>

									<div class="sidebar-list">
										<ul>
										<?php
											foreach ( $slider_prod_subcategories as $slider_prod_subcategory ) {
												$slider_prod_subcategory_link = get_term_link( $slider_prod_subcategory, $slider_prod_taxonomy );
										?>

											<li>
												<a href="<?php echo $slider_prod_subcategory_link;?>">
													<?php echo $slider_prod_subcategory->name; ?>
												</a>
											</li>
											
										<?php
											}
										?>
										</ul>
									</div>

									<?php 
										}
									?>
								</div>
								
								<!--=======  End of sidebar  =======-->
							</div>

							<div class="col-lg-9 col-xl-10 col-md-8">
								<!--=======  banner slider  =======-->
								
								<div class="fl-slider banner-slider">
									<!--=======  single product  =======-->
									<?php
										foreach($products_by_cat as $product) {
											//get_pr($product);
											//echo 'Type: '  . $product->get_type() . '<br>';  // Product type
											//echo 'ID: '    . $product->get_id() . '<br>';    // Product ID
											//echo 'Title: ' . $product->get_title() . '<br>'; // Product title
											//echo 'Price: ' . $product->get_price();          // Product price
										//	echo $product['name'];

											$attachment_ids = $product->get_gallery_image_ids();
											//get_pr($attachment_ids);
											
										
										
									?>
									<div class="fl-product">
										<div class="image sale-product">
											<a href="<?php echo $product->get_permalink(); ?>">
												<?php
													//if ( $attachment_ids && has_post_thumbnail() ):
// 											if ( has_post_thumbnail() ):
											$fl_product_thumb = wp_get_attachment_image_url( get_post_thumbnail_id( $product->get_id() ), 'shop_single');
 											if ( $fl_product_thumb ):
											
											?>
												
												<img src="<?php echo $fl_product_thumb; ?>" class="img-fluid" alt="<?php echo $product->get_title();?>">
												
												<?php
											
												else:
											
											?>
												<img src="http://raduga10.ru/wp-content/uploads/woocommerce-placeholder-300x300.png" alt="Ожидается изображения товара" class="<?php echo $product->get_title();?>">
												
											<?php
												endif; 
															//echo 'has thumb:' . 
														//foreach( $attachment_ids as $attachment_id ) {
															//echo $image_link = wp_get_attachment_url( $attachment_id );
															 //Get URL of Gallery Images - default wordpress image sizes
															// echo $Original_image_url = wp_get_attachment_url( $attachment_id );
															// echo $full_url = wp_get_attachment_image_src( $attachment_id, 'full' )[0];
															// echo $medium_url = wp_get_attachment_image_src( $attachment_id, 'medium' )[0];
															// echo $thumbnail_url = wp_get_attachment_image_src( $attachment_id, 'thumbnail' )[0];

															//Get URL of Gallery Images - WooCommerce specific image sizes
															// echo $shop_thumbnail_image_url = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' )[0];
															// echo $shop_catalog_image_url = wp_get_attachment_image_src( $attachment_id, 'shop_catalog' )[0];
															// echo $shop_single_image_url = wp_get_attachment_image_src( $attachment_id, 'shop_single' )[0];

															//echo Image instead of URL
															// echo wp_get_attachment_image($attachment_id, 'full');
															// echo wp_get_attachment_image($attachment_id, 'medium');
															// echo wp_get_attachment_image($attachment_id, 'thumbnail');
															// echo wp_get_attachment_image($attachment_id, 'shop_thumbnail');
															// echo wp_get_attachment_image($attachment_id, 'shop_catalog');
															// echo wp_get_attachment_image($attachment_id, 'shop_single');

														//}
												
												
													//the_post_thumbnail_url('shop_thumbnail'); 
													//echo '</div>';

													
													$attachment_ids = $product->get_gallery_image_ids();
													//get_pr($attachment_ids);
													//var_dump($attachment_ids); 

													if ( !empty($attachment_ids) ) {
														//echo  $attachment_ids[0] . '   !  ';
												?>
													
													<img src="<?php echo wp_get_attachment_image_url( $attachment_ids[0], 'shop_catalog'); ?>" class="img-fluid second-img" alt="<?php echo $product->get_title() . '-2';?>">

												<?php
	
													}
												?>

												<!-- <img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt=""> -->
											
											</a>
											<!-- wishlist icon -->
											<!-- <span class="wishlist-icon">
													<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span> -->
										</div>
										<div class="content">
											<h2 class="product-title"> 
												<a href="<?php echo $product->get_permalink(); ?>">
													<?php echo $product->get_title(); ?>
												</a>
											</h2>
											<div class="rating">
												<?php 

													
													$rating  = $product->get_average_rating();
													$count   = $product->get_rating_count();

													echo wc_get_rating_html( $rating, $count );
												
												?>
												<!-- <i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i> -->
											</div>

											<?php if ( $price_ordinary = $product->get_price() ) : ?>
											<!-- <span class="price"> -->
											<p class="price">
												<?php if ( $price_sale = $product->get_sale_price() ) : ?>
												<del>
													<span class="woocommerce-Price-amount amount">
														<bdi><?php echo $price_sale; ?>
															<span class="woocommerce-Price-currencySymbol">₽</span>
														</bdi>
													</span>
												</del>
												<?php endif; ?>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<bdi><?php echo $price_ordinary; ?>
															<span class="woocommerce-Price-currencySymbol">₽</span>
														</bdi>
													</span>
												</ins> 
												
											</p>
											<!-- </span> -->
											<?php endif; ?>

											<!-- <p class="price">
										
												<span class="price"></span>
											
												<span class="main-price discounted">
													<?php echo $product->get_price();?>
												</span>
												<span class="discounted-price">
												<?php echo $product->get_sale_price();?>
												</span>
											</p> -->

											<div class="hover-icons">
												<ul>
													<li><a href="<?php echo $product->add_to_cart_url();?>"  data-tooltip="Добавить в корзину"><i class="icon ion-md-cart"></i></a></li>
													<!-- <li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li> -->
													<li><a href="#" class="quick-view-modal-container" data-toggle="modal" data-target="#quick-view-modal-container" data-tooltip="Быстрый просмотр" data-product-id="<?php echo $product->get_id();?>"><i class="icon ion-md-open"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									
									<!--=======  End of single product  =======-->
									<?php 
										}
									?>
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

	<?php 
		}
	}
}
	?>
	
	<!--=====  End of slider with banner and sidebar  ======-->


	<!--=============================================
	=            tab slider section         =
	=============================================-->

	<?php 
		if($main_sc4_tabs):
	?>

	<div class="tab-product-slider-container mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  tab slider wraspper  =======-->
					
					
					<div class="tab-slider-wrapper">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<?php 
									if( $main_sc4_tabs['main_sc4_tab_1'] ) {
								?>
									<a class="nav-item nav-link active" id="featured-tab" data-toggle="tab" href="#featured" role="tab"
										aria-selected="true">
										<?php echo $main_sc4_tabs['main_sc4_tab_1']; ?>
									</a>
								<?php 
									}
									if( $main_sc4_tabs['main_sc4_tab_2'] ) {
								?>
									<a class="nav-item nav-link" id="new-arrival-tab" data-toggle="tab" href="#new-arrivals" role="tab"
										aria-selected="false">
										<?php echo $main_sc4_tabs['main_sc4_tab_2']; ?>
									</a>
								<?php 
									}
									if( $main_sc4_tabs['main_sc4_tab_3'] ) {
								?>
									<a class="nav-item nav-link" id="nav-onsale-tab" data-toggle="tab" href="#on-sale" role="tab"
										aria-selected="false">
										<?php echo $main_sc4_tabs['main_sc4_tab_3']; ?>
									</a>
								<?php 
									}
								?>
							</div>
						</nav>

						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
								<!--=======  tab product slider  =======-->
								
								<?php 
									if( $main_sc4_tabs['main_sc4_tab_1'] ) {

										$seven_days_before = date('Y-m-d', strtotime(date("Y-m-d"). ' - 7 days')); //date("Y-m-d");
										//echo $seven_days_before;
										//echo date('Y-m-d', strtotime($seven_days_before. ' - 7 days'));  

										$new_prod_args = array(
											//'category' => $main_prod_cat,
											'orderby'  => 'name',
											'status' => 'publish',
											'limit' => 10,
											'date_created' => '>='.$seven_days_before
										);
							
										$new_products = wc_get_products( $new_prod_args );
							
										if( $new_products ){
								?>
								<div class="fl-slider tab-product-slider">
									<!--=======  single product  =======-->
									<?php 
										foreach($new_products as $new_product) {
									?>

									<div class="fl-product">
										<div class="image sale-product">
										
											<a href="<?php echo $new_product->get_permalink(); ?>">
												<!-- <img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt=""> -->
											</a>
											<!-- wishlist icon -->
											<!-- <span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span> -->
										</div>
										<div class="content">
											<h2 class="product-title"> 
												<a href="<?php echo $new_product->get_permalink(); ?>">
												<?php echo $new_product->get_title(); ?>
												</a>
											</h2>
											<!-- <div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div> -->
											<!-- <p class="price">
												<span class="main-price discounted">
													<?php echo $new_product->get_price();?>
												</span>
												<span class="discounted-price">
													<?php echo $new_product->get_sale_price();?>
												</span>
											</p> -->

											<?php if ( $price_ordinary = $product->get_price() ) : ?>
											<!-- <span class="price"> -->
											<p class="price">
												<?php if ( $price_sale = $product->get_sale_price() ) : ?>
												<del>
													<span class="woocommerce-Price-amount amount">
														<bdi><?php echo $price_sale; ?>
															<span class="woocommerce-Price-currencySymbol">₽</span>
														</bdi>
													</span>
												</del>
												<?php endif; ?>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<bdi><?php echo $price_ordinary; ?>
															<span class="woocommerce-Price-currencySymbol">₽</span>
														</bdi>
													</span>
												</ins> 
												
											</p>
											<!-- </span> -->
											<?php endif; ?>

											<div class="hover-icons">
												<ul>
													<li>
														<a href="<?php echo $new_product->add_to_cart_url();?>"  data-tooltip="Добавить в корзину">
															<i class="icon ion-md-cart"></i>
														</a>
													</li>
													<!-- <li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li> -->
													<li>
														<a href="#" class="quick-view-modal-container" data-toggle="modal" data-target="#quick-view-modal-container" data-tooltip="Быстрый просмотр" data-product-id="<?php echo $new_product->get_id();?>">
															<i class="icon ion-md-open"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<?php 
										}
									?>
									<!--=======  End of single product  =======-->

								</div>
								<?php
									}
								}
								?>
								
								<!--=======  End of tab product slider  =======-->
							</div>
							
							<?php 
								$prods_on_sale = wc_get_product_ids_on_sale();
								if( ($main_sc4_tabs['main_sc4_tab_2']) && ($prods_on_sale) ) {
									//$seven_days_before = date("Y-m-d");
									//echo $seven_days_before;  
									
							
									$sale_prod_args = array(
										//'category' => $main_prod_cat,
										'orderby'  => 'name',
										'status' => 'publish',
										'limit' => 10,
										'include' => $prods_on_sale,
									);
						
									$sale_products = wc_get_products( $sale_prod_args );
						
									if( $sale_products ){
										//get_pr($sale_products);

							?>
							<div class="tab-pane fade" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrival-tab">
								<!--=======  tab product slider  =======-->
								
								<div class="fl-slider tab-product-slider" data-row="1">
									<!--=======  single product  =======-->

									<?php 
										foreach($sale_products as $sale_product) {
									?>
									
									<div class="fl-product">
										<div class="image sale-product">
										
											<a href="<?php //echo $sale_product->get_permalink(); ?>">
												<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<!-- <span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span> -->
										</div>
										<div class="content">
											<h2 class="product-title"> 
												<a href="<?php //echo $sale_product->get_permalink(); ?>">
												<?php echo $sale_product->get_title(); ?>
												</a>
											</h2>
											<!-- <div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div> -->
											<!-- <p class="price">
												<span class="main-price discounted">
													<?php echo $sale_product->get_price();?>
												</span>
												<span class="discounted-price">
													<?php echo $sale_product->get_sale_price();?>
												</span>
											</p> -->

											<?php if ( $price_ordinary = $product->get_price() ) : ?>
											<!-- <span class="price"> -->
											<p class="price">
												<?php if ( $price_sale = $product->get_sale_price() ) : ?>
												<del>
													<span class="woocommerce-Price-amount amount">
														<bdi><?php echo $price_sale; ?>
															<span class="woocommerce-Price-currencySymbol">₽</span>
														</bdi>
													</span>
												</del>
												<?php endif; ?>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<bdi><?php echo $price_ordinary; ?>
															<span class="woocommerce-Price-currencySymbol">₽</span>
														</bdi>
													</span>
												</ins> 
												
											</p>
											<!-- </span> -->
											<?php endif; ?>

											<div class="hover-icons">
												<ul>
													<li>
														<a href="<?php echo $sale_product->add_to_cart_url();?>"  data-tooltip="Добавить в корзину">
															<i class="icon ion-md-cart"></i>
														</a>
													</li>
													<!-- <li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li> -->
													<li>
														<a href="#" class="quick-view-modal-container" data-toggle="modal" data-target="#quick-view-modal-container" data-tooltip="Быстрый просмотр" data-product-id="<?php echo $sale_product->get_id();?>">
															<i class="icon ion-md-open"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<?php 
										}
									?>
									
									<!--=======  End of single product  =======-->
								</div>
								
								<!--=======  End of tab product slider  =======-->
							</div>
							<?php
									}
								}
							?>


							<?php 
								if( $main_sc4_tabs['main_sc4_tab_3'] ) {

									$discount_prod_args = array(
										//'category' => $main_prod_cat,
										'orderby'  => 'name',
										'status' => 'publish',
										'limit' => 10,
										'include' => $prods_on_sale,
									);
						
									$discount_products = wc_get_products( $discount_prod_args );
						
									if( $discount_products ){
										//get_pr($sale_products);
							?>
							<div class="tab-pane fade" id="on-sale" role="tabpanel" aria-labelledby="nav-onsale-tab">
								<!--=======  tab product slider  =======-->
								
								<div class="fl-slider tab-product-slider" data-row="1">
									<!--=======  single product  =======-->

									<?php 
										foreach($discount_products as $discount_product) {
									?>
									
									<div class="fl-product">
										<div class="image sale-product">
										
											<a href="<?php //echo $sale_product->get_permalink(); ?>">
												<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
												<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt="">
											</a>
											<!-- wishlist icon -->
											<!-- <span class="wishlist-icon">
												 <a href="#" ><i class="icon ion-md-heart-empty"></i></a>
											</span> -->
										</div>
										<div class="content">
											<h2 class="product-title"> 
												<a href="<?php //echo $sale_product->get_permalink(); ?>">
												<?php echo $discount_product->get_title(); ?>
												</a>
											</h2>
											<!-- <div class="rating">
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star active"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div> -->
											<!-- <p class="price">
												<span class="main-price discounted">
													<?php echo $discount_product->get_price();?>
												</span>
												<span class="discounted-price">
													<?php echo $discount_product->get_sale_price();?>
												</span>
											</p> -->

											<?php if ( $price_ordinary = $product->get_price() ) : ?>
											<!-- <span class="price"> -->
											<p class="price">
												<?php if ( $price_sale = $product->get_sale_price() ) : ?>
												<del>
													<span class="woocommerce-Price-amount amount">
														<bdi><?php echo $price_sale; ?>
															<span class="woocommerce-Price-currencySymbol">₽</span>
														</bdi>
													</span>
												</del>
												<?php endif; ?>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<bdi><?php echo $price_ordinary; ?>
															<span class="woocommerce-Price-currencySymbol">₽</span>
														</bdi>
													</span>
												</ins> 
												
											</p>
											<!-- </span> -->
											<?php endif; ?>

											<div class="hover-icons">
												<ul>
													<li>
														<a href="<?php echo $discount_product->add_to_cart_url();?>"  data-tooltip="Добавить в корзину">
															<i class="icon ion-md-cart"></i>
														</a>
													</li>
													<!-- <li><a href="#"  data-tooltip="Compare"><i class="icon ion-md-options"></i></a></li> -->
													<li>
														<a href="#" class="quick-view-modal-container" data-toggle="modal" data-target="#quick-view-modal-container" data-tooltip="Быстрый просмотр" data-product-id="<?php echo $discount_product->get_id();?>">
															<i class="icon ion-md-open"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<?php 
										}
									?>
									
									<!--=======  End of single product  =======-->
								</div>
								
								<!--=======  End of tab product slider  =======-->
							</div>
							<?php
								}
							}
							?>
						</div>
					</div>
					
					<!--=======  End of tab slider wraspper  =======-->
				</div>
			</div>
		</div>
	</div>

	<?php 
		endif;
	?>
	
	<!--=====  End of tab slider section  ======-->



	<!--=============================================
	=            blog post slider         =
	=============================================-->
	
	<div class="blog-post-slider-area main-page__blog-posts mb-70">
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

			<?php 
		
				
				// задаем нужные нам критерии выборки данных из БД
				$blog_args = array(
					'post_type'        => 'post',
					'orderby'          => 'modified',
					'order'            => 'DESC',
					'post_status'      => 'publish',

				);

				$blog_query = new WP_Query( $blog_args );

				// Цикл
				if ( $blog_query->have_posts() ) {
					$blog_posts_counter = 0;
					
					
					
			
			 
			 ?>
			<div class="row blog-post-slider-container main-page__blog-posts-container">
				<!-- <div class="col-lg-12"> -->
					<!--=======  blog post slider container  =======-->
					 
					<!-- <div class="fl-slider blog-post-slider-container"> -->
					<!-- <div class="blog-post-slider-container">
						<div class="row"> -->
							<?php 
								while ( $blog_query->have_posts() && ( $blog_posts_counter < 3 ) ) {
									$blog_query->the_post();
									$blog_posts_counter = $blog_posts_counter +1;
							?>
								<!--=======  single-blog-post  =======-->
								<div class="col-12 col-md-4">
									<div class="single-blog-post">
										<div class="image">
											<a href="<?php echo get_the_permalink(); ?>">
												<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
											</a>
										</div>

										<div class="content">
											<h3>
												<a href="blog-post-left-sidebar.html">
												<?php the_title(); ?>
												</a>
												</h3>
											<p>
												<!-- <span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span> -->
												<span class="post-author"> <i class="icon ion-md-contact"></i>  <a href="blog-left-sidebar.html"><?php the_author(); ?></a></span>
											</p>
											<p class="post-excerpt">
											<?php the_excerpt(); ?>
											</p>
											<a class="fl-button" href="<?php echo get_the_permalink(); ?>">Подробнее</a>
										</div>
									</div>
								</div>
								<!--=======  End of single-blog-post  =======-->
							<?php } ?>
						
						<!-- </div>
					</div> -->
					
					<!--=======  End of blog post slider container  =======-->
				<!-- </div> -->
			</div>
			<?php 
					}
					// Возвращаем оригинальные данные поста. Сбрасываем $post.
					wp_reset_postdata();
			?>
		</div>
	</div>
	
	<!--=====  End of blog post slider  ======-->


	<!--=============================================
	=           lead form 
	=============================================-->
	
	<div class="lead-contacts lead-contacts__main-page mb-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<!--=======  contact form content  =======-->
					
					<div class="contact-form-content">
						<h2 class="contact-page-title">
							<?php echo $main_sc6_title; ?>
						</h2>
						<p class="contact-page-subtitle">
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

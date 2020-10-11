<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raduga10
 */

?>

<div class="col-lg-3 col-md-6 col-sm-6 col-12">
		<!--=======  grid view product  =======-->
		
		<!--=======  single product  =======-->

		<?php
						
						$searched_product = wc_get_product( get_the_id() );

						$searched_product_regular_price = $searched_product->get_regular_price();

						$searched_product_sale_price = $searched_product->get_sale_price();

						$searched_product_price = $searched_product->get_price();


						?>
		
		<div class="fl-product shop-grid-view-product">
				<div class="image">
						<a href="<?php the_permalink(); ?>">
								 <img src="<?php  echo wp_get_attachment_url( $searched_product->get_image_id() ); ?>" class="img-fluid" alt="">
								 <img src="<?php  echo wp_get_attachment_url( $searched_product->get_image_id() ); ?>" class="img-fluid" alt="">
								
								<?php //raduga10_post_thumbnail(); ?>
						</a>
						<!-- wishlist icon -->
						<span class="wishlist-icon">
										<a href="#" ><i class="icon ion-md-heart-empty"></i></a>
						</span>
				</div>
				<div class="content">
						<h2 class="product-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<!-- <div class="rating">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
						</div> -->
					

						<?php
							if ($searched_product_sale_price && $searched_product_regular_price):
						?>
						<p class="product-price">
								<span class="main-price discounted">
									<?php echo $searched_product_regular_price;?>
								</span>
								<span class="discounted-price">
								<?php echo $searched_product_sale_price;?>
								</span>
						</p>
						<?php 
							elseif ($searched_product_price):
						?>

							<p class="product-price">
								<!-- <span class="main-price discounted">$71</span> -->
								<span class="discounted-price"><?php echo $searched_product_price;?></span>
							</p>
						<?php 
							else:
						?>

						<?php
							endif;
						?>

						<div class="hover-icons">
								<ul>
										<li><a href="#"  data-tooltip="Add to Cart"><i class="icon ion-md-cart"></i></a></li>
										<!--  -->
										<li><a href="#"  data-toggle = "modal" data-target="#quick-view-modal-container" data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
								</ul>
						</div>
				</div>
		</div>
		
		<!--=======  End of single product  =======-->

		<!--=======  End of grid view product  =======-->

		<!--=======  list view product  =======-->
		
		<div class="fl-product shop-list-view-product">
				<div class="image">
						<a href="single-product.html">
								<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
								<img src="assets/images/products/product01-2.jpg" class="img-fluid" alt="">
						</a>
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

						<p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>

						<div class="hover-icons">
								<ul>
										<li><a href="#"  data-tooltip="Add to Cart">Добавить в корзину</a></li>
										<li><a href="#" ><i class="icon ion-md-heart-empty"></i></a></li>
										
								</ul>
						</div>
				</div>
		</div>
		
		<!--=======  End of list view product  =======-->
		
		
</div>



<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<!--=============================================
	=            Quick view modal         =
	=============================================-->
	
	<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25">
							<!-- single product tabstyle one image gallery -->
							<div class="product-image-slider fl-product-image-slider fl3-product-image-slider quickview-product-image-slider">
								<!--product large image start -->
								<div class="tab-content product-large-image-list fl-product-large-image-list fl3-product-large-image-list quickview-product-large-image-list" id="myTabContent2">
									<div class="tab-pane fade show active" id="single-slide-1-q" role="tabpanel" aria-labelledby="single-slide-tab-1-q">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
<!-- 											<img src="assets/images/single-product-slider/01.jpg" class="img-fluid" alt=""> -->
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide-2-q" role="tabpanel" aria-labelledby="single-slide-tab-2-q">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
<!-- 											<img src="assets/images/single-product-slider/02.jpg" class="img-fluid" alt=""> -->
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide-3-q" role="tabpanel" aria-labelledby="single-slide-tab-3-q">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
<!-- 											<img src="assets/images/single-product-slider/03.jpg" class="img-fluid" alt=""> -->
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide-4-q" role="tabpanel" aria-labelledby="single-slide-tab-4-q">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
<!-- 											<img src="assets/images/single-product-slider/04.jpg" class="img-fluid" alt=""> -->
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide-5-q" role="tabpanel" aria-labelledby="single-slide-tab-5-q">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
<!-- 											<img src="assets/images/single-product-slider/05.jpg" class="img-fluid" alt=""> -->
										</div>
										<!--Single Product Image End-->
									</div>
								</div>
								<!--product large image End-->
		
								<!--product small image slider Start-->
								<div class="product-small-image-list fl-product-small-image-list fl3-product-small-image-list quickview-product-small-image-list"> 
									<div class="nav small-image-slider fl3-small-image-slider" role="tablist">
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-1-q" href="#single-slide-1-q">
<!-- 												<img src="assets/images/single-product-slider/01.jpg"
												class="img-fluid" alt=""> -->
											</a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-2-q" href="#single-slide-2-q">
<!-- 												<img src="assets/images/single-product-slider/02.jpg"
												class="img-fluid" alt=""> -->
											</a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-3-q" href="#single-slide-3-q">
<!-- 												<img src="assets/images/single-product-slider/03.jpg"
												class="img-fluid" alt=""> -->
											</a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-4-q" href="#single-slide-4-q">
<!-- 												<img src="assets/images/single-product-slider/04.jpg"
												alt=""> -->
											</a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-5-q" href="#single-slide-5-q">
<!-- 												<img src="assets/images/single-product-slider/05.jpg"
												alt=""> -->
											</a>
										</div>
									</div>
								</div>
								<!--product small image slider End-->
							</div>
							<!-- end of single product tabstyle one image gallery -->
						</div>
						<div class="col-lg-7 col-md-6 col-xs-12">
							<!-- product quick view description -->
							<div class="product-feature-details">
								<h2 class="product-title mb-15">Kaoreet lobortis sagittis</h2>

								<h2 class="product-price mb-15"> 
									<span class="main-price discounted">$12.90</span> 
									<span class="discounted-price"> $10.00</span>
									<span class="discount-percentage">Save 8%</span>
								</h2>

								<p class="product-description mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
								

								<div class="cart-buttons mb-20">
									<div class="pro-qty mr-10">
										<input type="text" value="1">
									</div>
									<div class="add-to-cart-btn">
										<a href="#" class="fl-btn"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
									</div>
								</div>

						
								<div class="social-share-buttons">
									<h3>share this product</h3>
									<ul>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- end of product quick view description -->
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--=====  End of Quick view modal  ======-->
	
	